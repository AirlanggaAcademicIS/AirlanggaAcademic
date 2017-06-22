<?php

namespace App\Http\Controllers\Karyawan\monitoringskripsi;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Response;

use Illuminate\Support\Facades\Auth;

//use Illuminate\Http\Request;

use App\Skripsi;

use Session;

use Illuminate\Support\Facades\Input;

use Request;

use App\Http\Controllers\Controller;

use Carbon\Carbon;

class JadwalSidangController extends Controller
{
    //

      private function cek_duplikat($id_skripsi,$arr)
    {
        # code...
        for($i=0;$i<count($arr);$i++){
            $tmp_arr = $arr[$i];
            if($tmp_arr['id_skripsi']==$id_skripsi)
                return 1;
        }
        return 0;

    }

        private function cari_nama_dosen($nip,$arr_dosen)
    {
       # code...
      for($i=0;$i<count($arr_dosen);$i++){
         if($arr_dosen[$i]->nip==$nip)
         return $arr_dosen[$i]->nama_dosen;         
      }

      return "";

    }

       public function setTglProposalAttribute($value)
   {
       $this->attributes['tgl_sidangpro'] = date("Y-m-d", strtotime($value) );
   }

       public function setTglSkripsiAttribute($value)
   {
       $this->attributes['tgl_sidangskrip'] = date("Y-m-d", strtotime($value) );
   }

    public function view_manage_jadwal_sidang_proposal()
    {
        # code...
        $mahasiswa = DB::table('mahasiswa')->get();
        $kbk = DB::table('kbk')->get();
        $tempat = DB::table('ruang')->get();
        $dosen = DB::table('biodata_dosen')->get();
        $petugas_tu = DB::table('petugas_tu')->get();

         $biodata_dosen = DB::table('biodata_dosen')->get();

        $jadwal_sidang_proposal = DB::table('skripsi')
            ->leftJoin('biodata_mhs', 'skripsi.NIM_id', '=', 'biodata_mhs.nim_id')
            ->leftJoin('kbk', 'skripsi.kbk_id', '=', 'kbk.id_kbk')
            ->leftJoin('petugas_tu','skripsi.nip_petugas_id','=','petugas_tu.nip_petugas')
            ->leftJoin('ruang','skripsi.tempat_sidangpro','=','ruang.id_ruang')
            ->leftJoin('dosen_penguji','dosen_penguji.skripsi_id','=','skripsi.id_skripsi')
            ->leftJoin('dosen_pembimbing','dosen_pembimbing.skripsi_id','=','skripsi.id_skripsi')
            ->select('skripsi.id_skripsi','skripsi.NIM_id', 'biodata_mhs.nama_mhs','kbk.jenis_kbk', 'skripsi.Judul', 'skripsi.tgl_sidangpro', 'skripsi.waktu_sidangpro', 'dosen_pembimbing.nip_id as dosbing','ruang.nama_ruang as nama_ruang','dosen_penguji.nip_id as dosji')
            ->whereNull('skripsi.deleted_at')
            ->whereNull('nilai_sidangpro')

            ->get();
            
            $final_result = array();

            $j = 0;

         for($i = 0; $i<count($jadwal_sidang_proposal)-1;$i++){
                $tmp = array(
                    'id_skripsi'=>$jadwal_sidang_proposal[$i]->id_skripsi,

                    'nim'=>$jadwal_sidang_proposal[$i]->NIM_id,
                    'nama_mhs'=>$jadwal_sidang_proposal[$i]->nama_mhs,
                    'jenis_kbk'=>$jadwal_sidang_proposal[$i]->jenis_kbk,
                    'Judul'=>$jadwal_sidang_proposal[$i]->Judul,
                    'tgl_sidangpro'=>$jadwal_sidang_proposal[$i]->tgl_sidangpro,
                    'waktu_sidangpro'=>$jadwal_sidang_proposal[$i]->waktu_sidangpro,
                    'dosen_pembimbing1'=>$jadwal_sidang_proposal[$i]->dosbing,
                    'nama_dosen_pembimbing1'=>$this->cari_nama_dosen($jadwal_sidang_proposal[$i]->dosbing,$biodata_dosen),
                    'dosen_pembimbing2'=>$jadwal_sidang_proposal[$i+1]->dosbing,
                    'nama_dosen_pembimbing2'=>$this->cari_nama_dosen($jadwal_sidang_proposal[$i+1]->dosbing,$biodata_dosen),
                    'dosen_penguji'=>$jadwal_sidang_proposal[$i]->dosji,
                    'nama_dosen_penguji'=>$this->cari_nama_dosen($jadwal_sidang_proposal[$i]->dosji,$biodata_dosen),
                    'ruang'=>$jadwal_sidang_proposal[$i]->nama_ruang
                    );

                $id_skripsi = $jadwal_sidang_proposal[$i]->id_skripsi;
                $t = $this->cek_duplikat($id_skripsi,$final_result);

                   if($t==0){
                $final_result[$j] = $tmp;
                $j++;
                }

                // $final_result[$j] = $tmp;
                // $j++;

                //array_push($final_result, $tmp);

         }

        $data = array(
                'page'=> 'jadwal-sidang-proposal',
                'daftar_mhs'=>$mahasiswa,
                'daftar_kbk'=>$kbk,
                'daftar_tempat'=>$tempat,
                'daftar_dosen'=>$dosen,
                'daftar_petugas_tu'=>$petugas_tu,
                'jadwal_sidang_proposal'=>$final_result

            );
        return view('karyawan.monitoring-skripsi.jadwal-sidang.proposal',$data);
    }

    public function view_jadwal_sidang_proposal_mahasiswa()
    {
        # code...
        $nim = Auth::user()->username;

        $mahasiswa = DB::table('mahasiswa')->get();
        $kbk = DB::table('kbk')->get();
        $tempat = DB::table('ruang')->get();
        $dosen = DB::table('dosen')->get();
        $petugas_tu = DB::table('petugas_tu')->get();

        $jadwal_sidang_proposal = DB::table('skripsi')
            ->leftJoin('mahasiswa', 'skripsi.NIM_id', '=', 'mahasiswa.nim')
            ->leftJoin('kbk', 'skripsi.kbk_id', '=', 'kbk.id_kbk')
            ->leftJoin('petugas_tu','skripsi.nip_petugas_id','=','petugas_tu.nip_petugas')
            ->leftJoin('ruang','skripsi.tempat_sidangpro','=','ruang.id_ruang')
            ->leftJoin('dosen_penguji','dosen_penguji.skripsi_id','=','skripsi.id_skripsi')
            ->leftJoin('dosen_pembimbing','dosen_pembimbing.skripsi_id','=','skripsi.id_skripsi')
            ->select('skripsi.id_skripsi','mahasiswa.nim', 'skripsi.NIM_id', 'kbk.jenis_kbk', 'skripsi.Judul', 'skripsi.tgl_sidangpro', 'skripsi.waktu_sidangpro', 'dosen_pembimbing.nip_id as dosbing','ruang.nama_ruang','dosen_penguji.nip_id as dosji')
            ->whereNull('skripsi.deleted_at')
            ->whereNull('nilai_sidangpro')
            ->where('NIM_id','=',$nim)

            ->get();
            
            $final_result = array();

            $j = 0;

         for($i = 0; $i<count($jadwal_sidang_proposal)-1;$i++){
                $tmp = array(
                    'id_skripsi'=>$jadwal_sidang_proposal[$i]->id_skripsi,
                    'nim'=>$jadwal_sidang_proposal[$i]->NIM_id,
                    'NIM_id'=>$jadwal_sidang_proposal[$i]->NIM_id,
                    'jenis_kbk'=>$jadwal_sidang_proposal[$i]->jenis_kbk,
                    'Judul'=>$jadwal_sidang_proposal[$i]->Judul,
                    'tgl_sidangpro'=>$jadwal_sidang_proposal[$i]->tgl_sidangpro,
                    'waktu_sidangpro'=>$jadwal_sidang_proposal[$i]->waktu_sidangpro,
                    'dosen_pembimbing1'=>$jadwal_sidang_proposal[$i]->dosbing,
                    'dosen_pembimbing2'=>$jadwal_sidang_proposal[$i+1]->dosbing,
                    'dosen_penguji'=>$jadwal_sidang_proposal[$i]->dosji,
                    'ruang'=>$jadwal_sidang_proposal[$i]->nama_ruang
                    );
                $final_result[$j] = $tmp;
                $j++;

                //array_push($final_result, $tmp);
         }

        // $data = array(
        //         'page'=> 'jadwal-sidang-proposal',
        //         'daftar_mhs'=>$mahasiswa,
        //         'daftar_kbk'=>$kbk,
        //         'daftar_tempat'=>$tempat,
        //         'daftar_dosen'=>$dosen,
        //         'daftar_petugas_tu'=>$petugas_tu,
        //         'jadwal_sidang_proposal'=>$final_result

        //     );

        $data = array(
            'page'=>'lihat-jadwal-sidang-proposal-mahasiswa',
            'jadwal_sidang_proposal'=>$final_result
            );
        return view('mahasiswa.monitoring-skripsi.jadwal-sidang.proposal',$data);

    }

    public function view_jadwal_sidang_skripsi_mahasiswa()
    {
        # code...

         $nim = Auth::user()->username;

         $mahasiswa = DB::table('mahasiswa')->get();
        $kbk = DB::table('kbk')->get();
        $tempat = DB::table('ruang')->get();
        $dosen = DB::table('dosen')->get();
        $petugas_tu = DB::table('petugas_tu')->get();

        $jadwal_sidang_skripsi = DB::table('skripsi')
            ->leftJoin('mahasiswa', 'skripsi.NIM_id', '=', 'mahasiswa.nim')
            ->leftJoin('kbk', 'skripsi.kbk_id', '=', 'kbk.id_kbk')
            ->leftJoin('petugas_tu','skripsi.nip_petugas_id','=','petugas_tu.nip_petugas')
            ->leftJoin('ruang','skripsi.tempat_sidangskrip','=','ruang.id_ruang')
            ->leftJoin('dosen_penguji','dosen_penguji.skripsi_id','=','skripsi.id_skripsi')
            ->leftJoin('dosen_pembimbing','dosen_pembimbing.skripsi_id','=','skripsi.id_skripsi')
            ->select('skripsi.id_skripsi','mahasiswa.nim', 'skripsi.NIM_id', 'kbk.jenis_kbk', 'skripsi.Judul', 'skripsi.tgl_sidangskrip', 'skripsi.waktu_sidangskrip', 'dosen_pembimbing.nip_id as dosbing','ruang.nama_ruang','dosen_penguji.nip_id as dosji')
            ->whereNull('skripsi.deleted_at')
            ->whereNotNull('nilai_sidangpro')
            ->whereNull('nilai_sidangskrip')

            ->get();
            
            $final_result = array();

            $j = 0;

         for($i = 0; $i<count($jadwal_sidang_skripsi)-1;$i++){
                $tmp = array(
                    'id_skripsi'=>$jadwal_sidang_skripsi[$i]->id_skripsi,
                    'nim'=>$jadwal_sidang_skripsi[$i]->nim,
                    'NIM_id'=>$jadwal_sidang_skripsi[$i]->NIM_id,
                    'jenis_kbk'=>$jadwal_sidang_skripsi[$i]->jenis_kbk,
                    'Judul'=>$jadwal_sidang_skripsi[$i]->Judul,
                    'tgl_sidangpro'=>$jadwal_sidang_skripsi[$i]->tgl_sidangskrip,
                    'waktu_sidangpro'=>$jadwal_sidang_skripsi[$i]->waktu_sidangskrip,
                    'dosen_pembimbing1'=>$jadwal_sidang_skripsi[$i]->dosbing,
                    'dosen_pembimbing2'=>$jadwal_sidang_skripsi[$i+1]->dosbing,
                    'dosen_penguji'=>$jadwal_sidang_skripsi[$i]->dosji,
                    'ruang'=>$jadwal_sidang_skripsi[$i]->nama_ruang
                    );
                $final_result[$j] = $tmp;
                $j++;

                //array_push($final_result, $tmp);
         }

        $data = array(
                'page'=> 'jadwal-sidang-skripsi-mahasiswa',
                'jadwal_sidang_skripsi'=>$final_result

            );

         return view('mahasiswa.monitoring-skripsi.jadwal-sidang.skripsi',$data);

    }

     public function view_manage_jadwal_sidang_skripsi()
    {
        # code...

        
         $nim = Auth::user()->username;

        $mahasiswa = DB::table('mahasiswa')->get();
        $kbk = DB::table('kbk')->get();
        $tempat = DB::table('ruang')->get();
        $dosen = DB::table('dosen')->get();
        $petugas_tu = DB::table('petugas_tu')->get();

         $biodata_dosen = DB::table('biodata_dosen')->get();

        $jadwal_sidang_skripsi = DB::table('skripsi')
            ->leftJoin('biodata_mhs', 'skripsi.NIM_id', '=', 'biodata_mhs.nim_id')
            ->leftJoin('kbk', 'skripsi.kbk_id', '=', 'kbk.id_kbk')
            ->leftJoin('petugas_tu','skripsi.nip_petugas_id','=','petugas_tu.nip_petugas')
            ->leftJoin('ruang','skripsi.tempat_sidangskrip','=','ruang.id_ruang')
            ->leftJoin('dosen_penguji','dosen_penguji.skripsi_id','=','skripsi.id_skripsi')
            ->leftJoin('dosen_pembimbing','dosen_pembimbing.skripsi_id','=','skripsi.id_skripsi')
            ->select('skripsi.id_skripsi', 'skripsi.NIM_id', 'biodata_mhs.nama_mhs','kbk.jenis_kbk', 'skripsi.Judul', 'skripsi.tgl_sidangskrip', 'skripsi.waktu_sidangskrip', 'dosen_pembimbing.nip_id as dosbing','ruang.nama_ruang','dosen_penguji.nip_id as dosji')
            ->whereNull('skripsi.deleted_at')
            // ->whereNotNull('nilai_sidangpro')
            ->whereNull('nilai_sidangskrip')
            

            ->get();
            
            $final_result = array();

            $j = 0;

         for($i = 0; $i<count($jadwal_sidang_skripsi)-1;$i++){
                $tmp = array(
                    'id_skripsi'=>$jadwal_sidang_skripsi[$i]->id_skripsi,
                    'nim'=>$jadwal_sidang_skripsi[$i]->NIM_id,
                    'nama_mhs'=>$jadwal_sidang_skripsi[$i]->nama_mhs,
                    'jenis_kbk'=>$jadwal_sidang_skripsi[$i]->jenis_kbk,
                    'Judul'=>$jadwal_sidang_skripsi[$i]->Judul,
                    'tgl_sidangpro'=>$jadwal_sidang_skripsi[$i]->tgl_sidangskrip,
                    'waktu_sidangpro'=>$jadwal_sidang_skripsi[$i]->waktu_sidangskrip,
                    'dosen_pembimbing1'=>$jadwal_sidang_skripsi[$i]->dosbing,
                    'nama_dosen_pembimbing1'=>$this->cari_nama_dosen($jadwal_sidang_skripsi[$i]->dosbing,$biodata_dosen),
                    'dosen_pembimbing2'=>$jadwal_sidang_skripsi[$i+1]->dosbing,
                    'nama_dosen_pembimbing2'=>$this->cari_nama_dosen($jadwal_sidang_skripsi[$i+1]->dosbing,$biodata_dosen),
                    'dosen_penguji'=>$jadwal_sidang_skripsi[$i]->dosji,
                    'nama_dosen_penguji'=>$this->cari_nama_dosen($jadwal_sidang_skripsi[$i]->dosji,$biodata_dosen),
                    'ruang'=>$jadwal_sidang_skripsi[$i]->nama_ruang
                    );

                $id_skripsi = $jadwal_sidang_skripsi[$i]->id_skripsi;
                $t = $this->cek_duplikat($id_skripsi,$final_result);

                   if($t==0){
                $final_result[$j] = $tmp;
                $j++;
                }
            
                //array_push($final_result, $tmp);
         }

        $data = array(
                'page'=> 'jadwal-sidang-skripsi',
                'daftar_mhs'=>$mahasiswa,
                'daftar_kbk'=>$kbk,
                'daftar_tempat'=>$tempat,
                'daftar_dosen'=>$dosen,
                'daftar_petugas_tu'=>$petugas_tu,
                'jadwal_sidang_skripsi'=>$final_result

            );
        return view('karyawan.monitoring-skripsi.jadwal-sidang.skripsi',$data);
    }

    public function get_mahasiswa_data()
    {
        # code...
        if(Request::ajax()){
            $data = Input::all();

            $mhs = DB::table('biodata_mhs')->where('nim_id','=',$data['nim'])->get();

            $output = array(
                'mahasiswa'=>$mhs
                );

            return response()->json($output);
        };
    }
      public function update_jadwal_sidang_proposal()
    {
        # code...
            if(Request::ajax()){

            $data = Input::all();

            DB::transaction(function()
            {
                $data = Input::all();

                 $t = DB::table('skripsi')->where('id_skripsi', '=', $data['id_skripsi'])->delete();

            $status_delete = 0;

            if($t){
                $status_delete = 1;
            }

            $id_skripsi = DB::table('skripsi')->insertGetId(
            ['NIM_id' => $data['nim'], 'kbk_id' => $data['kbk'],'judul'=>$data['judul_proposal'],
              'nip_petugas_id'=>$data['petugas'],'tgl_sidangpro'=>$data['tgl'],'waktu_sidangpro'=>$data['waktu'],'tempat_sidangpro'=>$data['tempat']
            ]
            );

            $dosen_pembimbing = DB::table('dosen_pembimbing')->insert([
                [
                    'skripsi_id'=>$id_skripsi,
                    'nip_id'=>$data['dosbing1'],
                    'status'=>1
                ],
                [
                    'skripsi_id'=>$id_skripsi,
                    'nip_id'=>$data['dosbing2'],
                    'status'=>1
                ]
                ]);

            $dosen_penguji = DB::table('dosen_penguji')->insert(
                [
                    'skripsi_id'=>$id_skripsi,
                    'nip_id'=>$data['penguji'],
                    'status'=>1
                ]
                );

            
            });

            $status_edit = 1;

            return response()->json([
    'status_edit' => $status_edit
                ]);


        };
    }

       public function update_jadwal_sidang_skripsi()
    {
        # code...
            if(Request::ajax()){

            $data = Input::all();

            $status_edit = 0;

            $t = DB::table('skripsi')
            ->where('id_skripsi', $data['id_skripsi'])
            ->update(['tgl_sidangskrip' => $data['tgl'],'waktu_sidangskrip'=>$data['waktu'],'tempat_sidangskrip'=>$data['tempat']]);

            if($t){
                $status_edit = 1;
            }

             $output = array(
                     'status_edit'=>$status_edit
                  );

               return response()->json($output);        

        };


    }

    public function edit_jadwal_sidang_proposal()
    {
        # code...
        if(Request::ajax()){

            $data = Input::all();

            
            
            $skripsi = DB::table('skripsi')->join('biodata_mhs','biodata_mhs.nim_id','=','skripsi.NIM_id')->select('skripsi.*','biodata_mhs.nama_mhs')->where('id_skripsi','=',$data['id_skripsi'])->get();;
            $dosbing = DB::table('dosen_pembimbing')->where('skripsi_id','=',$data['id_skripsi'])->get();
            $dosing = DB::table('dosen_penguji')->where('skripsi_id','=',$data['id_skripsi'])->get();

            $output = array(
                'skripsi'=>$skripsi,
                'dosbing'=>$dosbing,
                'dosing'=>$dosing
                );

            return response()->json($output);


        }
    }

    

    public function destroy_jadwal_sidang_proposal()
    {
        # code...
        if(Request::ajax()){
            
            $data = Input::all();

            $t = DB::table('skripsi')->where('id_skripsi', '=', $data['id_skripsi'])->delete();

            $status_delete = 0;

            if($t){
                $status_delete = 1;
            }

            return response()->json([
    'status_delete' => $status_delete
                ]);

        }
    }

    public function create_jadwal_sidang_proposal()
    {
        # code...
        $test = 'berhasil menyimpan data';
        if(Request::ajax()){
            
            // $test = array(
            //  'meeng'=>$data['judul_proposal']
            //  );

            DB::transaction(function()
            {
                $data = Input::all();

            $id_skripsi = DB::table('skripsi')->insertGetId(
            ['NIM_id' => $data['nim'], 'kbk_id' => $data['kbk'],'judul'=>$data['judul_proposal'],
              'nip_petugas_id'=>$data['petugas'],'tgl_sidangpro'=>$data['tgl'],'waktu_sidangpro'=>$data['waktu'],'tempat_sidangpro'=>$data['tempat'],'statusprop_id'=>1,'statusskrip_id'=>1
            ]
            );

            $dosen_pembimbing = DB::table('dosen_pembimbing')->insert([
                [
                    'skripsi_id'=>$id_skripsi,
                    'nip_id'=>$data['dosbing1'],
                    'status'=>1
                ],
                [
                    'skripsi_id'=>$id_skripsi,
                    'nip_id'=>$data['dosbing2'],
                    'status'=>1
                ]
                ]);

            $dosen_penguji = DB::table('dosen_penguji')->insert(
                [
                    'skripsi_id'=>$id_skripsi,
                    'nip_id'=>$data['penguji'],
                    'status'=>1
                ]
                );

            
            });

            $hasil = array(
                'status_insert'=>1
                );


            
            return response()->json([
    'status_insert' => 1
                ]);
        
        }
    }
}

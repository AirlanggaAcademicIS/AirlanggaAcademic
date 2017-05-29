<?php

namespace App\Http\Controllers\Karyawan;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Response;

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

    public function view_manage_jadwal_sidang_proposal()
    {
    	# code...
    	$mahasiswa = DB::table('mahasiswa')->get();
    	$kbk = DB::table('kbk')->get();
    	$tempat = DB::table('ruang')->get();
    	$dosen = DB::table('dosen')->get();
    	$petugas_tu = DB::table('petugas_tu')->get();

    	$jadwal_sidang_proposal = DB::table('skripsi')
            ->join('mahasiswa', 'skripsi.NIM_id', '=', 'mahasiswa.nim')
            ->join('kbk', 'skripsi.kbk_id', '=', 'kbk.id_kbk')
            ->join('petugas_tu','skripsi.nip_petugas_id','=','petugas_tu.nip_petugas')
            ->join('ruang','skripsi.tempat_sidangpro','=','ruang.id_ruang')
            ->join('dosen_penguji','dosen_penguji.skripsi_id','=','skripsi.id_skripsi')
            ->join('dosen_pembimbing','dosen_pembimbing.skripsi_id','=','skripsi.id_skripsi')
            ->select('skripsi.id_skripsi','mahasiswa.nim', 'skripsi.NIM_id', 'kbk.jenis_kbk', 'skripsi.Judul', 'skripsi.tgl_sidangpro', 'skripsi.waktu_sidangpro', 'dosen_pembimbing.nip_id as dosbing','ruang.nama_ruang','dosen_penguji.nip_id as dosji')
            ->whereNull('skripsi.deleted_at')

            ->get();
            
            $final_result = array();

            $j = 0;

         for($i = 0; $i<count($jadwal_sidang_proposal)-1;$i++){
         		$tmp = array(
                    'id_skripsi'=>$jadwal_sidang_proposal[$i]->id_skripsi,
         			'nim'=>$jadwal_sidang_proposal[$i]->nim,
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
    		// 	'meeng'=>$data['judul_proposal']
    		// 	);

    		DB::transaction(function()
			{
				$data = Input::all();

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

    		$hasil = array(
    			'status_insert'=>1
    			);


    		
    		return response()->json([
    'status_insert' => 1
				]);
    	
    	}
    }
}

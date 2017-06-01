<?php

namespace App\Http\Controllers\Karyawan;

use Request;
use Illuminate\Support\Facades\DB;
use App\Skripsi;

use Session;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Auth;


class HasilSidangController extends Controller
{
    //
public function view_manage_hasil_sidang_proposal()
   {
   	# code...
   
       $hasil_sidang_proposal = DB::table('skripsi')
            ->join('biodata_mhs', 'skripsi.NIM_id', '=', 'biodata_mhs.nim_id')
            ->join('kbk', 'skripsi.kbk_id', '=', 'kbk.id_kbk')
            ->join('petugas_tu','skripsi.nip_petugas_id','=','petugas_tu.nip_petugas')
            ->join('ruang','skripsi.tempat_sidangpro','=','ruang.id_ruang')
            ->join('dosen_penguji','dosen_penguji.skripsi_id','=','skripsi.id_skripsi')
            ->join('dosen_pembimbing','dosen_pembimbing.skripsi_id','=','skripsi.id_skripsi')
            ->join('status_skripsi','status_skripsi.id','=','skripsi.statusskrip_id')
            ->select('skripsi.id_skripsi','biodata_mhs.nama_mhs', 'skripsi.NIM_id','skripsi.nilai_sidangpro' ,'kbk.jenis_kbk', 'skripsi.Judul', 'skripsi.tgl_sidangpro', 'skripsi.waktu_sidangpro', 'dosen_pembimbing.nip_id as dosbing','ruang.nama_ruang','dosen_penguji.nip_id as dosji','status_skripsi.keterangan')
            ->whereNull('skripsi.deleted_at')

            ->get();
            
            $final_result = array();

            $j = 0;

         for($i = 0; $i<count($hasil_sidang_proposal)-1;$i++){
               $tmp = array(
                    'id_skripsi'=>$hasil_sidang_proposal[$i]->id_skripsi,
                  'nama_mhs'=>$hasil_sidang_proposal[$i]->nama_mhs,
                  'nim'=>$hasil_sidang_proposal[$i]->NIM_id,
                  'jenis_kbk'=>$hasil_sidang_proposal[$i]->jenis_kbk,
                  'Judul'=>$hasil_sidang_proposal[$i]->Judul,
                  'tgl_sidangpro'=>$hasil_sidang_proposal[$i]->tgl_sidangpro,
                  'waktu_sidangpro'=>$hasil_sidang_proposal[$i]->waktu_sidangpro,
                  'dosen_pembimbing1'=>$hasil_sidang_proposal[$i]->dosbing,
                  'dosen_pembimbing2'=>$hasil_sidang_proposal[$i+1]->dosbing,
                  'dosen_penguji'=>$hasil_sidang_proposal[$i]->dosji,
                  'ruang'=>$hasil_sidang_proposal[$i]->nama_ruang,
                  'status_proposal'=>$hasil_sidang_proposal[$i]->keterangan,
                  'nilai_proposal'=>$hasil_sidang_proposal[$i]->nilai_sidangpro

                  );
               $final_result[$j] = $tmp;
               $j++;

               //array_push($final_result, $tmp);
         }

         $data = array('page'=> 'hasil-sidang-proposal',
                     'hasil_sidang_proposal'=>$final_result
               );

   	//$data = array('page' => 'hasil-sidang-proposal');

   	return view('karyawan.monitoring-skripsi.hasil-sidang.proposal',$data);
   }

   public function view_hasil_sidang_skripsi_mahasiswa()
   {
      # code...
       $nim = Auth::user()->username;
       $hasil_sidang_skripsi = DB::table('skripsi')
            ->join('biodata_mhs', 'skripsi.NIM_id', '=', 'biodata_mhs.nim_id')
            ->join('kbk', 'skripsi.kbk_id', '=', 'kbk.id_kbk')
            ->join('petugas_tu','skripsi.nip_petugas_id','=','petugas_tu.nip_petugas')
            ->join('ruang','skripsi.tempat_sidangpro','=','ruang.id_ruang')
            ->join('dosen_penguji','dosen_penguji.skripsi_id','=','skripsi.id_skripsi')
            ->join('dosen_pembimbing','dosen_pembimbing.skripsi_id','=','skripsi.id_skripsi')
            ->join('status_skripsi','status_skripsi.id','=','skripsi.statusskrip_id')
            ->select('skripsi.id_skripsi','biodata_mhs.nama_mhs', 'skripsi.NIM_id','skripsi.nilai_sidangskrip' ,'kbk.jenis_kbk', 'skripsi.Judul', 'skripsi.tgl_sidangpro', 'skripsi.waktu_sidangpro', 'dosen_pembimbing.nip_id as dosbing','ruang.nama_ruang','dosen_penguji.nip_id as dosji','status_skripsi.keterangan')
            ->whereNull('skripsi.deleted_at')
            ->whereNotNull('skripsi.nilai_sidangskrip')
            ->where('skripsi.NIM_id','=',$nim)

            ->get();
            
            $final_result = array();

            $j = 0;

         for($i = 0; $i<count($hasil_sidang_skripsi)-1;$i++){
               $tmp = array(
                    'id_skripsi'=>$hasil_sidang_skripsi[$i]->id_skripsi,
                  'nama_mhs'=>$hasil_sidang_skripsi[$i]->nama_mhs,
                  'nim'=>$hasil_sidang_skripsi[$i]->NIM_id,
                  'jenis_kbk'=>$hasil_sidang_skripsi[$i]->jenis_kbk,
                  'Judul'=>$hasil_sidang_skripsi[$i]->Judul,
                  'tgl_sidangpro'=>$hasil_sidang_skripsi[$i]->tgl_sidangpro,
                  'waktu_sidangpro'=>$hasil_sidang_skripsi[$i]->waktu_sidangpro,
                  'dosen_pembimbing1'=>$hasil_sidang_skripsi[$i]->dosbing,
                  'dosen_pembimbing2'=>$hasil_sidang_skripsi[$i+1]->dosbing,
                  'dosen_penguji'=>$hasil_sidang_skripsi[$i]->dosji,
                  'ruang'=>$hasil_sidang_skripsi[$i]->nama_ruang,
                  'status_skripsi'=>$hasil_sidang_skripsi[$i]->keterangan,
                  'nilai_skripsi'=>$hasil_sidang_skripsi[$i]->nilai_sidangskrip

                  );
               $final_result[$j] = $tmp;
               $j++;

               //array_push($final_result, $tmp);
         }

         $data = array('page'=> 'hasil-sidang-skripsi',
                     'hasil_sidang_skripsi'=>$final_result
               );
         return view('mahasiswa.skripsi',$data);
   }

   public function view_hasil_sidang_proposal_mahasiswa()
   {
       $nim = Auth::user()->username;
      # code...
           $hasil_sidang_proposal = DB::table('skripsi')
            ->join('biodata_mhs', 'skripsi.NIM_id', '=', 'biodata_mhs.nim_id')
            ->join('kbk', 'skripsi.kbk_id', '=', 'kbk.id_kbk')
            ->join('petugas_tu','skripsi.nip_petugas_id','=','petugas_tu.nip_petugas')
            ->join('ruang','skripsi.tempat_sidangpro','=','ruang.id_ruang')
            ->join('dosen_penguji','dosen_penguji.skripsi_id','=','skripsi.id_skripsi')
            ->join('dosen_pembimbing','dosen_pembimbing.skripsi_id','=','skripsi.id_skripsi')
            ->join('status_skripsi','status_skripsi.id','=','skripsi.statusskrip_id')
            ->select('skripsi.id_skripsi','biodata_mhs.nama_mhs', 'skripsi.NIM_id','skripsi.nilai_sidangpro' ,'kbk.jenis_kbk', 'skripsi.Judul', 'skripsi.tgl_sidangpro', 'skripsi.waktu_sidangpro', 'dosen_pembimbing.nip_id as dosbing','ruang.nama_ruang','dosen_penguji.nip_id as dosji','status_skripsi.keterangan')
            ->whereNull('skripsi.deleted_at')
            // ->where('NIM_id','=',$nim)
            ->whereNotNull('nilai_sidangpro')
            ->where('skripsi.NIM_id','=',$nim)

            ->get();
            
            $final_result = array();

            $j = 0;

         for($i = 0; $i<count($hasil_sidang_proposal)-1;$i++){
               $tmp = array(
                    'id_skripsi'=>$hasil_sidang_proposal[$i]->id_skripsi,
                  'nama_mhs'=>$hasil_sidang_proposal[$i]->nama_mhs,
                  'nim'=>$hasil_sidang_proposal[$i]->NIM_id,
                  'jenis_kbk'=>$hasil_sidang_proposal[$i]->jenis_kbk,
                  'Judul'=>$hasil_sidang_proposal[$i]->Judul,
                  'tgl_sidangpro'=>$hasil_sidang_proposal[$i]->tgl_sidangpro,
                  'waktu_sidangpro'=>$hasil_sidang_proposal[$i]->waktu_sidangpro,
                  'dosen_pembimbing1'=>$hasil_sidang_proposal[$i]->dosbing,
                  'dosen_pembimbing2'=>$hasil_sidang_proposal[$i+1]->dosbing,
                  'dosen_penguji'=>$hasil_sidang_proposal[$i]->dosji,
                  'ruang'=>$hasil_sidang_proposal[$i]->nama_ruang,
                  'status_proposal'=>$hasil_sidang_proposal[$i]->keterangan,
                  'nilai_proposal'=>$hasil_sidang_proposal[$i]->nilai_sidangpro

                  );
               $final_result[$j] = $tmp;
               $j++;

               //array_push($final_result, $tmp);
         }

         $data = array('page'=> 'hasil-sidang-proposal-mahasiswa',
                     'hasil_sidang_proposal'=>$final_result
               );

      //$data = array('page' => 'hasil-sidang-proposal');

      return view('mahasiswa.proposal',$data);
   }
   

   public function view_tambah_hasil_sidang_proposal()
      {
      	# code...
      	$data = array(
      		'page'=>'tambah-hasil-proposal'
      		);
      	return view('karyawan.monitoring-skripsi.hasil-sidang.tambah-hasil-proposal',$data);
      }

      public function upload_nilai_sidang_skripsi()
         {
            # code...
            if(Request::ajax()){

               $data = Input::all();

               $status_upload = 0;

               $t = DB::table('skripsi')
            ->where('id_skripsi', $data['id_skripsi'])
            ->update(['nilai_sidangskrip' => $data['nilai_sidang_skripsi']]);

               if($t){
                  $status_upload = 1;
               }

               $output = array(
                     'status_upload'=>$status_upload
                  );

               return response()->json($output);
            }
         }   

           public function upload_nilai_sidang_proposal()
         {
            # code...
            if(Request::ajax()){

               $data = Input::all();

               $status_upload = 0;

               $t = DB::table('skripsi')
            ->where('id_skripsi', $data['id_skripsi'])
            ->update(['nilai_sidangpro' => $data['nilai_sidang_proposal']]);

               if($t){
                  $status_upload = 1;
               }

               $output = array(
                     'status_upload'=>$status_upload
                  );

               return response()->json($output);
            }
         }

   public function view_manage_hasil_sidang_skripsi()
      {
         # code...
            $hasil_sidang_skripsi = DB::table('skripsi')
            ->join('biodata_mhs', 'skripsi.NIM_id', '=', 'biodata_mhs.nim_id')
            ->join('kbk', 'skripsi.kbk_id', '=', 'kbk.id_kbk')
            ->join('petugas_tu','skripsi.nip_petugas_id','=','petugas_tu.nip_petugas')
            ->join('ruang','skripsi.tempat_sidangpro','=','ruang.id_ruang')
            ->join('dosen_penguji','dosen_penguji.skripsi_id','=','skripsi.id_skripsi')
            ->join('dosen_pembimbing','dosen_pembimbing.skripsi_id','=','skripsi.id_skripsi')
            ->join('status_skripsi','status_skripsi.id','=','skripsi.statusskrip_id')
            ->select('skripsi.id_skripsi','biodata_mhs.nama_mhs', 'skripsi.NIM_id','skripsi.nilai_sidangskrip' ,'kbk.jenis_kbk', 'skripsi.Judul', 'skripsi.tgl_sidangpro', 'skripsi.waktu_sidangpro', 'dosen_pembimbing.nip_id as dosbing','ruang.nama_ruang','dosen_penguji.nip_id as dosji','status_skripsi.keterangan')
            ->whereNull('skripsi.deleted_at')

            ->get();
            
            $final_result = array();

            $j = 0;

         for($i = 0; $i<count($hasil_sidang_skripsi)-1;$i++){
               $tmp = array(
                    'id_skripsi'=>$hasil_sidang_skripsi[$i]->id_skripsi,
                  'nama_mhs'=>$hasil_sidang_skripsi[$i]->nama_mhs,
                  'nim'=>$hasil_sidang_skripsi[$i]->NIM_id,
                  'jenis_kbk'=>$hasil_sidang_skripsi[$i]->jenis_kbk,
                  'Judul'=>$hasil_sidang_skripsi[$i]->Judul,
                  'tgl_sidangpro'=>$hasil_sidang_skripsi[$i]->tgl_sidangpro,
                  'waktu_sidangpro'=>$hasil_sidang_skripsi[$i]->waktu_sidangpro,
                  'dosen_pembimbing1'=>$hasil_sidang_skripsi[$i]->dosbing,
                  'dosen_pembimbing2'=>$hasil_sidang_skripsi[$i+1]->dosbing,
                  'dosen_penguji'=>$hasil_sidang_skripsi[$i]->dosji,
                  'ruang'=>$hasil_sidang_skripsi[$i]->nama_ruang,
                  'status_skripsi'=>$hasil_sidang_skripsi[$i]->keterangan,
                  'nilai_skripsi'=>$hasil_sidang_skripsi[$i]->nilai_sidangskrip

                  );
               $final_result[$j] = $tmp;
               $j++;

               //array_push($final_result, $tmp);
         }

         $data = array('page'=> 'hasil-sidang-skripsi',
                     'hasil_sidang_skripsi'=>$final_result
               );
         return view('karyawan.monitoring-skripsi.hasil-sidang.skripsi',$data);
      }   

   public function view_tambah_hasil_sidang_skripsi()
      {
         # code...
         $data = array(
            'page' => 'tambah-hasil-skripsi'
            );
         return view('karyawan.monitoring-skripsi.hasil-sidang.tambah-hasil-skripsi', $data);
      }   
}

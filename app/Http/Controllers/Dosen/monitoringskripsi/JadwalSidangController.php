<?php

namespace App\Http\Controllers\Dosen\monitoringskripsi;

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

    

    public function view_jadwal_sidang_proposal_dosen()
    {
        # code...
        $nip = Auth::user()->username;

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
            ->leftjoin('dosen_pembimbing','dosen_pembimbing.skripsi_id','=','skripsi.id_skripsi')
            ->select('skripsi.id_skripsi','mahasiswa.nim', 'skripsi.NIM_id', 'kbk.jenis_kbk', 'skripsi.Judul', 'skripsi.tgl_sidangpro', 'skripsi.waktu_sidangpro', 'dosen_pembimbing.nip_id as dosbing','ruang.nama_ruang','dosen_penguji.nip_id as dosji')
            // ->whereNull('skripsi.deleted_at')
            // ->whereNull('nilai_sidangpro')
            //->where('dosen_pembimbing.nip_id','=',$nip)
             // ->orWhere('dosen_penguji.nip_id','=',$nip)

            ->get();
            
            $final_result = array();

            $j = 0;

         for($i = 0; $i<count($jadwal_sidang_proposal)-1;$i++){
                $dosen1 = $jadwal_sidang_proposal[$i]->dosbing;
                $dosen2 = $jadwal_sidang_proposal[$i+1]->dosbing;
                $dosen3 = $jadwal_sidang_proposal[$i]->dosji;


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

                if(($dosen1==$nip)||$dosen2==$nip||$dosen3==$nip){
                $final_result[$j] = $tmp;
                $j++;
            }

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
        return view('dosen.monitoring-skripsi.jadwal-sidang.proposal',$data);

    }

    public function view_jadwal_sidang_skripsi_dosen()
    {
        # code...

         $nip = Auth::user()->username;

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
            // ->whereNull('skripsi.deleted_at')
            // ->whereNotNull('nilai_sidangpro')
            // ->whereNull('nilai_sidangskrip')
            // ->where('dosen_pembimbing.nip_id','=',$nip)
            // ->orWhere('dosen_penguji.nip_id','=',$nip)

            ->get();
            
            $final_result = array();

            $j = 0;

         for($i = 0; $i<count($jadwal_sidang_skripsi)-1;$i++){
                  $dosen1 = $jadwal_sidang_skripsi[$i]->dosbing;
                $dosen2 = $jadwal_sidang_skripsi[$i+1]->dosbing;
                $dosen3 = $jadwal_sidang_skripsi[$i]->dosji;

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

                if(($dosen1==$nip)||$dosen2==$nip||$dosen3==$nip){
                $final_result[$j] = $tmp;
                $j++;
            }
                
                //array_push($final_result, $tmp);
         }

        $data = array(
                'page'=> 'jadwal-sidang-skripsi-mahasiswa',
                'jadwal_sidang_skripsi'=>$final_result

            );

         return view('dosen.monitoring-skripsi.jadwal-sidang.skripsi',$data);

    }

  }  

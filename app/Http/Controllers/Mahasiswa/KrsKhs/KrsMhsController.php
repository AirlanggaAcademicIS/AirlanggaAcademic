<?php 

namespace App\Http\Controllers\Mahasiswa\KrsKhs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use PDF;
use Response;
use Auth;
use DB;
// Tambahkan model yang ingin dipakai
use App\Models\KrsKhs\MKDiambil;
use App\Models\KrsKhs\MKDitawarkan;
use App\Models\KrsKhs\MataKuliah;
use App\Models\KrsKhs\JenisMataKuliah;
use App\Models\KrsKhs\TahunAkademik;


class KrsMhsController extends Controller
{

    // Function untuk menampilkan tabel
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $thn = TahunAkademik::count();
        $data = [
            'page' => 'krs',
             'krs' => DB::table('mk_ditawarkan')
                        ->join('mk_diambil','mk_diambil.mk_ditawarkan_id','=','mk_ditawarkan.id_mk_ditawarkan')
                        ->select('*')
                        ->where('mk_ditawarkan.id_mk_ditawarkan','!=','mk_diambil.mk_ditawarkan_id')
                        ->where('thn_akademik_id',$thn)->get(),
        ];
        return view('mahasiswa.krs-khs.krs.index',$data);
    }

    public function toPdf($id)
    {
        $data = [
            'page' => 'mata-kuliah',
            'matkul' => MataKuliah::find($id),
            'jenis_matkul' =>JenisMataKuliah::all()
        ];

        $pdf = PDF::loadView('karyawan.kurikulum.mata-kuliah.pdf', $data);
        return $pdf->download('mata-kuliah.pdf');
    }

    public function create()
    {
        $nim_id  = Auth::user()->username;
        $tahun = TahunAkademik::count();
        $count   = DB::table('mk_diambil')
            ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_diambil.mk_ditawarkan_id')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
            ->select('*')
            ->where('mhs_id',$nim_id)
            ->count('mata_kuliah.sks'); // Menghitung sks
        $sum     = DB::table('mk_diambil')
            ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_diambil.mk_ditawarkan_id')
            ->select('*')
            ->where('mhs_id',$nim_id)
            //->where('thn_akademik_id', $tahun)
            ->sum('mata_kuliah.sks');
            // dd($sum);
            if($count==0){
                $mean=0;
            }
            else{
                $mean    = $sum/$count;
            }
        $nilai1  = DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
            ->select('mk_diambil.nilai')
            ->where('mhs_id',$nim_id)
            ->where('mk_ditawarkan.thn_akademik_id','1')->get(); 
        $nilai   = 0;
        $nilai_tmp = 0;
        foreach($nilai1 as $n){
            if ($n->nilai == "A")
                $nilai_tmp = $nilai_tmp + 4;                
            elseif ($n->nilai == "AB")
                $nilai_tmp = $nilai_tmp + 3.5;
            elseif ($n->nilai == "B")
                $nilai_tmp = $nilai_tmp + 3;
            elseif ($n->nilai == "BC")
                $nilai_tmp = $nilai_tmp + 2.5;
            elseif ($n->nilai == "C")
                $nilai_tmp = $nilai_tmp + 2;
            elseif ($n->nilai == "D")
                $nilai_tmp = $nilai_tmp + 1;
            elseif ($n->nilai == "E")
                $nilai_tmp = $nilai_tmp + 0;
            $nilai = $nilai_tmp;
            }
            if($count==0){
                $count_ips=0;
            }
            else{
                $count_ips     = $nilai/$count;
            }        
             $lmt     = 0; 
            if ($count_ips >= 3)
                $lmt = 24;                
            elseif (($count_ips <3) and ($count_ips >=2.75))
                $lmt = 23;
            elseif (($count_ips <2.75) and ($count_ips >=2.5))
                $lmt = 22;
            else
                $lmt = 21;
        
        $data    = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'krs',
            'cek' => DB::table('mk_ditawarkan')
                        ->join('mk_diambil','mk_diambil.mk_ditawarkan_id','!=','mk_ditawarkan.id_mk_ditawarkan')
                        ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_ditawarkan.matakuliah_id')
                        ->join('jenis_mk','jenis_mk.id','=','mata_kuliah.jenis_mk_id')
                        ->select('*')
                        ->where('mk_ditawarkan.thn_akademik_id',$tahun)
                        ->first(),
            'krs' => DB::table('mk_ditawarkan')
                        ->join('mk_diambil','mk_diambil.mk_ditawarkan_id','!=','mk_ditawarkan.id_mk_ditawarkan')
                        ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_ditawarkan.matakuliah_id')
                        ->join('jenis_mk','jenis_mk.id','=','mata_kuliah.jenis_mk_id')
                        ->select('*')
                        ->where('mk_ditawarkan.thn_akademik_id',$tahun)
                        ->get(),
            'maba' =>DB::table('mk_ditawarkan')
                        ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_ditawarkan.matakuliah_id')
                        ->join('jenis_mk','jenis_mk.id','=','mata_kuliah.jenis_mk_id')
                        ->select('*')
                        ->where('mk_ditawarkan.thn_akademik_id',$tahun)
                        ->get(),
            'lihat' => DB::table('mk_diambil')
                        ->join('mk_ditawarkan','mk_diambil.mk_ditawarkan_id','=','mk_ditawarkan.id_mk_ditawarkan')
                        ->join('mata_kuliah', 'mata_kuliah.id_mk', '=', 'mk_ditawarkan.matakuliah_id')
                        ->select('*')
                        ->where('mhs_id','=',$nim_id)
                        ->get(),

            'count'=> $count,
            'sum'  => $sum,
            'mean' => $mean,
            'limitSks' => $lmt,
            'ips'  => $count_ips,
            'tahun' => $tahun,
        ];
        // Memanggil tampilan form create
        return view('mahasiswa.krs-khs.krs.create',$data);
    }

    public function createAction($id)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        $nim_id = Auth::user()->username;
        $count   = DB::table('mk_diambil')
            ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_diambil.mk_ditawarkan_id')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
             ->select('*')
            ->where('mhs_id',$nim_id)
            ->count('mata_kuliah.sks');
        $sum     = DB::table('mk_diambil')
            ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_diambil.mk_ditawarkan_id')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
            ->select('*')
            ->where('mhs_id',$nim_id)
            ->where('mk_ditawarkan.thn_akademik_id','=','1')
            ->sum('mata_kuliah.sks');
        $sum_total     = DB::table('mk_diambil')
            ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_diambil.mk_ditawarkan_id')
            ->select('*')
            ->where('mhs_id',$nim_id)
            ->sum('mata_kuliah.sks');
            if($count==0){
                $mean=0;
            }
            else{
                $mean    = $sum/$count;
            }
        $nilai1  = DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
            ->select('mk_diambil.nilai')
            ->where('mhs_id',$nim_id)
            ->where('mk_ditawarkan.thn_akademik_id','1')->get(); 
        $nilai   = 0;
        $nilai_tmp = 0;
        foreach($nilai1 as $n){
            if ($n->nilai == "A")
                $nilai_tmp = $nilai_tmp + 4;                
            elseif ($n->nilai == "AB")
                $nilai_tmp = $nilai_tmp + 3.5;
            elseif ($n->nilai == "B")
                $nilai_tmp = $nilai_tmp + 3;
            elseif ($n->nilai == "BC")
                $nilai_tmp = $nilai_tmp + 2.5;
            elseif ($n->nilai == "C")
                $nilai_tmp = $nilai_tmp + 2;
            elseif ($n->nilai == "D")
                $nilai_tmp = $nilai_tmp + 1;
            elseif ($n->nilai == "E")
                $nilai_tmp = $nilai_tmp + 0;
            $nilai = $nilai_tmp;
            }
            if($count==0){
                $count_ips=0;
            }
            else{
                $count_ips     = $nilai/$count;
            }  
        $lmt     = 0; 
            if ($count_ips >= 3)
                $lmt = 24;                
            elseif (($count_ips <3) and ($count_ips >=2.75))
                $lmt = 23;
            elseif (($count_ips <2.75) and ($count_ips >=2.5))
                $lmt = 22;
            else
                $lmt = 21;
        $syaratSKS = DB::table('mata_kuliah')
        ->select('*')
        ->where('mhs_id','=',$nim_id)
        ->where('mk_ditawarkan.id_mk_ditawarkan','=',$id)
        ->get();

        $syaratMK = DB::table('mk_diambil')
        ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
        ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_ditawarkan.matakuliah_id')
        ->join('mk_prasyarat','mk_prasyarat.mk_id','=','mata_kuliah.id_mk')
        ->select('mk_prasyarat.mk_syarat_id')
        ->where('mhs_id','=',$nim_id)
        ->where('mk_ditawarkan.id_mk_ditawarkan','=',$id)
        ->where('mk_diambil.nilai','!=','0')
        ->where('mk_diambil.is_approve','=','1')
        ->get();

        $jadwal  = DB::table('mk_diambil')
        ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
        ->join('jadwal_kuliah','jadwal_kuliah.mk_ditawarkan_id','=','mk_diambil.mk_ditawarkan_id')
        ->join('hari','hari.id_hari','=','jadwal_kuliah.hari_id')
        ->join('jam','jam.id_jam','=','jadwal_kuliah.jam_id')
        ->select('hari.id_hari','jam.id_jam')
        ->where('mk_diambil.mk_ditawarkan_id','=',$id)
        ->where('mhs_id',$nim_id)
        ->where('mk_ditawarkan.id_mk_ditawarkan',$id)
        ->get();

        $batas  = DB::table('mk_diambil')
        ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
        ->join('jadwal_kuliah','jadwal_kuliah.mk_ditawarkan_id','=','mk_diambil.mk_ditawarkan_id')
        ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_ditawarkan.id_mk_ditawarkan')
        ->join('hari','hari.id_hari','=','jadwal_kuliah.hari_id')
        ->join('jam','jam.id_jam','=','jadwal_kuliah.jam_id')
        ->join('mk_prasyarat','mk_prasyarat.mk_id','=','mata_kuliah.id_mk')
        ->select('hari.id_hari','jam.id_jam','mk_diambil.mk_ditawarkan_id')
        ->get();

        $syaratMK  = DB::table('mk_diambil')
        ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
        ->join('mk_prasyarat','mk_prasyarat.mk_syarat_id','=','mk_ditawarkan.matakuliah_id')
        ->select('*')
        ->get();

        $MKDiambil  = DB::table('mk_diambil')
        ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
        ->select('*')
        ->get();
        // Syarat 1 : Jadwal
        
        if ($jadwal == $batas){
            Session::put('alert-danger', 'Terjadi tabrakan jadwal');
            return Redirect::back();
        }
        // Syarat 2 : Limit Sks

        else if ($sum >= $lmt){
            Session::put('alert-danger', 'Batas Sks sudah terpenuhi');
            return Redirect::back();
        }
        // Syarat 3 : Syarat sks

        else if ($sum_total < $syaratSKS->syarat_sks){
            Session::put('alert-danger', 'Syarat Sks belum terpenuhi');
            return Redirect::back();   
        }
        // Syarat 4 : Syarat mk
        // else {
        // foreach ($syaratMK as $syarat) {
        //     # code...
        //     foreach ($MKDiambil as $ambil) {
        //         # code...
        //         if($syarat->mk_syarat_id != $ambil->matakuliah_id){
        //             Session::put('alert-danger', 'Syarat MK belum terpenuhi');
        //             return Redirect::back();
        //         }
                
        //     }
        // }
        // }
        
        else{
                    return $this->createAction($id);
                }
        // else if ($syarat->mk_ditawarkan_id != $batas->mk_syarat_id){
        //     Session::put('alert-danger', 'Syarat mata kuliah belum terpenuhi');
        //     return Redirect::back();   
        // }
    }

    public function createAction($id)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
       
//         DB::table('mk_diambil')->insert(
//     [

//         else  
//             foreach ($batas as $j => $b) {
//                     if ($syaratMK != $b){
//                         Session::put('alert-danger', 'Syarat mata kuliah belum terpenuhi');
//                         return Redirect::back();
//                         }
//                     }
            DB::table('mk_diambil')->insert(
            [
            'mk_ditawarkan_id' => $id,
            'mhs_id' => Auth::user()->username,
            'is_approve' => 0,
            'nilai' => 0
            ]);
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Mata Kuliah berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::back();
    }

    public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'krs',
            'krs' => MataKuliah::find($id),
            'app' => DB::table('mk_diambil')
            ->select('mk_diambil.*')
            ->where('mk_diambil.mhs_id',Auth::user()->username)
        ];        

        return view('mahasiswa.krs-khs.krs.update',$data);
    }

    public function editAction($id)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        DB::table('mk_diambil')
        ->delete([
            'mk_ditawarkan_id' => $id,
            'mhs_id' => Auth::user()->username
            ]);

            // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Mata Kuliah berhasil dihapus');

        // Kembali ke halaman mahasiswa/create
        return Redirect::back();

        // Kembali ke halaman mahasiswa/biodata
    }

    
    public function delete($id)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        $nim_id = Auth::user()->username;
        MKDiambil::where('mhs_id',$nim_id)
            ->where('mk_ditawarkan_id',$id)->delete();
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Mata Kuliah berhasil dihapus');

        // Kembali ke halaman mahasiswa/create
        return Redirect::back();
    }
}
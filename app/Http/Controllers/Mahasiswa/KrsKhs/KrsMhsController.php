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
        $data = [
            'page' => 'krs',
             'krs' => MataKuliah::all(),
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
            ->count('mata_kuliah.sks');
        $tahun  = DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
            ->join('thn_akademik','thn_akademik.id_thn_akademik','=','mk_ditawarkan.thn_akademik_id')
            ->select('*')
            ->where('mhs_id',$nim_id)
            ->get();
        $sum     = DB::table('mk_diambil')
            ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_diambil.mk_ditawarkan_id')
            ->select('*')
            ->where('mhs_id',$nim_id)
            //->where('thn_akademik_id', $tahun)
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
        $data    = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'krs',
            'krs'  => MataKuliah::all(),
            'app'  => DB::table('mk_diambil')
            ->join('mata_kuliah', 'mata_kuliah.id_mk', '=', 'mk_diambil.mk_ditawarkan_id')
            ->select('*')
            ->where('mhs_id','=',$nim_id)
            ->get(),
            'count'=> $count,
            'sum'  => $sum,
            'mean' => $mean,
            'limitSks' => $lmt,   
            'ips'  => $count_ips,
            'lihat' => MKDiambil::all(),
            'tahun' => $tahun,
        ];
        // Memanggil tampilan form create
        return view('mahasiswa.krs-khs.krs.create',$data);
    }

    public function createSyarat($id)
    {
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
        $mean    = $sum/$count;
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

        $count_ips     = $nilai/$count;
        $lmt     = 0; 
            if ($count_ips >= 3)
                $lmt = 24;                
            elseif (($count_ips <3) and ($count_ips >=2.75))
                $lmt = 23;
            elseif (($count_ips <2.75) and ($count_ips >=2.5))
                $lmt = 22;
            else
                $lmt = 21;
        $syaratSKS = DB::table('mk_diambil')
        ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
        ->join('jadwal_kuliah','jadwal_kuliah.mk_ditawarkan_id','=','mk_diambil.mk_ditawarkan_id')
        ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_ditawarkan.matakuliah_id')
        ->join('mk_prasyarat','mk_prasyarat.mk_id','=','mata_kuliah.id_mk')
        ->select('*')
        ->where('mhs_id','=',$nim_id)
        ->where('mk_ditawarkan.id_mk_ditawarkan','=',$id)
        ->get();
        
        $jadwal  = DB::table('mk_diambil')
        ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
        ->join('jadwal_kuliah','jadwal_kuliah.mk_ditawarkan_id','=','mk_diambil.mk_ditawarkan_id')
        ->join('hari','hari.id_hari','=','jadwal_kuliah.hari_id')
        ->join('jam','jam.id_jam','=','jadwal_kuliah.jam_id')
        ->select('hari.id_hari','jam.id_jam')
        ->where('mhs_id',$nim_id)
        ->where('mk_ditawarkan.id_mk_ditawarkan',$id)
        ->get();

        $batas  = DB::table('mk_diambil')
        ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
        ->join('jadwal_kuliah','jadwal_kuliah.mk_ditawarkan_id','=','mk_diambil.mk_ditawarkan_id')
        ->join('hari','hari.id_hari','=','jadwal_kuliah.hari_id')
        ->join('jam','jam.id_jam','=','jadwal_kuliah.jam_id')
        ->select('hari.id_hari','jam.id_jam')
        ->get();
        // Syarat 1 : Jadwal

        if ($jadwal != $batas){
            Session::put('alert-danger', 'Terjadi tabrakan jadwal');
            return Redirect::back();
        }
        // Syarat 2 : Limit Sks

        else if ($sum == $lmt){
            Session::put('alert-danger', 'Batas Sks sudah terpenuhi');
            return Redirect::back();
        }
        // Syarat 3 : Syarat sks

        else if ($syaratSKS != $sum_total){
            Session::put('alert-danger', 'Syarat Sks belum terpenuhi');
            return Redirect::back();   
        }
        // Syarat 4 : Syarat mk

        else if ($syarat->mk_ditawarkan_id != $batas->mk_syarat_id){
            Session::put('alert-danger', 'Syarat mata kuliah belum terpenuhi');
            return Redirect::back();   
        }
        else
            $this->createAction($id);
    }
    public function createAction($id)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
       
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
        return Redirect::to('mahasiswa/krs-khs/krs/index');
    }
}
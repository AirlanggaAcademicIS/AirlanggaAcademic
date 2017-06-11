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
use App\Models\KrsKhs\MK;
use App\Models\KrsKhs\MataKuliah;
use App\Models\KrsKhs\JenisMataKuliah;
use App\Models\KrsKhs\TahunAkademik;
use App\Models\KrsKhs\BiodataMahasiswa;
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
    public function toPdf()
    {
         $tahun = TahunAkademik::count();
        $nim_id  = Auth::user()->username;
        $sum     = DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
            ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_ditawarkan.matakuliah_id')
            ->select('*')
            ->where('mhs_id',$nim_id)
            //->where('thn_akademik_id', $tahun)
            ->sum('mata_kuliah.sks');

        $data = [
        'page' => 'krs',
            'krs' => DB::table('mk_ditawarkan')
                        // ->join('mk_diambil','mk_diambil.mk_ditawarkan_id','mk_ditawarkan.id_mk_ditawarkan')
                        ->join('mata_kuliah','mata_kuliah.id_mk','mk_ditawarkan.matakuliah_id')
                        ->join('jenis_mk','jenis_mk.id','mata_kuliah.jenis_mk_id')
                        ->select('*')
                        ->where('mk_ditawarkan.thn_akademik_id',$tahun)
                        // ->where('mk_diambil.mhs_id',$nim_id)
                        ->get(),
           'app'  => DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
            ->join('mata_kuliah', 'mata_kuliah.id_mk', 'mk_ditawarkan.matakuliah_id')
            ->select('*')
            ->where('mhs_id','=',$nim_id)
            ->where('mk_ditawarkan.thn_akademik_id',$tahun)
            ->get(),
            
        'matkul' => MataKuliah::all(),
        'jenis_matkul' =>JenisMataKuliah::all(),
        'biodata_mhs' => BiodataMahasiswa::where('nim_id','=',$nim_id)->first(),
        'sum'  => $sum,
            
            
            
        ];
        $pdf = PDF::loadView('mahasiswa.krs-khs.krs.cetak', $data);
        return $pdf->inline('KRS_akademik.pdf');
    }
    public function create()
    {
        $tahun = TahunAkademik::count();
        $nim_id  = Auth::user()->username;
        $tahun = TahunAkademik::count();

        $sum     = DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
            ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_ditawarkan.matakuliah_id')
            ->select('*')
            ->where('mhs_id',$nim_id)
            //->where('thn_akademik_id', $tahun)
            ->sum('mata_kuliah.sks');

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

            // if($count==0){
            //     $count_ips=0;
            // }
            // else{
            //     $count_ips     = $nilai/$count;
            // }  

            //  $lmt     = 0; 
            // if ($count_ips >= 3)
            //     $lmt = 24;                
            // elseif (($count_ips <3) and ($count_ips >=2.75))
            //     $lmt = 23;
            // elseif (($count_ips <2.75) and ($count_ips >=2.5))
            //     $lmt = 22;
            // else
            //     $lmt = 21;
        $data    = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'krs',
            'krs' => DB::table('mk_ditawarkan')
                        // ->join('mk_diambil','mk_diambil.mk_ditawarkan_id','mk_ditawarkan.id_mk_ditawarkan')
                        ->join('mata_kuliah','mata_kuliah.id_mk','mk_ditawarkan.matakuliah_id')
                        ->join('jenis_mk','jenis_mk.id','mata_kuliah.jenis_mk_id')
                        ->select('*')
                        ->where('mk_ditawarkan.thn_akademik_id',$tahun)
                        // ->where('mk_diambil.mhs_id',$nim_id)
                        ->get(),

            'app'  => DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
            ->join('mata_kuliah', 'mata_kuliah.id_mk', 'mk_ditawarkan.matakuliah_id')
            ->select('*')
            ->where('mhs_id','=',$nim_id)
            ->where('mk_ditawarkan.thn_akademik_id',$tahun)
            ->get(),
            //'count'=> $count,
            'sum'  => $sum,
            'limitSks' =>0,
            'tahun'=> $tahun,     
            'ips'  => 0,
            'lihat' => MKDiambil::all(),
        ];
        // Memanggil tampilan form create
        return view('mahasiswa.krs-khs.krs.create',$data);
    }
    public function createAction($id)
    {
        $tahun = TahunAkademik::count();
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
            ->where('mk_ditawarkan.thn_akademik_id',$tahun)
            ->sum('mata_kuliah.sks');
        $sum_total     = DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
            ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_ditawarkan.matakuliah_id')
            ->select('*')
            ->where('mhs_id',$nim_id)
            ->sum('mata_kuliah.sks');
        $sks_mk = DB::table('mata_kuliah')
                    ->join('mk_ditawarkan','mk_ditawarkan.matakuliah_id','mata_kuliah.id_mk')
                    ->where('mk_ditawarkan.id_mk_ditawarkan',$id)
                    ->first();

        if($sum==0){
            $mean = 0;
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
        if($nilai==0){
            $count_ips=0;
        } 
        else{
        $count_ips = $nilai/$count;
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
    
        $syaratMK = DB::table('mk_diambil')
        ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
        ->select('mk_ditawarkan.matakuliah_id')
        ->where('mhs_id','=',$nim_id)
        ->where('mk_ditawarkan.id_mk_ditawarkan','=',$id)
        ->where('nilai','!=','0')
        ->where('is_approve','=','0')
        ->get();

        $cek_syarat = DB::table('mk_ditawarkan')
                        ->join('mk_prasyarat','mk_ditawarkan.matakuliah_id','mk_prasyarat.mk_id')
                        ->where('id_mk_ditawarkan',$id)
                        ->get();

        $jadwal  = DB::table('mk_diambil')
        ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
        ->join('jadwal_kuliah','jadwal_kuliah.mk_ditawarkan_id','=','mk_diambil.mk_ditawarkan_id')
        ->select('jadwal_kuliah.jam_id','jadwal_kuliah.hari_id')
        ->where('mhs_id',$nim_id)
        ->where('mk_ditawarkan.thn_akademik_id',$tahun)
        ->get();

        $MKditawarkan = DB::table('mk_ditawarkan')
                        ->join('jadwal_kuliah','jadwal_kuliah.mk_ditawarkan_id','mk_ditawarkan.id_mk_ditawarkan')
                        ->select('*')
                        ->where('id_mk_ditawarkan',$id)
                        ->get();

        // Syarat 1 : Jadwal
        if($jadwal != ""){
            foreach ($jadwal as $j) {
                foreach ($MKditawarkan as $jd) {
                    if (($j->jam_id == $jd->jam_id)&&($j->hari_id == $jd->hari_id)){
                        Session::put('alert-danger', 'Terjadi tabrakan jadwal');
                        return Redirect::back();
                        }
                }
            }
        }
        //Syarat 2 : Limit Sks
        
        // // Syarat 3 : Syarat sks
        else if ($sum_total < $sks_mk->syarat_sks){
            Session::put('alert-danger', 'Syarat Sks belum terpenuhi');
            return Redirect::back();
        }

        else if($cek_syarat != ""){
            foreach ($cek_syarat as $s) {
                foreach ($syaratMK as $c) {
                    if ($s->mk_syarat_id != $c->matakuliah_id){
                        Session::put('alert-danger', 'Prasyarat Mata Kuliah Belum Terpenuhi');
                        return Redirect::back();
                        }
                }
            }
        }
        // Syarat 4 : Syarat mk
         else  {
            // foreach ($batas as $j => $b) {
            //         if ($syaratMK != $b){
            //             Session::put('alert-danger', 'Syarat mata kuliah belum terpenuhi');
            //             return Redirect::back();
            //             }
            //         }
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
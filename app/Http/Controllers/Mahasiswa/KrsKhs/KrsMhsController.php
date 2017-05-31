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
            // 'krs' => MataKuliah::all(),
        ];

        return view('mahasiswa.krskhs.krs.index',$data);
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
        $count   = DB::table('mk_diambil')
            ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_diambil.mk_ditawarkan_id')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
            ->select('*')
            ->where('mhs_id','=',$nim_id)
            ->count('mata_kuliah.sks');
        $sum     = DB::table('mk_diambil')
            ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_diambil.mk_ditawarkan_id')
            ->select('*')
            ->where('mhs_id','=',$nim_id)
            ->sum('mata_kuliah.sks');
        //$mean    = $sum/$count;
        // $nilai1  = array(DB::table('mk_diambil')
        //     ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
        //     ->select('mk_diambil.nilai')
        //     ->where('mhs_id','=',$nim_id)
        //     ->where('thn_akademik_id','=','thn_akademik_id')
        //     ); 
        // $nilai   = 0;
        // for ($x=0; $x< count($nilai1); $x++){
        //     $nilai_tmp = 0;
        //     if ($nilai1[$x] == "A")
        //         $nilai_tmp = $nilai_tmp + 4;                
        //     if ($nilai1[$x] == "AB")
        //         $nilai_tmp = $nilai_tmp + 3.5;
        //     if ($nilai1[$x] == "B")
        //         $nilai_tmp = $nilai_tmp + 3;
        //     if ($nilai1[$x] == "BC")
        //         $nilai_tmp = $nilai_tmp + 2.5;
        //     if ($nilai1[$x] == "C")
        //         $nilai_tmp = $nilai_tmp + 2;
        //     if ($nilai1[$x] == "CD")
        //         $nilai_tmp = $nilai_tmp + 1.5;
        //     if ($nilai1[$x] == "D")
        //         $nilai_tmp = $nilai_tmp + 1;
        //     if ($nilai1[$x] == "E")
        //         $nilai_tmp = $nilai_tmp + 0;
        //     $nilai = $nilai_tmp;
        //     }
        // $IPS     = $nilai/$count;
        // $lmt   = 0; 
        // $lmt_tmp;
        //     if ($IPS >= 3)
        //         $lmt_tmp = 24;                
        //     if (($IPS <3) and ($IPS>+2.75))
        //         $lmt_tmp = 23;
        //     if (($IPS <2.75) and ($IPS>+2.5))
        //         $lmt_tmp = 22;
        //     else
        //         $lmt_tmp = 21;
        // $lmt = $lmt_tmp;
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
            //'mean' => $mean,
            // 'limitSks' => $lmt,
            // 'ips'  => $IPS
        ];
        // Memanggil tampilan form create
        return view('mahasiswa.krskhs.krs.create',$data);
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

        return view('mahasiswa.krskhs.krs.update',$data);
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
        MKDiambil::where('mhs_id','=',$nim_id)
            ->where('mk_ditawarkan_id','=',$id)->delete();
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Mata Kuliah berhasil dihapus');

        // Kembali ke halaman mahasiswa/create
        return Redirect::to('mahasiswa/krskhs/krs/index');
    }
}
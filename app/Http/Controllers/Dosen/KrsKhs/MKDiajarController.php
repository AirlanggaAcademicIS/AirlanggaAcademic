<?php 

namespace App\Http\Controllers\Dosen\KrsKhs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;

use Auth;
// Tambahkan model yang ingin dipakai

use App\Models\KrsKhs\MKDiajar;
use App\Models\KrsKhs\TahunAkademik;

//use App\MKDitawarkan;
//use App\Dosen;



class MKDiajarController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    // Function untuk menampilkan tabel
    public function index()
    {
        $dosen_id  = Auth::user()->username;
        $tahun = TahunAkademik::count();
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'mk_diajar',
            // Memanggil semua isi dari tabel biodata
            'mk_diajar' => DB::table('mk_diajar')
                            ->join('mk_ditawarkan','mk_diajar.mk_ditawarkan_id','mk_ditawarkan.id_mk_ditawarkan')
                            ->join('mata_kuliah','mata_kuliah.id_mk','mk_ditawarkan.matakuliah_id')
                            ->where('dosen_id',$dosen_id)
                            ->where('status',0)
                            ->where('mk_ditawarkan.thn_akademik_id',$tahun)->get()
            // 'selectedRole' = Tahun::first()->role_id;
        ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.krs-khs.mk_diajar.index',$data);
    }

    public function detail($id_mk_ditawarkan)
    {
        $dosen_id  = Auth::user()->username;
        $tahun = TahunAkademik::count();
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'mk_diajar',
            // Memanggil semua isi dari tabel biodata
            'mk_diajar' => DB::table('mk_diajar')
                            ->join('mk_ditawarkan','mk_diajar.mk_ditawarkan_id','mk_ditawarkan.id_mk_ditawarkan')
                            ->join('mk_diambil','mk_diajar.mk_ditawarkan_id','mk_diambil.mk_ditawarkan_id')
                            ->join('biodata_mhs','mk_diambil.mhs_id','biodata_mhs.nim_id')
                            ->where('dosen_id',$dosen_id)
                            ->where('status',0)
                            ->where('mk_ditawarkan.id_mk_ditawarkan',$id_mk_ditawarkan)
                            ->where('mk_diambil.mk_ditawarkan_id',$id_mk_ditawarkan)
                            ->where('mk_ditawarkan.thn_akademik_id',$tahun)->get()
        ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        //dd($data['mk_diajar']);
        return view('dosen.krs-khs.mk_diajar.detail',$data);
    }

    
}
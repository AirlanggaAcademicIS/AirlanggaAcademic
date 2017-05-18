<?php 

namespace App\Http\Controllers\Karyawan\KrsKhs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Models\KrsKhs\JadwalKuliah;
use App\Models\KrsKhs\Jam;
use App\Models\KrsKhs\Hari;
use App\Models\KrsKhs\Ruang;


class JadwalKuliahController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'jadwal',
            // Memanggil semua isi dari tabel ruang
            'jadwal' => JadwalKuliah::all()
        ];
        // Memanggil tampilan index di folder krs-khs/ruang dan juga menambahkan $data tadi di view
        return view('karyawan.krs-khs.jadwal_kuliah.index',$data);
    }
     public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'jadwal',
            // Memanggil semua isi dari tabel ruang
            'jadwal' => Hari::all(),

            'jadwal2' =>Jam::all(),

             'jadwal3' =>Ruang::all()




        ];
        // Memanggil tampilan form create
        return view('karyawan.krs-khs.jadwal_kuliah.create',$data);
    }
     
    
}
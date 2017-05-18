<?php 

namespace App\Http\Controllers\Karyawan\pengelolaankegiatan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Publikasi;


class PublikasiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'publikasi',
            // Memanggil semua isi dari tabel biodata
            'publikasi' => Publikasi::all()
        ];

        // Memanggil tampilan index di folder karyawan/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.pengelolaan-kegiatan.publikasi.index',$data);
    }
}
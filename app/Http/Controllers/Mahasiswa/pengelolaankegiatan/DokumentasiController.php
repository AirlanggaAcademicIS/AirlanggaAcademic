<?php 

namespace App\Http\Controllers\pengelolaankegiatan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Dokumentasi;


class DokumentasiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'dokumentasi',
            // Memanggil semua isi dari tabel biodata
            'dokumentasi' => Dokumentasi::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.pengelolaan-kegiatan.dokumentasi.index',$data);
    }


}
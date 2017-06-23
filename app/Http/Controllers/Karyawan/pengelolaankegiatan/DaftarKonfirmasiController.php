<?php 

namespace App\Http\Controllers\Karyawan\pengelolaankegiatan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\KonfirmasiKegiatan;


class DaftarKonfirmasiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {

        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'daftar-konfirmasi',
            // Memanggil semua isi dari tabel biodata

            'konfirmasiProposal' => KonfirmasiKegiatan::where("konfirmasi_proposal","1")->where("konfirmasi_lpj","0")->get(),

            'konfirmasiLPJ' => KonfirmasiKegiatan::where("konfirmasi_lpj","2")->where("konfirmasi_proposal","1")->get()

        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.pengelolaan-kegiatan.daftar-konfirmasi.index',$data);
    }
     public function indexLPJ()
    {

        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'daftar-konfirmasi',
            // Memanggil semua isi dari tabel biodata

            'konfirmasiProposal' => KonfirmasiKegiatan::where("konfirmasi_proposal","1")->where("konfirmasi_lpj","0")->get(),

            'konfirmasiLPJ' => KonfirmasiKegiatan::where("konfirmasi_lpj","2")->where("konfirmasi_proposal","1")->get()

        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.pengelolaan-kegiatan.daftar-konfirmasi.indexLPJ',$data);
    }
}
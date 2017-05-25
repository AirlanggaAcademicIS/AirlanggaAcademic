<?php 

namespace App\Http\Controllers\Dosen;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\PenelitianDosen;
use App\JurnalDosen;
use App\PengmasDosen;
use App\Konferensi;


class ValidasiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index_jurnal()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar penelitian
            'page' => 'validasi',
            // Memanggil semua isi dari tabel penelitian
            'jurnal' => JurnalDosen::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/penelitian dan juga menambahkan $data tadi di view
        return view('dosen.validasi.index_jurnal',$data);
    }

    public function index_penelitian()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar penelitian
            'page' => 'validasi',
            // Memanggil semua isi dari tabel penelitian
            'penelitian' => PenelitianDosen::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/penelitian dan juga menambahkan $data tadi di view
        return view('dosen.validasi.index_penelitian',$data);
    }

    public function index_konferensi()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar penelitian
            'page' => 'validasi',
            // Memanggil semua isi dari tabel penelitian
            'konferensi' => Konferensi::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/penelitian dan juga menambahkan $data tadi di view
        return view('dosen.validasi.index_konferensi',$data);
    }

    public function index_pengmas()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar penelitian
            'page' => 'validasi',
            // Memanggil semua isi dari tabel penelitian
            'pengmas' => PengmasDosen::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/penelitian dan juga menambahkan $data tadi di view
        return view('dosen.validasi.index_pengmas',$data);
    }

    }
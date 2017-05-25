<?php 


namespace App\Http\Controllers\Mahasiswa\pengelolaankegiatan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'dokumentasi',
        ];

        // Memanggil tampilan form create
        return view('mahasiswa.pengelolaan-kegiatan.dokumentasi.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Dokumentasi::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Daftar Dokumentasi Kegiatan berhasil ditambahkan');

        return Redirect::to('karyawan/pengelolaan-kegiatan/dokumentasi');
    }


}
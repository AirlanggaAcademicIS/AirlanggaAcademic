<?php 

namespace App\Http\Controllers\Dosen\pengelolaankegiatan;

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

        // Memanggil tampilan index di folder dosen/biodata dan juga menambahkan $data tadi di view
        return view('dosen.pengelolaan-kegiatan.publikasi.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar Biodata
            'page' => 'publikasi',
        ];

        // Memanggil tampilan form create
        return view('dosen.pengelolaan-kegiatan.publikasi.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Publikasi::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Publikasi berhasil ditambahkan');

        // Kembali ke halaman dosen/biodata
        return Redirect::to('kegiatan/publikasi');
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $publikasi = Publikasi::find($id);

        // Menghapus biodata yang dicari tadi
        $publikasi->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Poster berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'publikasi',
            // Mencari biodata berdasarkan id
            'publikasi' => Publikasi::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.pengelolaan-kegiatan.publikasi.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $publikasi = Publikasi::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $publikasi->url_poster = $request->input('url_poster');
        $publikasi->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Publikasi berhasil diedit');

        // Kembali ke halaman dosen/biodata
        return Redirect::to('dosen/kegiatan/publikasi');
    }

}
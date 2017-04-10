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


class PenelitianController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar penelitian
            'page' => 'penelitian',
            // Memanggil semua isi dari tabel penelitian
            'penelitian' => PenelitianDosen::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/penelitian dan juga menambahkan $data tadi di view
        return view('dosen.penelitian.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar penelitian
            'page' => 'penelitian',
        ];

        // Memanggil tampilan form create
        return view('dosen.penelitian.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel penelitian
        penelitian::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'penelitian berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/penelitian
        return Redirect::to('dosen/penelitian');
    }

    public function delete($id_penelitian)
    {
        // Mencari penelitian berdasarkan id dan memasukkannya ke dalam variabel $penelitian
        $penelitian = PenelitianDosen::find($id_penelitian);

        // Menghapus penelitian yang dicari tadi
        $penelitian->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'penelitian berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($id_penelitian)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar penelitian
            'page' => 'penelitian',
            // Mencari penelitian berdasarkan id
            'penelitian' => PenelitianDosen::find($id_penelitian)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.penelitian.edit',$data);
    }

    public function editAction($id_penelitian, Request $request)
    {
        // Mencari penelitian yang akan di update dan menaruhnya di variabel $penelitian
        $penelitian = PenelitianDosen::find($id_penelitian);

        // Mengupdate $penelitian tadi dengan isi dari form edit tadi
        $penelitian->judul_penelitian = $request->input('judul');
        $penelitian->nama_ketua = $request->input('nama');
        $penelitian->bidang_penelitian = $request->input('bidang');
        $penelitian->tanggal_penelitian = $request->input('tanggal_masuk');
        $penelitian->save();

        // Notifikasi sukses
        Session::put('alert-success', 'penelitian berhasil diedit');

        // Kembali ke halaman mahasiswa/penelitian
        return Redirect::to('dosen/penelitian');
    }

}
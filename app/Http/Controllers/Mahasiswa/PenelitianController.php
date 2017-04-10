<?php 

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\PenelitianMhs;


class PenelitianController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'penelitian_mhs',
            // Memanggil semua isi dari tabel biodata
            'penelitian_mhs' => PenelitianMhs::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.kemahasiswaan.penelitian.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'penelitian_mhs',
        ];

        // Memanggil tampilan form create
    	return view('mahasiswa.kemahasiswaan.penelitian.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        $penelitian = PenelitianMhs::create($request->input());
        $penelitian->file_pen = $request->file_pen;
        $penelitian->save();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Penelitian Mahasiswa berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/penelitian');
    }

    public function delete($kode_penelitian)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $penelitian_mhs = PenelitianMhs::find($kode_penelitian);

        // Menghapus biodata yang dicari tadi
        $penelitian_mhs->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Penelitian berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($kode_penelitian)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'penelitian_mhs',
            // Mencari biodata berdasarkan id
            'penelitian_mhs' => PenelitianMhs::find($kode_penelitian)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('mahasiswa.kemahasiswaan.penelitian.edit',$data);
    }

    public function editAction($kode_penelitian, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $penelitian_mhs = PenelitianMhs::find($kode_penelitian);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $penelitian_mhs->judul = $request->input('judul');
        $penelitian_mhs->peneliti = $request->input('peneliti');
        $penelitian_mhs->fakultas = $request->input('fakultas');
        $penelitian_mhs->tahun = $request->input('tahun');
        $penelitian_mhs->halaman_naskah = $request->input('halaman_naskah');
        $penelitian_mhs->sumber_dana = $request->input('sumber_dana');
        $penelitian_mhs->besar_dana = $request->input('besar_dana');
        $penelitian_mhs->sk = $request->input('sk');
        $penelitian_mhs->publikasi = $request->input('publikasi');
        $penelitian_mhs->kategori_penelitian = $request->input('kategori_penelitian');
        $penelitian_mhs->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Penelitian berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/penelitian');
    }

}
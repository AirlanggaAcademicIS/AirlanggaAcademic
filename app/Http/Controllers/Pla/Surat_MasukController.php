<?php 

namespace App\Http\Controllers\Pla;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Surat_Masuk;


class Surat_MasukController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'suratmasuk',
            // Memanggil semua isi dari tabel biodata
            'surat_masuk' => Surat_Masuk::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('pla.surat-masuk.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'suratmasuk',
        ];

        // Memanggil tampilan form create
    	return view('pla.surat-masuk.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Surat_Masuk::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Surat berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('pla/surat-masuk');
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $surat_masuk = Surat_Masuk::find($id);

        // Menghapus biodata yang dicari tadi
        $surat_masuk->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Surat berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'suratmasuk',
            // Mencari biodata berdasarkan id
            'surat_masuk' => Surat_Masuk::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('pla.surat-masuk.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $surat_masuk = Surat_Masuk::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $surat_masuk->no_surat_masuk = $request->input('no_surat_masuk');
        $surat_masuk->nip_petugas = $request->input('nip_petugas');
        $surat_masuk->nama_lembaga = $request->input('nama_lembaga');
        $surat_masuk->judul_surat_masuk = $request->input('judul_surat_masuk');
        $surat_masuk->nim_nip = $request->input('nim_nip');
        $surat_masuk->status = $request->input('status');
        $surat_masuk->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Surat berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('pla/surat-masuk');
    }

}
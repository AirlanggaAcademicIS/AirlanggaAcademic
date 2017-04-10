<?php 

namespace App\Http\Controllers\Kurikulum;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\KategoriMediaPembelajaran;


class KategoriMediaPembelajaranController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar kategori media pembelajaran
            'page' => 'kategori-media-pembelajaran',
            // Memanggil semua isi dari tabel biodata
            'kategori_media_pembelajaran' => KategoriMediaPembelajaran::all()
        ];

        // Memanggil tampilan index
        return view('kurikulum.kategori-media-pembelajaran.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'kategori-media-pembelajaran',
        ];

        // Memanggil tampilan form create
    	return view('kurikulum.kategori-media-pembelajaran.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        KategoriMediaPembelajaran::create($request->input());

        // Menampilkan notifikasi pesa8n sukses
        Session::put('alert-success', 'Kategori berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('kurikulum/kategori-media-pembelajaran');
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $kategori_media_pembelajaran = KategoriMediaPembelajaran::find($id);

        // Menghapus biodata yang dicari tadi
        $kategori_media_pembelajaran->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Kategori berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'kategori-media-pembelajaran',
            // Mencari biodata berdasarkan id
            'kategori_media_pembelajaran' => KategoriMediaPembelajaran::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('kurikulum.kategori-media-pembelajaran.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        $km = KategoriMediaPembelajaran::find($id);
        $km->kategori_media_pembelajaran = $request->input('kategori_media_pembelajaran');
        $km->media_pembelajaran = $request->input('media_pembelajaran');
        $km->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Kategori berhasil diedit');

        return Redirect::to('kurikulum/kategori-media-pembelajaran');
    }

}
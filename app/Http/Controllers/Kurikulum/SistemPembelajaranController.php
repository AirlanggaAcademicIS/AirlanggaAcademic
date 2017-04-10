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
use App\SistemPembelajaran;


class SistemPembelajaranController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'sistem-pembelajaran',
            // Memanggil semua isi dari tabel biodata
            'sistem_pembelajaran' => SistemPembelajaran::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('kurikulum.sistem-pembelajaran.index',$data);
        // dd($data['sistem-pembelajaran']);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'sistem_pembelajaran',
        ];

        // Memanggil tampilan form create
    	return view('kurikulum.sistem-pembelajaran.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        SistemPembelajaran::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Sistem pembelajaran berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('kurikulum/sistem-pembelajaran');
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $sistem_pembelajaran = SistemPembelajaran::find($id);

        // Menghapus biodata yang dicari tadi
        $sistem_pembelajaran->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Sistem pembelajaran berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'sistem-pembelajaran',
            // Mencari biodata berdasarkan id
            'sistem_pembelajaran' => SistemPembelajaran::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('kurikulum.sistem-pembelajaran.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $sp = SistemPembelajaran::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $sp->sistem_pembelajaran = $request->input('sistem_pembelajaran');

        $sp->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Sistem pembelajaran berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('kurikulum/sistem-pembelajaran');
    }

}
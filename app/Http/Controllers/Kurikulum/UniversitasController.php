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
use App\Universitas;


class UniversitasController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'universitas',
            // Memanggil semua isi dari tabel biodata
            'universitas' => Universitas::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('kurikulum.universitas.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'universitas',
        ];

        // Memanggil tampilan form create
    	return view('kurikulum.universitas.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Universitas::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Universitas berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('kurikulum/universitas');
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $universitas = Universitas::find($id);

        // Menghapus biodata yang dicari tadi
        $universitas->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Universitas berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'universitas',
            // Mencari biodata berdasarkan id
            'universitas' => Universitas::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('kurikulum.Universitas.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $universitas = Universitas::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $universitas->kode_universitas = $request->input('kode_universitas');
        $universitas->nama_universitas = $request->input('nama_universitas');
        $universitas->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Universitas berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('kurikulum/universitas');
    }

}
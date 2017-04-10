<?php 

namespace App\Http\Controllers\PengelolaanKegiatan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Rundown;


class RundownController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rundown',
            // Memanggil semua isi dari tabel biodata
            'rundown' => Rundown::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('pengelolaan-kegiatan.rundown.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rundown',
        ];

        // Memanggil tampilan form create
    	return view('pengelolaan-kegiatan.rundown.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Rundown::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Rundown berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('pengelolaan-kegiatan/rundown');
    }

    public function delete($kode_rundown)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $rundown = Rundown::find($kode_rundown);

        // Menghapus biodata yang dicari tadi
        $rundown->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Rundown berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($kode_rundown)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rundown',
            // Mencari biodata berdasarkan id
            'rundown' => Rundown::find($kode_rundown)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('pengelolaan-kegiatan.rundown.edit',$data);
    }

    public function editAction($kode_rundown, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $rundown = Rundown::find($kode_rundown);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $rundown->durasi_rundown = $request->input('durasi_rundown');
        $rundown->deskripsi_rundown = $request->input('deskripsi_rundown');
        $rundown->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Rundown berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('pengelolaan-kegiatan/rundown');
    }

}
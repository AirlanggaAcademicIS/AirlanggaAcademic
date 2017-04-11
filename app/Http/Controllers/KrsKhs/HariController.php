<?php 

namespace App\Http\Controllers\KrsKhs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Models\KrsKhs\Hari;


class HariController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar hari
            'page' => 'Hari',
            // Memanggil semua isi dari tabel hari
            'Hari' => Hari::all()
        ];

        // Memanggil tampilan index di folder krs-khs/hari dan juga menambahkan $data tadi di view
        return view('krs-khs.Hari.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar hari
            'page' => 'Hari',
        ];

        // Memanggil tampilan form create
    	return view('krs-khs.Hari.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel hari
        Hari::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Hari berhasil ditambahkan');

        // Kembali ke halaman krs-khs/hari
        return Redirect::to('krs-khs/Hari');
    }

    public function delete($id)
    {
        // Mencari hari berdasarkan id dan memasukkannya ke dalam variabel $hari
        $Hari = Hari::find($id);

        // Menghapus hari yang dicari tadi
        $Hari->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Hari berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar hari
            'page' => 'Hari',
            // Mencari ruang berdasarkan id
            'Hari' => Hari::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('krs-khs.Hari.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari ruang yang akan di update dan menaruhnya di variabel $hari
        $Hari = Hari::find($id);

        // Mengupdate $hari tadi dengan isi dari form edit tadi
        $Hari->nama_hari = $request->input('nama_hari');
        $Hari->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Hari berhasil diedit');

        // Kembali ke halaman krs-khs/hari/view
        return Redirect::to('krs-khs/Hari');
    }

}
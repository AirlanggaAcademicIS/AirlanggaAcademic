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
use App\DetailPenelitian;


class DetailPenelitianController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'detailpenelitian',
            // Memanggil semua isi dari tabel biodata
            'detailpenelitian' => DetailPenelitian::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.detailPenelitian.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'detailpenelitian',
        ];

        // Memanggil tampilan form create
    	return view('mahasiswa.detailPenelitian.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        DetailPenelitian::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Detail Penelitian berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/detailpenelitian');
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $detailPenelitian = DetailPenelitian::find($id);

        // Menghapus biodata yang dicari tadi
        $detailPenelitian->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Detail Penelitian berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'detailpenelitian',
            // Mencari biodata berdasarkan id
            'detailpenelitian' => DetailPenelitian::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('mahasiswa.detailPenelitian.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $detailPenelitian = DetailPenelitian::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $detailPenelitian->abstract = $request->input('abstract');
        $detailPenelitian->background = $request->input('background');
        $detailPenelitian->objective = $request->input('objective');
        $detailPenelitian->methods = $request->input('methods');
        $detailPenelitian->results = $request->input('results');
        $detailPenelitian->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Detail Penelitian berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/detailpenelitian');
    }

}
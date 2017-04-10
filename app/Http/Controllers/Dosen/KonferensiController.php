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
use App\Konferensi;


class KonferensiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konferensi',
            // Memanggil semua isi dari tabel biodata
            'konferensi' => Konferensi::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.konferensi.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konferensi',
        ];

        // Memanggil tampilan form create
    	return view('dosen.konferensi.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata

        Konferensi::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Konferensi berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/konferensi');
    }

    public function delete($id_konferensi)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $konferensi = Konferensi::find($id_konferensi);

        // Menghapus biodata yang dicari tadi
        $konferensi->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Konferensi berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id_konferensi)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konferensi',
            // Mencari biodata berdasarkan id
            'konferensi' => Konferensi::find($id_konferensi)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.konferensi.edit',$data);
    }

    public function editAction($id_konferensi, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $konferensi = Konferensi::find($id_konferensi);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $konferensi->nama_konferensi = $request->input('nama_konferensi');
        $konferensi->pemapar_konferensi = $request->input('pemapar_konferensi');
        $konferensi->tempat_konferensi = $request->input('tempat_konferensi');
        $konferensi->tanggal_konferensi = $request->input('tanggal_konferensi');
        $konferensi->materi_konferensi = $request->input('materi_konferensi');
        $konferensi->status_konferensi = 0 ;
        $konferensi->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Konferensi berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/konferensi');
    }

}
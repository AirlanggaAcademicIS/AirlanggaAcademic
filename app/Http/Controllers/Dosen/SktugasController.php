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
use App\Sktugas;


class SktugasController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'sktugas',
            // Memanggil semua isi dari tabel biodata
            'sktugas' => Sktugas::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.sktugas.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'sktugas',
        ];

        // Memanggil tampilan form create
    	return view('dosen.sktugas.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata

        Sktugas::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Surat Tugas berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/sktugas');
    }

    public function delete($id_surat)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $sktugas = Sktugas::find($id_surat);

        // Menghapus biodata yang dicari tadi
        $sktugas->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Surat Tugas berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id_surat)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'sktugas',
            // Mencari biodata berdasarkan id
            'sktugas' => Sktugas::find($id_sktugas)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.sktugas.edit',$data);
    }

    public function editAction($id_sktugas, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $sktugas = Sktugas::find($id_surat);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $sktugas->id_surat = $request->input('id_surat');
        $sktugass->no_surat = $request->input('no_surat');
        $sktugas->tanggal_surat = $request->input('tanggal_surat');
        $sktugas->tanggal_upload = $request->input('tanggal_upload');
        $sktugas->keterangan_surat = $request->input('keterangan_surat');
        
        // Notifikasi sukses
        Session::put('alert-success', 'Surat Tugas berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/sktugas');
    }

}
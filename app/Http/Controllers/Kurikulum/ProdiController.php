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
use App\Prodi;


class ProdiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'prodi',
            // Memanggil semua isi dari tabel biodata
            'prodi' => Prodi::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('kurikulum.prodi.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'prodi',
        ];

        // Memanggil tampilan form create
    	return view('kurikulum.prodi.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Prodi::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Prodi berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('kurikulum/prodi');
    }

    public function delete($id_prodi)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $prodi = Prodi::find($id_prodi);

        // Menghapus biodata yang dicari tadi
        $prodi->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Program Studi berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id_prodi)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'prodi',
            // Mencari biodata berdasarkan id
            'prodi' => Prodi::find($id_prodi)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('kurikulum.prodi.edit',$data);
    }

    public function editAction($id_prodi, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $prodi = Prodi::find($id_prodi);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $prodi->id_fakultas = $request->input('id_fakultas');
        $prodi->nip = $request->input('nip');
        $prodi->kode_prodi = $request->input('kode_prodi');
        $prodi->nama_prodi = $request->input('nama_prodi');
        $prodi->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Data Prodi berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('kurikulum/prodi');
    }

}
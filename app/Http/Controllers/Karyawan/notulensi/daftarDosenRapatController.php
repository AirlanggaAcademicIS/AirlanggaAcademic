<?php 

namespace App\Http\Controllers\Karyawan\notulensi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\DosenRapat;


class daftarDosenRapatController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'DosenRapat',
            // Memanggil semua isi dari tabel biodata
            'dosen_rapat' => DosenRapat::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.kehadiranRapat.daftarDosenRapat',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'dosenrapat',
        ];

        // Memanggil tampilan form create
    	return view('notulensi.dosenrapat.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        DosenRapat::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Dosen Rapat berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('notulensi/dosenrapat');
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $dosenrapat = DosenRapat::find($id);

        // Menghapus biodata yang dicari tadi
        $dosenrapat->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Dosen Rapat berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'DosenRapat',
            // Mencari biodata berdasarkan id
            'dosenrapat' => DosenRapat::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('notulensi.dosenrapat.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $dosenrapat = DosenRapat::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $dosenrapat->nip = $request->input('nip');
        $dosenrapat->id_notulen = $request->input('id_notulen');
        $dosenrapat->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Dosen Rapat berhasil diedit');

        // Kembali ke halaman notulensi/dosenrapat
        return Redirect::to('notulensi/dosenrapat');
    }

}
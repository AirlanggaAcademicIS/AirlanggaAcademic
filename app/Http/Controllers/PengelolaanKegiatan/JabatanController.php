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
use App\Jabatan;


class JabatanController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar jabatan
            'page' => 'jabatan',
            // Memanggil semua isi dari tabel jabatan
            'jabatan' => Jabatan::all()
        ];

        // Memanggil tampilan index di folder pengelolaan kegiatan/jabatan dan juga menambahkan $data tadi di view
        return view('pengelolaan-kegiatan.jabatan.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar jabatan
            'page' => 'jabatan',
        ];

        // Memanggil tampilan form create
    	return view('pengelolaan-kegiatan.jabatan.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel jabatan
        Jabatan::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Jabatan berhasil ditambahkan');

        // Kembali ke halaman pengelolaan kegiatan/jabatan
        return Redirect::to('pengelolaan-kegiatan/jabatan');
    }

    public function delete($id)
    {
        // Mencari jabatan berdasarkan id dan memasukkannya ke dalam variabel $jabatan
        $jabdata = Jabatan::find($id);

        // Menghapus jabatan yang dicari tadi
        $jabdata->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Jabatan berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar jabatan
            'page' => 'jabatan',
            // Mencari jabatan berdasarkan id
            'jabatan' => Jabatan::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('pengelolaan-kegiatan.jabatan.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari jabatan yang akan di update dan menaruhnya di variabel $jabatan
        $jabatan = Jabatan::find($id);

        // Mengupdate $jabatan tadi dengan isi dari form edit tadia
        $jabatan->nama = $request->input('nama');
        $jabatan->jabatan = $request->input('jabatan');
        $jabatan->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Jabatan berhasil diedit');

        // Kembali ke halaman pengelolaan kegiatan/jabatan
        return Redirect::to('pengelolaan-kegiatan/jabatan');
    }

}
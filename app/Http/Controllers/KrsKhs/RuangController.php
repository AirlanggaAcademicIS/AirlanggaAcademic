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
use App\Models\KrsKhs\Ruang;


class RuangController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'ruang',
            // Memanggil semua isi dari tabel ruang
            'ruang' => Ruang::all()
        ];

        // Memanggil tampilan index di folder krs-khs/ruang dan juga menambahkan $data tadi di view
        return view('krs-khs.ruang.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'ruang',
        ];

        // Memanggil tampilan form create
    	return view('krs-khs.ruang.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel ruang
        Ruang::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Ruang berhasil ditambahkan');

        // Kembali ke halaman krs-khs/ruang
        return Redirect::to('krs-khs/ruang/view');
    }

    public function delete($id)
    {
        // Mencari ruang berdasarkan id dan memasukkannya ke dalam variabel $ruang
        $ruang = Ruang::find($id);

        // Menghapus ruang yang dicari tadi
        $ruang->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Ruang berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'ruang',
            // Mencari ruang berdasarkan id
            'ruang' => Ruang::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('krs-khs.ruang.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari ruang yang akan di update dan menaruhnya di variabel $ruang
        $ruang = Ruang::find($id);

        // Mengupdate $ruang tadi dengan isi dari form edit tadi
        $ruang->nama_ruang = $request->input('nama_ruang');
        $ruang->kapasitas = $request->input('kapasitas');
        $ruang->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Ruang berhasil diedit');

        // Kembali ke halaman krs-khs/ruang/view
        return Redirect::to('krs-khs/ruang/view');
    }

}
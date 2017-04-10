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
use App\Models\KrsKhs\Jam;


class JamController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'jam',
            // Memanggil semua isi dari tabel ruang
            'jam' => Jam::all()
        ];

        // Memanggil tampilan index di folder krs-khs/ruang dan juga menambahkan $data tadi di view
        return view('krs-khs.jam.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'jam',
        ];

        // Memanggil tampilan form create
    	return view('krs-khs.jam.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel ruang
        Jam::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Jam berhasil ditambahkan');

        // Kembali ke halaman krs-khs/ruang
        return Redirect::to('krs-khs/jam/view');
    }

    public function delete($id)
    {
        // Mencari ruang berdasarkan id dan memasukkannya ke dalam variabel $ruang
        $jam = Jam::find($id);

        // Menghapus ruang yang dicari tadi
        $jam->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Jam berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'jam',
            // Mencari ruang berdasarkan id
            'jam' => Jam::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('krs-khs.jam.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari ruang yang akan di update dan menaruhnya di variabel $ruang
        $jam = Jam::find($id);

        // Mengupdate $ruang tadi dengan isi dari form edit tadi
        $jam->waktu = $request->input('waktu');
        $jam->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Jam berhasil diedit');

        // Kembali ke halaman krs-khs/ruang/view
        return Redirect::to('krs-khs/jam/view');
    }

}
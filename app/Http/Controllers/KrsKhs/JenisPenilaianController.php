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
use App\JenisPenilaian;


class JenisPenilaianController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'jenispenilaian',
            // Memanggil semua isi dari tabel biodata
            'jenispenilaian' => JenisPenilaian::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('krs-khs.JenisPenilaian.index',$data);
    }

    public function create()
    {  // Menginsertkan apa yang ada di form ke dalam tabel biodata
         $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'jenispenilaian',
        ];

        // Memanggil tampilan form create
        return view('krs-khs.JenisPenilaian.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        JenisPenilaian::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Jenis Penilaian berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('krs-khs/JenisPenilaian');
    }

    public function delete($id_jenis_penilaian)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $jenispenilaian = JenisPenilaian::find($id_jenis_penilaian);

        // Menghapus biodata yang dicari tadi
        $jenispenilaian->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Biodata berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id_jenis_penilaian)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'jenispenilaian',
            // Mencari biodata berdasarkan id
            'jenispenilaian' => JenisPenilaian::find($id_jenis_penilaian)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('krs-khs.JenisPenilaian.edit',$data);
    }

    public function editAction($id_jenis_penilaian, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $jenispenilaian = JenisPenilaian::find($id_jenis_penilaian);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $jenispenilaian->nama_jenis = $request->input('nama_jenis');
        $jenispenilaian->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Jenis Penilaian berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('krs-khs/JenisPenilaian');
    }

}
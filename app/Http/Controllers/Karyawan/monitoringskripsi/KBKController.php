<?php 

namespace App\Http\Controllers\Karyawan\monitoringskripsi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\KBK;


class KBKController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'kbk',
            // Memanggil semua isi dari tabel biodata
            'kbk' => KBK::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.monitoring-skripsi.kbk.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'kbk',
        ];
    

        // Memanggil tampilan form create
    	return view('karyawan.monitoring-skripsi.kbk.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        KBK::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'KBK berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/monitoring-skripsi/KBK');
    }

    public function delete($id_kbk)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $kbk = KBK::find($id_kbk);

        // Menghapus biodata yang dicari tadi
        $kbk->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'KBK berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id_kbk)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'kbk',
            // Mencari biodata berdasarkan id
            'kbk' => KBK::find($id_kbk)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.monitoring-skripsi.kbk.edit',$data);
    }

    public function editAction($id_kbk, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $kbk = KBK::find($id_kbk);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $kbk->jenis_kbk = $request->input('jenis_kbk');
        $kbk->save();

        // Notifikasi sukses
        Session::put('alert-success', 'KBK berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/monitoring-skripsi/KBK');
    }

}
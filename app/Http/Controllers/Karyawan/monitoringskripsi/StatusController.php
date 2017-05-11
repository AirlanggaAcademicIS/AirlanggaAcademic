<?php 

namespace App\Http\Controllers\karyawan\monitoringskripsi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\MonsiStatus;


class StatusController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'MonsiStatus',
            // Memanggil semua isi dari tabel biodata
            'MonsiStatus' => (MonsiStatus::all())
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.monitoring-skripsi.status.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'MonsiStatus',
        ];

        // Memanggil tampilan form create
    	return view('karyawan.monitoring-skripsi.status.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        MonsiStatus::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Status berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/monitoring-skripsi/status');
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $MonsiStatus = MonsiStatus::find($id);

        // Menghapus biodata yang dicari tadi
        $MonsiStatus->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Status berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'MonsiStatus',
            // Mencari biodata berdasarkan id
            'MonsiStatus' => MonsiStatus::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.monitoring-skripsi.status.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $MonsiStatus = MonsiStatus::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $MonsiStatus->id = $request->input('id');
        $MonsiStatus->keterangan = $request->input('keterangan');

        $MonsiStatus->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Status berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/monitoring-skripsi/status');
    }

}
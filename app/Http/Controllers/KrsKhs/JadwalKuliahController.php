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
use App\JadwalKuliah;


class JadwalKuliahController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'jadwal',
            // Memanggil semua isi dari tabel ruang
            'jadwal' => JadwalKuliah::all()
        ];

        // Memanggil tampilan index di folder krs-khs/ruang dan juga menambahkan $data tadi di view
        return view('krs-khs.JadwalKuliah.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'jadwal',
        ];

        // Memanggil tampilan form create
    	return view('krs-khs.JadwalKuliah.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel ruang
        JadwalKuliah::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'jadwal berhasil ditambahkan');

        // Kembali ke halaman krs-khs/ruang
        return Redirect::to('krs-khs/JadwalKuliah/');
    }

    public function delete($id)
    {
        // Mencari ruang berdasarkan id dan memasukkannya ke dalam variabel $ruang
        $jadwal = JadwalKuliah::find($id);

        // Menghapus ruang yang dicari tadi
        $jadwal->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Ruang berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'jadwal',
            // Mencari ruang berdasarkan id
            'jadwal' => JadwalKuliah::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('krs-khs.JadwalKuliah.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari ruang yang akan di update dan menaruhnya di variabel $ruang
        $jadwal = JadwalKuliah::find($id);

        // Mengupdate $ruang tadi dengan isi dari form edit tadi
        $jadwal->id_mk_ditawarkan = $request->input('id_mk_ditawarkan');
        $jadwal->id_jam = $request->input('id_jam');
        $jadwal->id_hari = $request->input('id_hari');
        $jadwal->id_ruang = $request->input('id_ruang');
        $jadwal->save();

        // Notifikasi sukses
        Session::put('alert-success', 'jadwal berhasil diedit');

        // Kembali ke halaman krs-khs/ruang/view
        return Redirect::to('krs-khs/JadwalKuliah');
    }

}
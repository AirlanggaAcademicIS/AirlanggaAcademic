<?php 

namespace App\Http\Controllers\Dosen\Kurikulum;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Kode;


class KodeController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'kode',
            // Memanggil semua isi dari tabel biodata
            'kode_cppem' => Kode::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.kurikulum.kode.index',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Kode::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Kode berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/kurikulum/kodecppem');
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $kode = Kode::find($id);

        // Menghapus biodata yang dicari tadi
        $kode -> delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Kode berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();
    }

    public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'kode',
            // Mencari biodata berdasarkan id
            'kode_cppem' => Kode::all(),
            'single_kode' => Kode::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        // dd($data['kode_cpmatkul']);
        return view('dosen.kurikulum.kode.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $kode = Kode::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $kode->nama_cpem = $request->input('nama_cpem');

        $kode->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Kode berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/kurikulum/kodecppem');
    }

}
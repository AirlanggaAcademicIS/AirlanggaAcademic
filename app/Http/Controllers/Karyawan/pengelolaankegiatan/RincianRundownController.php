<?php 

namespace App\Http\Controllers\Karyawan\Pengelolaankegiatan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\RincianRundown;


class RincianRundownController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rincianrundown',
            // Memanggil semua isi dari tabel biodata
            'rincianrundown' => RincianRundown::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.pengelolaan-kegiatan.rincian-rundown.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar Biodata
            'page' => 'rincianrundown',
        ];

        // Memanggil tampilan form create
        return view('karyawan.pengelolaan-kegiatan.rincian-rundown.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        RincianRundown::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Rincian Rundown berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/pengelolaan-kegiatan/rincian-rundown');
    }

    public function delete($id_rundown)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $rincianrundown = RincianRundown::find($id_rundown);

        // Menghapus biodata yang dicari tadi
        $rincianrundown->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Rincian Rundown berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($id_rundown)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rincianrundown',
            // Mencari biodata berdasarkan id
            'rincianrundown' => RincianRundown::find($id_rundown)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.pengelolaan-kegiatan.rincian-rundown.edit',$data);
    }

    public function editAction($id_rundown, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $rincianrundown = RincianRundown::find($id_rundown);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $rincianrundown->kegiatan_id = $request->input('kegiatan_id');
        $rincianrundown->nama = $request->input('nama');
        $rincianrundown->waktu = $request->input('waktu');
        $rincianrundown->kategori_rundown = $request->input('kategori_rundown');
        $rincianrundown->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Rincian Rundown berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/pengelolaan-kegiatan/rincian-rundown');
    }

}
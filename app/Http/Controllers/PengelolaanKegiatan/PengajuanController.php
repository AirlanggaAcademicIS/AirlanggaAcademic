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
use App\Pengajuan;


class PengajuanController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'pengajuan',
            // Memanggil semua isi dari tabel biodata
            'pengajuan' => Pengajuan::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('pengelolaan-kegiatan.pengajuan.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'pengajuan',
        ];

        // Memanggil tampilan form create
        return view('pengelolaan-kegiatan.pengajuan.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Pengajuan::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Pengajuan Kegiatan berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('pengelolaan-kegiatan/pengajuan');
    }
    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $pengajuan = Pengajuan::find($id);

        // Menghapus biodata yang dicari tadi
        $pengajuan -> delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Pengajuan Kegiatan berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'pengajuan',
            // Mencari biodata berdasarkan id
            'pengajuan' => Pengajuan::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('pengelolaan-kegiatan.pengajuan.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $pengajuan = Pengajuan::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $pengajuan->nama_kegiatan = $request->input('nama_kegiatan');
        $pengajuan->latar_belakang = $request->input('latar_belakang');
        $pengajuan->tujuan_kegiatan = $request->input('tujuan_kegiatan');
        $pengajuan->mekanisme_kegiatan = $request->input('mekanisme_kegiatan');
        $pengajuan->tanggal_pengajuan = $request->input('tanggal_pengajuan');
        $pengajuan->tempat_pengajuan = $request->input('tempat_pengajuan');
        $pengajuan->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Pengajuan Kegiatan berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('pengelolaan-kegiatan/pengajuan');
    }

}

   



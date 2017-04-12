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
use App\LaporanPelaksanaan;


class LaporanPelaksanaanController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'laporan_pelaksanaan',
            // Memanggil semua isi dari tabel biodata
            'laporan_pelaksanaan' => LaporanPelaksanaan::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('pengelolaan-kegiatan.laporan_pelaksanaan.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'laporan_pelaksanaan',
        ];

        // Memanggil tampilan form create
    	return view('pengelolaan-kegiatan.laporan_pelaksanaan.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel laporan lpj
       // LaporanPelaksanaan::create($request->input());

        $laporan_pelaksanaan = new LaporanPelaksanaan;

        $laporan_pelaksanaan->nama_kegiatan = $request->nama_kegiatan;
        $laporan_pelaksanaan->tanggal_pelaksanaan = $request->tanggal_pelaksanaan;
        $laporan_pelaksanaan->tempat_pelaksanaan = $request->tempat_pelaksanaan;
        $laporan_pelaksanaan->pelaksanaan_dana = $request->pelaksanaan_dana;

        $laporan_pelaksanaan->save();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Laporan LPJ berhasil ditambahkan');

        // Kembali ke halaman pengelolaan-kegiatan/laporan_pelaksanaan
        return Redirect::to('pengelolaan-kegiatan/laporan_pelaksanaan');
    }

    public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar laporan pelaksanaan
            'page' => 'laporan_pelaksanaan',
            // Mencari biodata berdasarkan id
            'laporan_pelaksanaan' => LaporanPelaksanaan::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('pengelolaan-kegiatan.laporan_pelaksanaan.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $laporan_pelaksanaan
        $laporan_pelaksanaan = LaporanPelaksanaan::find($id);

        // Mengupdate $laporan_pelaksanaan tadi dengan isi dari form edit tadi
        $laporan_pelaksanaan->nama_kegiatan = $request->input('nama_kegiatan');
        $laporan_pelaksanaan->tanggal_pelaksanaan = $request->input('tanggal_pelaksanaan');
        $laporan_pelaksanaan->tempat_pelaksanaan = $request->input('tempat_pelaksanaan');
        $laporan_pelaksanaan->pelaksanaan_dana = $request->input('pelaksanaan_dana');
        $laporan_pelaksanaan->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Laporan LPJ berhasil diedit');

        // Kembali ke halaman mahasiswa/laporan_pelaksanaan
        return Redirect::to('pengelolaan-kegiatan/laporan_pelaksanaan');
    }

     public function delete($id)
    {
        // Mencari laporan_pelaksanaan berdasarkan id dan memasukkannya ke dalam variabel $laporan_pelaksanaan
        $laporan_pelaksanaan = LaporanPelaksanaan::find($id);

        // Menghapus laporan_pelaksanaan yang dicari tadi
        $laporan_pelaksanaan -> delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Laporan LPJ berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }
}
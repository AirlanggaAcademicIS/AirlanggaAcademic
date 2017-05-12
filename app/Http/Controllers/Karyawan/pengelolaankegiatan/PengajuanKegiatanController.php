<?php 

namespace App\Http\Controllers\Karyawan\pengelolaankegiatan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\PengajuanKegiatan;


class PengajuanKegiatanController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'pengajuanKegiatan',
            // Memanggil semua isi dari tabel biodata
            'pengajuanKegiatan' => PengajuanKegiatan::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.pengelolaan-kegiatan.pengajuan-kegiatan.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'pengajuanKegiatan',
        ];

        // Memanggil tampilan form create
        return view('karyawan.pengelolaan-kegiatan.pengajuan-kegiatan.create',$data);
    }

   //  public function createAction(Request $request)
   //  {
   //      // Menginsertkan apa yang ada di form ke dalam tabel biodata
   //      Dokumentasi::create($request->input());

   //      // Menampilkan notifikasi pesan sukses
   //      Session::put('alert-success', 'Pengajuan berhasil ditambahkan');

   //      // Kembali ke halaman mahasiswa/biodata
   //      return Redirect::to('karyawan/pengelolaan-kegiatan/pengajuan-kegiatan');
   //  }

   //  public function delete($id_kegiatan)
   //  {
   //      // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
   //      $dokumentasi = Dokumentasi::find($id_kegiatan);

   //      // Menghapus biodata yang dicari tadi
   //      $dokumentasi->delete();

   //      // Menampilkan notifikasi pesan sukses
   //      Session::put('alert-success', 'Pengajuan Kegiatan berhasil dihapus');

   //      // Kembali ke halaman sebelumnya
   //      return Redirect::back();     
   //  }

   // public function edit($id_kegiatan)
   //  {
   //      $data = [
   //          // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
   //          'page' => 'pengajuan-kegiatan',
   //          // Mencari biodata berdasarkan id
   //          'pengajuan-kegiatan' => PengajuanKegiatan::find($id_kegiatan)
   //      ];

   //      // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
   //      return view('karyawan.pengelolaan-kegiatan.pengajuan-kegiatan.edit',$data);
   //  }

    // public function editAction($id_kegiatan, Request $request)
    // {
    //     // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
    //     $dokumentasi = PengajuanKegiatan::find($id_kegiatan);

    //     // Mengupdate $biodata tadi dengan isi dari form edit tadi
    //     $dokumentasi->id_dokumentasi = $request->input('id_dokumentasi');
    //     $dokumentasi->kegiatan_id = $request->input('kegiatan_id');
    //     $dokumentasi->lesson_learned = $request->input('lesson_learned');
    //     $dokumentasi->url_foto = $request->input('url_foto');
    //     $dokumentasi->save();

    //     // Notifikasi sukses
    //     Session::put('alert-success', 'Dokumentasi berhasil diedit');

    //     // Kembali ke halaman mahasiswa/biodata
    //     return Redirect::to('karyawan/pengelolaan-kegiatan/rundown');
    // }

}
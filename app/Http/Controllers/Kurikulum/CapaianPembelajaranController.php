<?php 

namespace App\Http\Controllers\Kurikulum;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\CapaianPembelajaran;


class CapaianPembelajaranController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'capaian-pembelajaran',
            // Memanggil semua isi dari tabel biodata
            'capaianpembelajaran' => CapaianPembelajaran::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('Kurikulum.capaian-pembelajaran.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'capaian-pembelajaran',
        ];

        // Memanggil tampilan form create
    	return view('Kurikulum.capaian-pembelajaran.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        CapaianPembelajaran::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('kurikulum/capaian-pembelajaran');
    }

    public function delete($id_cp)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $db_cp_pembelajaran = CapaianPembelajaran::find($id_cp);

        // Menghapus biodata yang dicari tadi
        $db_cp_pembelajaran->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id_cp)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'capaian-pembelajaran',
            // Mencari biodata berdasarkan id
            'cp_pembelajaran' => CapaianPembelajaran::find($id_cp)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('Kurikulum.capaian-pembelajaran.edit',$data);
    }

    public function editAction($id_cp, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $db_cp_pembelajaran = CapaianPembelajaran::find($id_cp);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $db_cp_pembelajaran->id_prodi = $request->input('id_prodi');
        $db_cp_pembelajaran->id_kategori_cp = $request->input('id_kategori_cp');
        $db_cp_pembelajaran->kode_cp = $request->input('kode_cp');
        $db_cp_pembelajaran->deskripsi_cp = $request->input('deskripsi_cp');
        $db_cp_pembelajaran->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Biodata berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('kurikulum/capaian-pembelajaran');
    }

}
<?php 

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Prestasi;


class PrestasiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'prestasi',
            // Memanggil semua isi dari tabel biodata
            'prestasi' => Prestasi::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.prestasi.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'prestasi',
        ];

        // Memanggil tampilan form create
    	return view('mahasiswa.prestasi.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Prestasi::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Data Prestasi berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/prestasi');
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $prestasi = Prestasi::find($id);

        // Menghapus biodata yang dicari tadi
        $prestasi->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Data Prestasi berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'prestasi',
            // Mencari biodata berdasarkan id
            'prestasi' => Prestasi::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('mahasiswa.prestasi.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $prestasi = Prestasi::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $prestasi->prestasi = $request->input('prestasi');
        $prestasi->tahun_kegiatan = $request->input('tahun_kegiatan');
        $prestasi->jenis_kegiatan = $request->input('jenis_kegiatan');
        $prestasi->kelompok_kegiatan = $request->input('kelompok_kegiatan');
        $prestasi->penyelenggara = $request->input('penyelenggara');
        $prestasi->tingkat = $request->input('tingkat');
        $prestasi->file_prestasi = $request->input('file_prestasi');
        $prestasi->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Data prestasi berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/prestasi');
    }

}
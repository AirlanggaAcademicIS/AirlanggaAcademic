<?php 

namespace App\Http\Controllers\Dosen\notulensi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\KaryawanRapat;


class KaryawanRapatController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'KaryawanRapat',
            // Memanggil semua isi dari tabel biodata
            'karyawanrapat' => KaryawanRapat::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.notulensi.undangan.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'KaryawanRapat',
        ];

        // Memanggil tampilan form create
    	return view('karyawan.notulensi.undangan.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        KaryawanRapat::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Karyawan Rapat berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/notulensi/undangan');
    }

    public function delete($nip)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $karyawanrapat = KaryawanRapat::find($nip);

        // Menghapus biodata yang dicari tadi
        $karyawanrapat->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Karyawan Rapat berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($nip)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'DosenRapat',
            // Mencari biodata berdasarkan id
            'karyawanrapat' => KaryawanRapat::find($nip)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.notulensi.undangan.edit',$data);
    }

    public function editAction($nip, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $karyawanrapat = KaryawanRapat::find($nip);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $karyawanrapat->nip = $request->input('nip');
        $karyawanrapat->notulen_id = $request->input('notulen_id');
        $karyawanrapat->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Karyawan Rapat berhasil diedit');

        // Kembali ke halaman notulensi/dosenrapat
        return Redirect::to('karyawan/notulensi/undangan');
    }

}
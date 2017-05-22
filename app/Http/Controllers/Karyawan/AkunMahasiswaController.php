<?php 

namespace App\Http\Controllers\Karyawan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\AkunMahasiswa;
use App\AkunBioMHS;
use App\AkunUser;


class AkunMahasiswaController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'akunmahasiswa',
            // Memanggil semua isi dari tabel biodata
            'akunmahasiswa' => AkunMahasiswa::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.akun.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'akun',
        ];

        // Memanggil tampilan form create
    	return view('karyawan.akun.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        $akun = AkunMahasiswa::create($request->input()); 
        $akun->nim = $request->input('nim');
        $akun->save();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Akun berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/akun
        return Redirect::to('karyawan/akun');
    }

    public function delete($nim)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $akunmahasiswa = AkunMahasiswa::find($nim);

        // Menghapus biodata yang dicari tadi
        $akunmahasiswa->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Akun berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($nim)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'akun',
            // Mencari biodata berdasarkan id
            'akunmahasiswa' => AkunMahasiswa::find($nim)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.akun.edit',$data);
    }

    public function editAction($nim, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $akunmahasiswa = AkunMahasiswa::find($nim);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $akunmahasiswa->nim = $request->input('nim');
        $akunmahasiswa->nlp_id = $request->input('nlp_id');
        $akunmahasiswa->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Akun berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/akun');
    }

}
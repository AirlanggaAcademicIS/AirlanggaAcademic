<?php 

namespace App\Http\Controllers\Karyawan\Pla;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Karyawan;


class karyawan_controller extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'karyawan',
            // Memanggil semua isi dari tabel biodata
            'karyawan' => Karyawan::all(),
        ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.PLA.karyawan.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'karyawan',
        ];

        // Memanggil tampilan form create
    	return view('karyawan.PLA.karyawan.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Karyawan::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Karyawan berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/PLA/karyawan');
    }

    public function delete($nip_petugas)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $karyawan = Karyawan::find($nip_petugas);

        // Menghapus biodata yang dicari tadi
        $karyawan->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Karyawan berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($nip_petugas)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'karyawan',
            // Mencari biodata berdasarkan id
            'karyawan' => Karyawan::find($nip_petugas)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.PLA.karyawan.edit',$data);
    }

    public function editAction($nip_petugas, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $karyawan = Karyawan::find($nip_petugas);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $karyawan->nip_petugas = $request->input('nip_petugas');
        $karyawan->nama_petugas = $request->input('nama_petugas');
        $karyawan->no_telp_petugas = $request->input('no_telp_petugas');
        $karyawan->email_petugas = $request->input('email_petugas');
        $karyawan->prodi = $request->input('prodi');
        $karyawan->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Karyawan berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/PLA/karyawan');
    }

}
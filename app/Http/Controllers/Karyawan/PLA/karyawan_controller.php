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
use App\Petugas_TU;
use App\Prodi;
use App\User;

class karyawan_controller extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'akun-karyawan',
            // Memanggil semua isi dari tabel biodata
            'karyawan' => Petugas_TU::all(),
            'prodi' => Prodi::all()
        ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.pla.karyawan.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'karyawan',
            'karyawan' => Petugas_TU::all(),
            'prodi' => Prodi::all()
        ];

        // Memanggil tampilan form create
    	return view('karyawan.pla.karyawan.create',$data);
    }

    public function createAction(Request $request)
    {
        $terdaftar = Petugas_TU::pluck('nip_petugas')->toArray();
        $nip = $request->input('nip_petugas');
        if(in_array($nip, $terdaftar)){
        Session::put('alert-danger', 'NIP telah terdaftar');
        return Redirect::back();
        }
        
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Petugas_TU::create($request->input());
        User::create([
            'username' => $request->input('nip_petugas'),
            'name' => $request->input('nama_petugas'),
            'role' => 'karyawan',
            'email' => $request->input('email_petugas'),
            'password' => '$2y$10$zabtKldYAuIH/KbIbYofuON3U/jlvBXIEFY/w.ItHp0WdfvfFteda'
            ]);
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Karyawan berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/pla/karyawan');
    }

    public function delete($nip_petugas)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $petugas_tu = Petugas_TU::find($nip_petugas);

        // Menghapus biodata yang dicari tadi
        $petugas_tu->delete();

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
            'karyawan' => Petugas_TU::all(),
            'prodi' => Prodi::all(),
            // Mencari biodata berdasarkan id
            'karyawan' => Petugas_TU::find($nip_petugas),
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.pla.karyawan.edit',$data);
    }

    public function editAction($nip_petugas, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $petugas_tu = Petugas_TU::find($nip_petugas);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $petugas_tu->nip_petugas = $request->input('nip_petugas');
        $petugas_tu->nama_petugas = $request->input('nama_petugas');
        $petugas_tu->no_telp_petugas = $request->input('no_telp_petugas');
        $petugas_tu->email_petugas = $request->input('email_petugas');
        $petugas_tu->prodi_id = $request->input('prodi_id');
        $petugas_tu->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Karyawan berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/pla/karyawan');
    }

}
<?php 

namespace App\Http\Controllers\Pla;

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


class Petugas_TU_Controller extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'petugas_tu',
            // Memanggil semua isi dari tabel biodata
            'petugas_tu' => Petugas_TU::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('pla.petugas_tu.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'petugas_tu',
        ];

        // Memanggil tampilan form create
    	return view('pla.petugas_tu.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Petugas_TU::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Petugas TU berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('pla/petugas_tu');
    }

    public function delete($id_tu)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $petugas_tu = Petugas_TU::find($id_tu);

        // Menghapus biodata yang dicari tadi
        $petugas_tu->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Petugas berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id_tu)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'petugas_tu',
            // Mencari biodata berdasarkan id
            'petugas_tu' => Petugas_TU::find($id_tu)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('pla.petugas_tu.edit',$data);
    }

    public function editAction($id_tu, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $petugas_tu = Petugas_TU::find($id_tu);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $petugas_tu->nip_petugas = $request->input('nip_petugas');
        $petugas_tu->nama_petugas = $request->input('nama_petugas');
        $petugas_tu->no_telp_petugas = $request->input('no_telp_petugas');
        $petugas_tu->email_petugas = $request->input('email_petugas');
        $petugas_tu->password = $request->input('password');
        $petugas_tu->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Biodata berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('pla/petugas_tu');
    }

}
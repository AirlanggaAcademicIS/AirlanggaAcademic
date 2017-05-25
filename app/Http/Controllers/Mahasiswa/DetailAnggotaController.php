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
use App\DetailAnggota;
use App\PenelitianMhs;


class DetailAnggotaController extends Controller
{

    // Function untuk menampilkan tabel
    public function index($kode_penelitian)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar detail_anggota
            'page' => 'detail_anggota',
            // Memanggil semua isi dari tabel detail_anggota
            'detail_anggota' => ['kode_penelitian_id' => DetailAnggota::findOrFail($kode_penelitian)]

        ];
      

        // Memanggil tampilan index di folder mahasiswa/detail_anggota dan juga menambahkan $data tadi di view
        return view('mahasiswa.penelitian.detail_anggota.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar detail_anggota
            'page' => 'detail_anggota',
        ];

        // Memanggil tampilan form create
    	return view('mahasiswa.detail_anggota.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel detail_anggota
        DetailAnggota::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'detail_anggota berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/detail_anggota
        return Redirect::to('mahasiswa/detailanggota');
    }

    public function delete($id_anggota)
    {
        // Mencari detail_anggota berdasarkan id dan memasukkannya ke dalam variabel $detail_anggota
        $detail_anggota = DetailAnggota::find($id_anggota);

        // Menghapus detail_anggota yang dicari tadi
        $detail_anggota->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'detail_anggota berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar detail_anggota
            'page' => 'detail_anggota',
            // Mencari detail_anggota berdasarkan id
            'detail_anggota' => DetailAnggota::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('mahasiswa.detail_anggota.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari detail_anggota yang akan di update dan menaruhnya di variabel $detail_anggota
        $detail_anggota = DetailAnggota::find($id);

        // Mengupdate $detail_anggota tadi dengan isi dari form edit tadi
        $detail_anggota->anggota = $request->input('anggota');      
        $detail_anggota->save();

        // Notifikasi sukses
        Session::put('alert-success', 'detail_anggota berhasil diedit');

        // Kembali ke halaman mahasiswa/detail_anggota
        return Redirect::to('mahasiswa/detailanggota');
    }

}
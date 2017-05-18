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
use App\Surat_Keluar_Mhs;
use Auth;


class Surat_Keluar_MhsController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'surat-keluar-mhs',
            // Memanggil semua isi dari tabel biodata
            'surat_keluar_mhs' => Surat_Keluar_Mhs::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.surat-keluar-mhs.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'surat-keluar-mhs',
        ];

        // Memanggil tampilan form create
        return view('karyawan/surat-keluar-mhs.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Surat_Keluar_Mhs::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Surat berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/surat-keluar-mhs');
    }

    public function delete($id_surat_keluar)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $surat_keluar_mhs = Surat_Keluar_Mhs::find($id_surat_keluar);

        // Menghapus biodata yang dicari tadi
        $surat_keluar_mhs->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Surat berhasil dihapus');

    // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($id_surat_keluar)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'surat-keluar-mhs',
            // Mencari biodata berdasarkan id
            'surat_keluar_mhs' => Surat_Keluar_Mhs::find($id_surat_keluar)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan/surat-keluar-mhs.edit',$data);
    }

    public function editAction($id_surat_keluar_mhs, Request $request)
    {

        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $surat_keluar_mhs = Surat_Keluar_Mhs::find($id_surat_keluar_mhs);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        
        $surat_keluar_mhs->nip_petugas_id = Auth::user()->username;
        $surat_keluar_mhs->nama_lembaga = $request->input('nama_lembaga');
        $surat_keluar_mhs->nama = $request->input('nama');
        $surat_keluar_mhs->alamat = $request->input('alamat');
        $surat_keluar_mhs->tgl_upload = $request->input('tgl_upload');
        $surat_keluar_mhs->status = $request->input('status');
        $surat_keluar_mhs->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Surat berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/surat-keluar-mhs');
    }

}
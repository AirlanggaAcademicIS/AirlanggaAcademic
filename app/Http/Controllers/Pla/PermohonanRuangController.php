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
use App\PermohonanRuang;


class PermohonanRuangController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'PermohonanRuang',
            // Memanggil semua isi dari tabel biodata
            'PermohonanRuang' => PermohonanRuang::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('pla.PermohonanRuang.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'PermohonanRuang',
        ];

        // Memanggil tampilan form create
    	return view('pla.PermohonanRuang.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        PermohonanRuang::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Permohonan berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('pla/PermohonanRuang');
    }

    public function delete($id_permohonan_ruang)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $PermohonanRuang = PermohonanRuang::find($id_permohonan_ruang);

        // Menghapus biodata yang dicari tadi
        $PermohonanRuang->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Biodata berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id_permohonan_ruang)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'PermohonanRuang',
            // Mencari biodata berdasarkan id
            'PermohonanRuang' => PermohonanRuang::find($id_permohonan_ruang)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('pla.PermohonanRuang.edit',$data);
    }

    public function editAction($id_permohonan_ruang, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $permohonan_ruang = PermohonanRuang::find($id_permohonan_ruang);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $permohonan_ruang->nip_petugas = $request->input('nip_petugas');
        $permohonan_ruang->nama = $request->input('nama');
        $permohonan_ruang->atribut_verifikasi = $request->input('atribut_verifikasi');
        $permohonan_ruang->nim_nip = $request->input('nim_nip');
        $permohonan_ruang->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Biodata berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('pla/PermohonanRuang');
    }

}
<?php 

namespace App\Http\Controllers\Dosen;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\PengmasDosen;


class PengmasController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'pengmas',
            // Memanggil semua isi dari tabel biodata
            'pengmas' => PengmasDosen::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.pengmas.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'pengmas',
        ];

        // Memanggil tampilan form create
        return view('dosen.pengmas.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        $request['status_pengmas']=0;
        $request['file_pengmas']="tidak ada";
        PengmasDosen::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Pengmas berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/pengmas');
    }

    public function delete($kegiatan_id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $pengmas = PengmasDosen::find($kegiatan_id);

        // Menghapus biodata yang dicari tadi
        $pengmas->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'pengmas berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($kegiatan_id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'pengmas',
            // Mencari biodata berdasarkan id
            'pengmas' => PengmasDosen::find($kegiatan_id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.pengmas.edit',$data);    
    }

    public function editAction($kegiatan_id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $pengmas = PengmasDosen::find($kegiatan_id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $pengmas_dosen->nama_kegiatan = $request->input('nama_kegiatan');
        $pengmas_dosen->tempat_kegiatan = $request->input('tempat_kegiatan');
        $pengmas_dosen->tanggal_kegiatan = $request->input('tanggal_kegiatan');
        $pengmas_dosen->status_pengmas = $request->input('status_pengmas');
        $pengmas_dosen->save();

        // Notifikasi sukses
        Session::put('alert-success', 'dosen berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/pengmas');
    }

}
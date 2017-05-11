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
use App\JurnalDosen;


class JurnalController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'jurnal',
            // Memanggil semua isi dari tabel biodata
            'jurnal' => JurnalDosen::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.jurnal.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'jurnal',
        ];

        // Memanggil tampilan form create
        return view('dosen.jurnal.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        JurnalDosen::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Jurnal berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/jurnal');
    }

    public function delete($jurnal_id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $jurnal = JurnalDosen::find($jurnal_id);

        // Menghapus biodata yang dicari tadi
        $jurnal->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Jurnal berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($jurnal_id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'jurnal',
            // Mencari biodata berdasarkan id
            'jurnal' => JurnalDosen::find($jurnal_id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.jurnal.edit',$data);
    }

    public function editAction($jurnal_id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $jurnal = JurnalDosen::find($jurnal_id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $jurnal->nama_jurnal = $request->input('nama_jurnal');
        $jurnal->halaman_jurnal = $request->input('halaman_jurnal');
        $jurnal->bidang_jurnal = $request->input('bidang_jurnal');
        $jurnal->tanggal_jurnal = $request->input('tanggal_jurnal');
        $jurnal->status_jurnal = $request->input('status_jurnal');
        $jurnal->volume_jurnal = $request->input('volume_jurnal');
        $jurnal->penulis_ke = $request->input('penulis_ke');
        $jurnal->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Jurnal berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/jurnal');
    }

}
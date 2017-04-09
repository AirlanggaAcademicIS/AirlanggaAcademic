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
use App\PenelitianDosen;


class PenelitianController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'penelitian',
            // Memanggil semua isi dari tabel biodata
            'penelitian' => PenelitianDosen::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.penelitian.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'biodata',
        ];

        // Memanggil tampilan form create
        return view('mahasiswa.biodata.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Biodata::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Biodata berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/biodata');
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $biodata = Biodata::find($id);

        // Menghapus biodata yang dicari tadi
        $biodata->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Biodata berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'biodata',
            // Mencari biodata berdasarkan id
            'biodata' => Biodata::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('mahasiswa.biodata.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $biodata = Biodata::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $biodata->nim = $request->input('nim');
        $biodata->nama = $request->input('nama');
        $biodata->alamat = $request->input('alamat');
        $biodata->provinsi = $request->input('provinsi');
        $biodata->tanggal_masuk = $request->input('tanggal_masuk');
        $biodata->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Biodata berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/biodata');
    }

}
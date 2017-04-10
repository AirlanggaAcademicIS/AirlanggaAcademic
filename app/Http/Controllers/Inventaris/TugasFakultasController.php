<?php 

namespace App\Http\Controllers\Inventaris;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Fakultas;


class TugasFakultasController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $fakultas = Fakultas::all();
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'fakultas',
            // Memanggil semua isi dari tabel biodata
            'fakultas' => $fakultas
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('inventaris.tugasfakultas',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'inventaris',
        ];

        // Memanggil tampilan form create
        return view('inventaris.tugascreate',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Fakultas::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Fakultas berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('inventaris/tugas-fakultas');
    }

    public function delete($id_fakultas)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $fakultas = Fakultas::find($id_fakultas);

        // Menghapus biodata yang dicari tadi
        $fakultas->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Fakultas berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'fakultas',
            // Mencari biodata berdasarkan id
            'fakultas' => Fakultas::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('inventaris.tugasedit',$data);
    }

    public function editAction($id_fakultas, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $fakultas = Fakultas::find($id_fakultas);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $fakultas->id_fakultas = $request->input('id_fakultas');
        $fakultas->id_universitas = $request->input('id_universitas');
        $fakultas->kode_fakultas = $request->input('kode_fakultas');
        $fakultas->nama_fakultas = $request->input('nama_fakultas');
        $fakultas->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Fakultas berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('inventaris/tugas-fakultas');
    }

}
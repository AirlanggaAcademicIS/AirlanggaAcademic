<?php 

namespace App\Http\Controllers\Dosen\notulensi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\UndanganDosen;


class UndanganDosenController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'undangan',
            // Memanggil semua isi dari tabel biodata
            'undangan' => UndanganDosen::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.notulensi.undangan.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'undangan',
        ];

        // Memanggil tampilan form create
    	return view('dosen.notulensi.undangan.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        DosenRapat::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Dosen Rapat berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/notulensi/undangan');
    }

    public function delete($nip)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $dosenrapat = DosenRapat::find($nip);

        // Menghapus biodata yang dicari tadi
        $dosenrapat->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Dosen Rapat berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($nip)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'UndanganDosen',
            // Mencari biodata berdasarkan id
            'undangandosen' => DosenRapat::find($nip)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.notulensi.undangan.edit',$data);
    }

    public function editAction($nip, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $dosenrapat = DosenRapat::find($nip);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $dosenrapat->nip = $request->input('nip');
        $dosenrapat->notulen_id = $request->input('notulen_id');
        $dosenrapat->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Dosen Rapat berhasil diedit');

        // Kembali ke halaman notulensi/dosenrapat
        return Redirect::to('dosen/notulensi/undangan');
    }

}
<?php 

namespace App\Http\Controllers\KrsKhs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Models\KrsKhs\TahunAkademik;


class TahunAkademikController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar TahunAkademik
            'page' => 'TahunAkademik',
            // Memanggil semua isi dari tabel TahunAkademik
            'tahun' => TahunAkademik::all()
        ];

        // Memanggil tampilan index di folder krs-khs/TahunAkademik dan juga menambahkan $data tadi di view
        return view('krs-khs.TahunAkademik.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar TahunAkademik
            'page' => 'TahunAkademik',
        ];

        // Memanggil tampilan form create
    	return view('krs-khs.TahunAkademik.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel TahunAkademik
        TahunAkademik::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Tahun Akademik berhasil ditambahkan');

        // Kembali ke halaman krs-khs/TahunAkademik
        return Redirect::to('krs-khs/TahunAkademik/');
    }

    public function delete($id_tahun)
    {
        // Mencari TahunAkademik berdasarkan id dan memasukkannya ke dalam variabel $TahunAkademik
        $tahun = TahunAkademik::find($id_tahun);

        // Menghapus TahunAkademik yang dicari tadi
        $tahun->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Tahun Akademik berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id_tahun)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar TahunAkademik
            'page' => 'TahunAkademik',
            // Mencari TahunAkademik berdasarkan id
            'tahun' => TahunAkademik::find($id_tahun)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('krs-khs.TahunAkademik.edit',$data);
    }

    public function editAction($id_tahun, Request $request)
    {
        // Mencari TahunAkademik yang akan di update dan menaruhnya di variabel $TahunAkademik
        $tahun = TahunAkademik::find($id_tahun);

        // Mengupdate $TahunAkademik tadi dengan isi dari form edit tadi
        $tahun->semester_periode = $request->input('semester_periode');
        $tahun->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Tahun Akademik berhasil diedit');

        // Kembali ke halaman krs-khs/TahunAkademik/view
        return Redirect::to('krs-khs/TahunAkademik/');
    }

}
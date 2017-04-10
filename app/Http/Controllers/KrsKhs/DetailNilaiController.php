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
use App\Models\KrsKhs\DetailNilai;


class DetailNilaiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar Khs
            'page' => 'detail_nilai',
            // Memanggil semua isi dari tabel detail_nilai
            'detail_nilai' => DetailNilai::all()
        ];

        // Memanggil tampilan index di folder krs-khs/Khs dan juga menambahkan $data tadi di view
        return view('krs-khs.khs.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar Khs
            'page' => 'detail_nilai',
        ];

        // Memanggil tampilan form create
    	return view('krs-khs.Khs.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel detail_nilai
        DetailNilai::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Detail Nilai berhasil ditambahkan');

        // Kembali ke halaman krs-khs/Khs
        return Redirect::to('krs-khs/Khs/view');
    }

    public function delete($id)
    {
        // Mencari detail nilai berdasarkan id dan memasukkannya ke dalam variabel $detail_nilai
        $detail_nilai = DetailNilai::find($id);

        // Menghapus detail nilai yang dicari tadi
        $detail_nilai->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Detail Nilai berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'detail_nilai',
            // Mencari detail nilai berdasarkan id
            'detail_nilai' => DetailNilai::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('krs-khs.khs.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari detail nilai yang akan di update dan menaruhnya di variabel $detail_nilai
        $detail_nilai = DetailNilai::find($id);

        // Mengupdate $detail_nilai tadi dengan isi dari form edit tadi
        $detail_nilai->id_detail_nilai = $request->input('id_detail_nilai');
        $detail_nilai->detail_nilai = $request->input('detail_nilai');
        $detail_nilai->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Detail Nilai berhasil diedit');

        // Kembali ke halaman krs-khs/Khs/view
        return Redirect::to('krs-khs/khs/view');
    }

}
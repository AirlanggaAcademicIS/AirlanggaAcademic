<?php 

namespace App\Http\Controllers\Karyawan\notulensi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\DosenRapat;
use App\NotulensiKaryawan;


class daftarDosenRapatController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'dosen_rapat',
            // Memanggil semua isi dari tabel biodata
            'dosen_rapat' => DB::table('notulen_rapat') 
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'notulen_rapat.permohonan_ruang_id') 
            ->join('jadwal_permohonan', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang') 
            ->join('ruang', 'ruang.id_ruang', '=', 'jadwal_permohonan.ruang_id') 
            ->select('*') 
            ->get()
            //DB::table('dosen_rapat')->count(DB::raw('DISTINCT nip')
         
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.kehadiranRapat.daftarDosenRapat',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'dosenrapat',
        ];

        // Memanggil tampilan form create
    	return view('notulensi.dosenrapat.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        DosenRapat::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Dosen Rapat berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('notulensi/dosenrapat');
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $dosenrapat = DosenRapat::find($id);

        // Menghapus biodata yang dicari tadi
        $dosenrapat->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Dosen Rapat berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'DosenRapat',
            // Mencari biodata berdasarkan id
            'dosenrapat' => DosenRapat::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('notulensi.dosenrapat.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $dosenrapat = DosenRapat::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $dosenrapat->nip = $request->input('nip');
        $dosenrapat->id_notulen = $request->input('id_notulen');
        $dosenrapat->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Dosen Rapat berhasil diedit');

        // Kembali ke halaman notulensi/dosenrapat
        return Redirect::to('notulensi/dosenrapat');
    }

}
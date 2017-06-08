<?php 

namespace App\Http\Controllers\Karyawan\Kurikulum;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Prodi;
use App\MataKuliah;
use App\MkProdi;
use DB;

class MkProdiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $mk_prodi = DB::table('mk_prodi')->join('mata_kuliah', 'mata_kuliah.id_mk', '=', 'mk_prodi.mk_id')->get();
        $mk_terpilih = array();
        foreach ($mk_prodi as $mk) {
            array_push($mk_terpilih, $mk->id_mk);
        }
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar rps
            'page' => 'mkprodi',
            // Memanggil semua isi dari tabel
            'prodi' => Prodi::all(),
            'mata_kuliah' => DB::table('mata_kuliah')->get(),
            'mkprodi' => DB::table('mk_prodi')->join('mata_kuliah', 'mata_kuliah.id_mk', '=', 'mk_prodi.mk_id')->get(),
            'mk_terpilih' => $mk_terpilih 
        ];
        // Memanggil tampilan index
        return view('karyawan.kurikulum.mk-prodi.index',$data);
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        // $mkprodi = MkProdi::where('mk_id', '=', $id)->first()->delete();

        // Menghapus biodata yang dicari tadi
        // $mkprodi->delete();
        // dd($mkprodi);

        DB::table('mk_prodi')->where('mk_id', '=', $id)->delete();        

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Mata Kuliah Prodi berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

    public function pilihAction($id, Request $request)
    {
        DB::table('mk_prodi')->insert(
            ['prodi_id' => 2, 'mk_id' => $id]
        );        
        // Notifikasi sukses
        Session::put('alert-success', 'Kategori berhasil diedit');

        return Redirect::to('karyawan/kurikulum/mk-prodi');
    }    

}
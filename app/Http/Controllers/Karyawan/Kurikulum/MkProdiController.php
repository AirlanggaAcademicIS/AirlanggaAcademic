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

class MkProdiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar rps
            'page' => 'rps',
            // Memanggil semua isi dari tabel
            'prodi' => Prodi::all(),
            'mata_kuliah' => MataKuliah::all()
        ];

        // Memanggil tampilan index
        return view('karyawan.kurikulum.mk-prodi.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rps',
            'mata_kuliah' => RPS_Matkul::all()
            
        ];

        // Memanggil tampilan form create
        return view('karyawan.kurikulum.mk-prodi.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        RPS_Matkul::create($request->input());

        // Menampilkan notifikasi pesa8n sukses
        Session::put('alert-success', 'RPS berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/kurikulum/rps');
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $rps = RPS_Matkul::find($id);

        // Menghapus biodata yang dicari tadi
        $rps->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'RPS berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rps',
            // Mencari biodata berdasarkan id
            'mata_kuliah' => RPS_Matkul::find($id),
            'mk_prasyarat' => RPS_Matkul_Prasyarat::where('mk_id', '=', $id)->get(),
            'cp_mata_kuliah' => RPS_CP_Matkul::where('matakuliah_id', '=', $id)->get(),
            'cp_prodi' => RPS_CPL_Prodi::where('mk_id', '=', $id)->get(),
            'koor' => RPS_Koor_Matkul::where('mk_id', '=', $id)->get()
            
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.kurikulum.rps.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        $mk = RPS_Matkul::find($id);
        $mk->kategori_media_pembelajaran = $request->input('kategori_media_pembelajaran');
        $mk->media_pembelajaran = $request->input('media_pembelajaran');
        $mk->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Kategori berhasil diedit');

        return Redirect::to('dosen/kurikulum/index');
    }

    public function pilihAction($id, Request $request)
    {
        $mkProdi = new MkProdi;
        $mkProdi->prodi_id = 2;
        $mkProdi->mk_id = $id
        $mkProdi->save();

        // // Notifikasi sukses
        // Session::put('alert-success', 'Kategori berhasil diedit');

        // return Redirect::to('karyawan/kurikulum/mk-prodi');
    }    



}
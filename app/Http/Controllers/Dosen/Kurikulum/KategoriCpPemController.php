<?php 

namespace App\Http\Controllers\Dosen\Kurikulum;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\KategoriCapaianPembelajaran;


class KategoriCpPemController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'kategori',
            // Memanggil semua isi dari tabel biodata
            'kode_cppem' => KategoriCapaianPembelajaran::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.kurikulum.kodecppem.index',$data);
    }

    public function createAction(Request $request)
    {
        $isSame = false;
        $input_kategori = $request->input('nama_cpem');
        $isSameKategori = KategoriCapaianPembelajaran::where('nama_cpem', '=', $input_kategori)->get()->count();
        if ($isSameKategori == 0) 
        {
            KategoriCapaianPembelajaran::create($request->input());
            
            Session::put('alert-success', 'Kategori berhasil ditambahkan');

            return Redirect::to('dosen/kurikulum/kodecppem');
        }
        else
        {
            Session::put('alert-danger', 'Kategori sudah diinputkan');

            return Redirect::to('dosen/kurikulum/kodecppem');   
        }
        
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $kode = KategoriCapaianPembelajaran::find($id);

        // Menghapus biodata yang dicari tadi
        $kode -> delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-danger', 'Kategori berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();
    }

    public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'kode',
            // Mencari biodata berdasarkan id
            'kode_cppem' => KategoriCapaianPembelajaran::all(),
            'single_kode' => KategoriCapaianPembelajaran::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        // dd($data['kode_cpmatkul']);
        return view('dosen.kurikulum.kodecppem.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        $isSame = false;
        $input_kategori = $request->input('nama_cpem');
        $isSameKategori = KategoriCapaianPembelajaran::where('nama_cpem', '=', $input_kategori)->get()->count();
        $getFromId = KategoriCapaianPembelajaran::find($id);
        if ($isSameKategori == 0)
        {
            $kode = KategoriCapaianPembelajaran::find($id);

            $kode->nama_cpem = $request->input('nama_cpem');

            $kode->save();

            Session::put('alert-success', 'Kategori berhasil diedit');

            return Redirect::to('dosen/kurikulum/kodecppem');
        }
        elseif (
        $getFromId->nama_cpem == $request->input('nama_cpem')
            ) {
            Session::put('alert-warning', 'Tidak ada perubahan');
        }
        else
        {
            Session::put('alert-danger', 'Kategori sudah diinputkan');
        }
            return Redirect::to('dosen/kurikulum/kodecppem');   
        
    }
}
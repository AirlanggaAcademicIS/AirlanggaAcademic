<?php 

namespace App\Http\Controllers\Karyawan\PLA;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\PermohonanRuang;


class PermohonanRuangController extends Controller
{

    // Function untuk menampilkan tabel
    public function index() 
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'PermohonanRuang',
            // Memanggil semua isi dari tabel biodata
            'PermohonanRuang' => PermohonanRuang::all()->where('atribut_verifikasi', '>', 0)

            //where atribute_verifikasi = '1 atau 2 (selain 0)'
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('Karyawan.pla.PermohonanRuang.History.index',$data);
    }

    public function index2() 
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'PermohonanRuang',
            // Memanggil semua isi dari tabel biodata
            'PermohonanRuang' => PermohonanRuang::all()->where('atribut_verifikasi', '=', 0)
            //where atribute_verifikasi = '0'
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('Karyawan.pla.PermohonanRuang.Konfirmasi.index',$data);
    }


    public function accept($id_permohonan_ruang)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $PermohonanRuang = PermohonanRuang::find($id_permohonan_ruang);

        // Menghapus yang dicari tadi
        $PermohonanRuang->atribut_verifikasi = '1';        
        $PermohonanRuang->save();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'permohonan diterima');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

public function decline($id_permohonan_ruang)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $PermohonanRuang = PermohonanRuang::find($id_permohonan_ruang);

        // Menghapus yang dicari tadi
        $PermohonanRuang->atribut_verifikasi = '2';        
        $PermohonanRuang->save();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'permohonan ditolak');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }


}
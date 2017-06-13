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
use Illuminate\Support\Facades\DB;
// Tambahkan model yang ingin dipakai
use App\PermohonanRuang;
use Auth;


class PermohonanRuangController extends Controller
{

    // Function untuk menampilkan tabel
    public function index() 
  {
         $data = [
         'page' => 'history-ruang',
            // Memanggil semua isi dari tabel biodata
         'PermohonanRuang' => DB::table('jadwal_permohonan')
            ->join('permohonan_ruang', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang')
            ->join('ruang', 'jadwal_permohonan.ruang_id', '=', 'ruang.id_ruang')
            ->join('hari', 'jadwal_permohonan.hari_id', '=', 'hari.id_hari')
            ->join('jam', 'jadwal_permohonan.jam_id', '=', 'jam.id_jam')
            ->join('petugas_tu', 'permohonan_ruang.nip_petugas_id', '=', 'petugas_tu.nip_petugas')
            ->select('*')
            ->where('atribut_verifikasi', '>', 0)
            ->get(),
         
            //where atribute_verifikasi = '1 atau 2 (selain 0)'
         ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
      return view('Karyawan.pla.PermohonanRuang.History.index',$data);

     }
    
    public function index2() 
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konfirmasi-ruang',
            // Memanggil semua isi dari tabel biodata
            'PermohonanRuang' => DB::table('jadwal_permohonan')
            ->join('permohonan_ruang', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang')
            ->join('ruang', 'jadwal_permohonan.ruang_id', '=', 'ruang.id_ruang')
            ->join('hari', 'jadwal_permohonan.hari_id', '=', 'hari.id_hari')
            ->join('jam', 'jadwal_permohonan.jam_id', '=', 'jam.id_jam')
            ->select('*')
            ->where('atribut_verifikasi', '=', 0)
            ->get(),
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

        $PermohonanRuang->nip_petugas_id = Auth::user()->username; 
        $PermohonanRuang->atribut_verifikasi = '1';        
        $PermohonanRuang->save();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Permohonan diterima');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

public function decline($id_permohonan_ruang)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $PermohonanRuang = PermohonanRuang::find($id_permohonan_ruang);

        // Menghapus yang dicari tadi

        $PermohonanRuang->nip_petugas_id = Auth::user()->username;  
        $PermohonanRuang->atribut_verifikasi = '2';        
        $PermohonanRuang->save();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Permohonan ditolak');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }


}
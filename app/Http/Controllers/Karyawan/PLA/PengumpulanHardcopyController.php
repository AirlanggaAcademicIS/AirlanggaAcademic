<?php 

namespace App\Http\Controllers\Karyawan\Pla;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Skripsi;


class PengumpulanHardcopyController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'hardcopy',
            // Memanggil semua isi dari tabel biodata
            'Skripsi' => array()
        ];
//dd(Skripsi::all());
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.pla.pengumpulan_hardcopy.index',$data);
    }
public function index2(Request $id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'hardcopy',
            // Memanggil semua isi dari tabel biodata
            'Skripsi' => Skripsi::where('NIM_id', '=', $id->input('nim_key'))->get()
        ];
//dd(Skripsi::all());
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.pla.pengumpulan_hardcopy.index',$data);
    }
    

    public function Kumpul_Proposal($id)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $skripsi = Skripsi::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $skripsi->tanggal_pengumpulan_proposal = date('Y-m-d');
        $skripsi->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Tanggal Pengumpulan Proposal berhasil Tercatat');

        // Kembali ke halaman mahasiswa/biodata
         $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'hardcopy',
            // Memanggil semua isi dari tabel biodata
            'Skripsi' => Skripsi::where('id_skripsi', '=', $id)->get()
        ];
//dd(Skripsi::all());
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.pla.pengumpulan_hardcopy.index',$data);
    }



    public function Kumpul_Skripsi($id)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $skripsi = Skripsi::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $skripsi->tanggal_pengumpulan_skripsi = date('Y-m-d');
        $skripsi->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Tanggal Pengumpulan Skripsi berhasil Tercatat');

        // Kembali ke halaman mahasiswa/biodata
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'hardcopy',
            // Memanggil semua isi dari tabel biodata
            'Skripsi' => Skripsi::where('id_skripsi', '=', $id)->get()
        ];
//dd(Skripsi::all());
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.pla.pengumpulan_hardcopy.index',$data);
    }
}
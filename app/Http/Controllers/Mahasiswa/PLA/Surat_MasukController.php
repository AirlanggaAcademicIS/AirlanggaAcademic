<?php 

namespace App\Http\Controllers\Mahasiswa\PLA;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Surat_Masuk;
use App\Petugas_Tu;
use Auth;

class Surat_MasukController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar surat masuk
            'page' => 'surat-masuk',
            // Memanggil semua isi dari tabel surat masuk
            'surat_masuk' => Surat_Masuk::where('nim_nip',Auth::user()->username)->get()
        ];

        // Memanggil tampilan index di folder surat masuk
        return view('mahasiswa.pla.surat-masuk.index',$data);
    }

    

}
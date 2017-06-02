<?php 

namespace App\Http\Controllers\Dosen\KrsKhs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;

use Auth;
// Tambahkan model yang ingin dipakai

use App\Models\KrsKhs\MKDiajar;

//use App\MKDitawarkan;
//use App\Dosen;



class MKDiajarController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    // Function untuk menampilkan tabel
    public function index()
    {
        $dosen_id  = Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'mk_diajar',
            // Memanggil semua isi dari tabel biodata
            'mk_diajar' => MKDiajar::where('dosen_id', '=', $dosen_id)->get()
            // 'selectedRole' = Tahun::first()->role_id;
        ];
      
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.krs-khs.mk_diajar.index',$data);
    }

    
}
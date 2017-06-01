<?php 
namespace App\Http\Controllers\mahasiswa\kurikulum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\elearning;
use App\MKDitawarkan;
use App\MataKuliah;
use Auth;

class elearningMahasiswaController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'Elearning',
            // Memanggil semua isi dari tabel biodata
            'elearning' => elearning::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.Kurikulum.elearning.index',$data);
    }

    public function download($nama_file)
    {
        $pathToFile=public_path('file/'.$nama_file);
        return response()->download($pathToFile);
    }

    }

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
use App\elearning;


class ElearningController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'elearning',
            // Memanggil semua isi dari tabel biodata
            'elearning' => elearning::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.kurikulum.elearning.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'elearning',
        ];

        // Memanggil tampilan form create
        return view('dosen.kurikulum.elearning.create',$data);
    }
}

   
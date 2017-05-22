<?php 

namespace App\Http\Controllers\Mahasiswa\inventaris;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Asset;


class AssetController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data=[
            // Buat di sidebar, biar ketika diklik yg aktif sidebar asset
        
            'page' => 'asset',
            // Memanggil semua isi dari tabel asset
            'asset' => Asset::all()
        ];
        return view('mahasiswa.inventaris.index',$data);

        }
}
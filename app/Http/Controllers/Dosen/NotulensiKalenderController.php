<?php 

namespace App\Http\Controllers\Dosen;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\NotulensiKalendar;


class NotulensiKalenderController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        $data = [
        'page' => 'kalender',
        ];
        return view('dosen.kalender.kalender',$data);
    }



}
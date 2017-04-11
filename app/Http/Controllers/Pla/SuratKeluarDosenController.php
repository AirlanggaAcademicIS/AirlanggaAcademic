<?php 

namespace App\Http\Controllers\Pla;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
use Illuminate\Support\Facades\DB;
use App\SuratKeluarDosen;

class SuratKeluarDosenController extends Controller
{

    public function index()
    {
        $data = [
            'page' => 'Surat Keluar Dosen',
            'letters' => SuratKeluarDosen::all()
        ];

        return view('pla.surat-keluar-dosen.index',$data);
    }

    public function create()
    {
        $data = [
            'page' => 'Surat Keluar Dosen',
            'letters' => SuratKeluarDosen::all()
        ];

        return view('pla.surat-keluar-dosen.create',$data);
    }
    
}
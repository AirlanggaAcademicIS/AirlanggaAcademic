<?<?php 

namespace App\Http\Controllers\Dosen;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\KrsMhs;
use Intervention\Image\ImageManagerStatic as Image;
use Session;
use Input;
use DB;
use Validator;
use Response;


class KrsMhs extends Controller
{

    public function index()
    {
        $data = [
            'page' => 'biodata',
            'krs_mhs' => KrsMhs::all()
        ];
        return view('mahasiswa.krs-mhs.index',$data);
    }

   

}
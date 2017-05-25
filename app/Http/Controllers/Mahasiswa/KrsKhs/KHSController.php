<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers\Mahasiswa\KrsKhs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
use App\Models\KrsKhs\KHS;
use App\Models\KrsKhs\MKDitawarkan;
use App\Models\KrsKhs\MK;
use PDF;    
// /**
//  * Class HomeController
//  * @package App\Http\Controllers
//  */
class KHSController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $data = [
        'page' => 'khs',
        'khs' => KHS::all()
        ];
        return view('mahasiswa.krs-khs.khs.index',$data);
    }

    public function toPdf()
    {
        $data = [
            // 'page' => 'mata-kuliah',
            // 'matkul' => MataKuliah::find($id),
            // 'jenis_matkul' =>JenisMataKuliah::all()
        ];

        $pdf = PDF::loadView('mahasiswa.krs-khs.khs.cetak');
        return $pdf->inline('dokumen.pdf');

    }

}
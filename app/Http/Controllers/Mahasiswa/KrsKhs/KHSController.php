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
use Auth;
use App\Models\KrsKhs\KHS;
use App\Models\KrsKhs\MKDitawarkan;
use App\Models\KrsKhs\MK;
use App\Models\KrsKhs\TahunAkademik;
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
        'khs' => KHS::where('mhs_id',Auth::user()->username)->get(),
        'tahun' => TahunAkademik::all()
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
        $tahun = TahunAkademik::all();
        $khs = KHS::all();
        $pdf = PDF::loadView('mahasiswa.krs-khs.khs.cetak', ['khs'=>$khs] , ['tahun'=>$tahun] );
        return $pdf->stream('dokumen.pdf');

    }

}
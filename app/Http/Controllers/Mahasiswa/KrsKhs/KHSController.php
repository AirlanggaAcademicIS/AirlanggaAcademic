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
use App\Models\KrsKhs\TahunAkademik;
use App\Models\KrsKhs\BiodataMahasiswa;
use Auth;
use DB;
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
          $nim_id  = Auth::user()->username;

                $sum     = DB::table('mk_diambil')
                ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_diambil.mk_ditawarkan_id')
                ->select('*')
                ->sum('sks');  
        $data = [
        'page' => 'khs',
        'biodata_mhs' => BiodataMahasiswa::all(),
        'khs' => KHS::all(),
        'tahun' => TahunAkademik::all(),
        'sum' => $sum,

        ];

        return view('mahasiswa.krs-khs.khs.index',$data);
    }

    public function toPdf()
    {
        $data = [
        'page' => 'khs',
        'khs' => BiodataMahasiswa::all(),
        'tahun' => TahunAkademik::all(),
        'khs' => KHS::all(),
        
            // 'matkul' => MataKuliah::find($id),
            // 'jenis_matkul' =>JenisMataKuliah::all()
        ];
        $pdf = PDF::loadView('mahasiswa.krs-khs.khs.cetak',$data);
        return $pdf->stream('dokumen.pdf');

    }
 


}
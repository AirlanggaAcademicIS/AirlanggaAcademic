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
use App\Models\KrsKhs\Histori;
use App\Models\KrsKhs\MKDitawarkan;
use App\Models\KrsKhs\MK;
use Auth;
use DB;
// /**
//  * Class HomeController
//  * @package App\Http\Controllers
//  */
class HistoriController extends Controller
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
        $data = [
        'page' => 'histori',
        'histori' => Histori::where('mhs_id',$nim_id)->get(),
        'mk' => MK::all(),
        ];
        return view('mahasiswa.krs-khs.histori.index',$data);
    }
}
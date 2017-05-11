<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers\Karyawan\KrsKhs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
use App\Models\KrsKhs\MK;
use App\Models\KrsKhs\MKDitawarkan;
use App\Models\KrsKhs\TahunAkademik;
// /**
//  * Class HomeController
//  * @package App\Http\Controllers
//  */
class MKDitawarkanController extends Controller
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
        'page' => 'mk',
        'mk' => MK::all()
        ];
        return view('karyawan.krs-khs.input_mk_ditawarkan',$data);
    }

    public function input(Request $request)
    {
        $data = $request->input('cek');
        return view('.inventarisasset.input');
    }

     public function create(Request $request)
    {
        MKDitawarkan::create($request->input('cek'));

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'MK Ditawarkan berhasil ditambahkan');

        // Kembali ke halaman krs-khs/ruang
        return Redirect::to('krs-khs/mk_ditawarkan');
    }
}
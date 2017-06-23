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
        $sum     = DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
            ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_ditawarkan.matakuliah_id')
            ->select('*')
            ->where('mhs_id',$nim_id)
            ->where('nilai','!=','k')
            //->where('thn_akademik_id', $tahun)
            ->sum('mata_kuliah.sks');
        $nilai1  = DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
            ->select('mk_diambil.nilai')
            ->where('mhs_id',$nim_id)
            ->where('nilai','!=','k')
            ->get(); 
        $nilai   = 0;
        $nilai_tmp = 0;
        foreach($nilai1 as $n){
            if ($n->nilai == "A")
                $nilai_tmp = $nilai_tmp + 4;                
            elseif ($n->nilai == "AB")
                $nilai_tmp = $nilai_tmp + 3.5;
            elseif ($n->nilai == "B")
                $nilai_tmp = $nilai_tmp + 3;
            elseif ($n->nilai == "BC")
                $nilai_tmp = $nilai_tmp + 2.5;
            elseif ($n->nilai == "C")
                $nilai_tmp = $nilai_tmp + 2;
            elseif ($n->nilai == "D")
                $nilai_tmp = $nilai_tmp + 1;
            elseif ($n->nilai == "E")
                $nilai_tmp = $nilai_tmp + 0;
            $nilai = $nilai_tmp;
            }
            $ipk = $nilai;
            if ($sum != 0) {
                $ipk = $nilai/$sum;
            }
        $data = [
        'page' => 'histori',
        'histori' => DB::table('mk_diambil')
                    ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','mk_diambil.mk_ditawarkan_id')
                    ->join('mata_kuliah','mk_ditawarkan.matakuliah_id','mata_kuliah.id_mk')
                    ->where('mhs_id',$nim_id)->get(),
        'mk' => MK::all(),
        'ipk' => $ipk,
        ];
        return view('mahasiswa.krs-khs.histori.index',$data);
    }
}
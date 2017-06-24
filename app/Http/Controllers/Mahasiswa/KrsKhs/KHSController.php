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
use DB;
use App\Models\KrsKhs\KHS;
use App\Models\KrsKhs\MKDitawarkan;
use App\Models\KrsKhs\MK;
use App\Models\KrsKhs\DetailNilai;
use App\Models\KrsKhs\TahunAkademik;
use App\Models\KrsKhs\BiodataMahasiswa;
use App\Models\KrsKhs\Dosen;
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

    public function show()
    {
        $thn = \Request::get('periode');
        $data = [
        'page' => 'khs',
        'khs' => DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
            ->join('mata_kuliah','mk_ditawarkan.matakuliah_id','=','mata_kuliah.id_mk')
            ->select('*')
            ->where('mhs_id',Auth::user()->username)
            ->where('mk_ditawarkan.thn_akademik_id',$thn)
            ->get(),
        'cek' => DB::table('mk_diambil')
            ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
            ->join('mata_kuliah','mk_ditawarkan.matakuliah_id','=','mata_kuliah.id_mk')
            ->select('*')
            ->where('mhs_id',Auth::user()->username)
            ->where('mk_ditawarkan.thn_akademik_id',$thn)
            ->first(),
        'tahun' => TahunAkademik::all(),
        'tahun_pilih' => TahunAkademik::where('id_thn_akademik',$thn)->first()
        ];
        return view('mahasiswa.krs-khs.khs.show',$data);
    }

    public function toPdf($id_tahun)
    {
        $nim_id = Auth::user()->username;
        $sum     = DB::table('mk_diambil')
                    ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','mk_diambil.mk_ditawarkan_id')
                ->join('mata_kuliah','mata_kuliah.id_mk','=','mk_ditawarkan.matakuliah_id')
                ->select('*')
                ->where('mk_diambil.mhs_id','=',$nim_id)
                ->sum('sks'); 

        
        $data = [
        'page' => 'khs',
        'khs' => DB::table('mk_diambil')
                    ->join('mk_ditawarkan','mk_diambil.mk_ditawarkan_id','mk_ditawarkan.id_mk_ditawarkan')
                    ->join('mata_kuliah','mk_ditawarkan.matakuliah_id','mata_kuliah.id_mk')
                    ->where('mhs_id',$nim_id)
                    ->where('mk_ditawarkan.thn_akademik_id',$id_tahun)->get(),
        'tahun' => TahunAkademik::where('id_thn_akademik',$id_tahun)->first(),
        'biodata_mhs' => BiodataMahasiswa::where('nim_id','=',$nim_id)->first(),
        'doswal' => DB::table('mahasiswa')
                    ->join('biodata_dosen','biodata_dosen.nip','mahasiswa.nip_id')
                    ->where('nim',$nim_id)->first(),
        'sum' => $sum,
        'histori' => DB::table('mk_diambil')
                    ->join('mk_ditawarkan','mk_diambil.mk_ditawarkan_id','mk_ditawarkan.id_mk_ditawarkan')
                    ->join('mata_kuliah','mk_ditawarkan.matakuliah_id','mata_kuliah.id_mk')
                    ->where('mhs_id',$nim_id)->get(),
        ];
        //dd($data['histori']);
        $pdf = PDF::loadView('mahasiswa.krs-khs.khs.cetak', $data);
        return $pdf->inline('KHS.pdf');

    }

    public function detail($mk_ditawarkan_id,$mhs_id){
        $data = [
        'page' => 'khs',
        'detail_uts' => DetailNilai::select('detail_nilai')
                                ->where('mk_ditawarkan_id', $mk_ditawarkan_id)
                                ->where('mhs_id',$mhs_id)
                                ->where('jenis_penilaian_id','1')->first(),
        'detail_uas' => DetailNilai::select('detail_nilai')
                                ->where('mk_ditawarkan_id', $mk_ditawarkan_id)
                                ->where('mhs_id',$mhs_id)
                                ->where('jenis_penilaian_id','2')->first(),
        'detail_softskill' => DetailNilai::select('detail_nilai')
                                ->where('mk_ditawarkan_id', $mk_ditawarkan_id)
                                ->where('mhs_id',$mhs_id)
                                ->where('jenis_penilaian_id','3')->first(),
        'detail_kuis' => DetailNilai::select('detail_nilai')
                                ->where('mk_ditawarkan_id', $mk_ditawarkan_id)
                                ->where('mhs_id',$mhs_id)
                                ->where('jenis_penilaian_id','4')->first(),
        'detail_tugas' => DetailNilai::select('detail_nilai')
                                ->where('mk_ditawarkan_id', $mk_ditawarkan_id)
                                ->where('mhs_id',$mhs_id)
                                ->where('jenis_penilaian_id','5')->first(),
        ];
    return view('mahasiswa.krs-khs.khs.detail_nilai',$data);
    }

}
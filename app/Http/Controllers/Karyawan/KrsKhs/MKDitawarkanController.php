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
use DB;
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
        'page' => 'mk_ditawarkan',
        'mk_ditawarkan' => MKDitawarkan::all(),
        'tahun'=>TahunAkademik::all()
        ];
        
        return view('karyawan.krs-khs.mk-ditawarkan.index',$data);
    }

    public function show(Request $request)
    {
        $thn = \Request::get('periode');
        $data = [
        'page' => 'mk_ditawarkan',
        'mk_ditawarkan' => MKDitawarkan::where('thn_akademik_id',$thn)->get(),
        'periode' => TahunAkademik::where('id_thn_akademik',$thn)->first(),
        'id_thn_akademik' => $thn,
        'tahun'=>TahunAkademik::all(),
        ];
        
        return view('karyawan.krs-khs.mk-ditawarkan.show',$data);
    }

    public function create()
    {
        $data = [
        'page' => 'mk_ditawarkan',
        'mk_ditawarkan' => MK::all()
        ];
        return view('karyawan.krs-khs.mk-ditawarkan.create',$data);
    }

    public function createAction(Request $request)
    {
        $tahun_awal = $request->input('tahun_awal');
        $tahun_akhir = $request->input('tahun_akhir');
        $periode = $request->input('periode');
        $input = $tahun_awal.'/'.$tahun_akhir.' '.$periode;
        $cek_thn=TahunAkademik::where('semester_periode',$input)->first();
        if($tahun_akhir-$tahun_awal!=1){
        Session::put('alert-danger', 'Tahun akademik harus urut');
        return Redirect::back();
        }
        
        if(empty($cek_thn)){
        $tahun = TahunAkademik::create(
            [
            'semester_periode'=>$input, 
            ]
            );
        }

        else {
            $tahun = $cek_thn;
        }

       $cek = $request->input('cek');
       if ($cek=='') {
        Session::put('alert-danger', 'Mata Kuliah Harus diisi');
        return Redirect::back();
       }
       else{
       foreach ($cek as $c) {
           MKDitawarkan::create(
            [
            'thn_akademik_id'=>$tahun->id_thn_akademik,
            'matakuliah_id'=>$c,
            ]
            );
         }
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'MK Ditawarkan berhasil ditambahkan');
        return Redirect::to('karyawan/krs-khs/mk-ditawarkan/view');
        }
    }

    public function edit($thn_akademik_id)
    {
        $terpilih = MKDitawarkan::where('thn_akademik_id',$thn_akademik_id)->get();
        $mk_dipilih = array();
        foreach ($terpilih as $t) {
            array_push($mk_dipilih, $t->matakuliah_id);
        }
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'mk_ditawarkan',
            // Mencari ruang berdasarkan id
            'mk_dipilih' => $mk_dipilih,
            'matkul' => MK::all(),
            'tahun'=> TahunAkademik::where('id_thn_akademik',$thn_akademik_id)->first()
        ];
        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.krs-khs.mk-ditawarkan.edit',$data);
    }

    public function editAction($thn_akademik_id, Request $request)
    {
        // Mencari ruang yang akan di update dan menaruhnya di variabel $ruang
        $mk_ditawarkan = MKDitawarkan::where('thn_akademik_id',$thn_akademik_id)->delete();

       // $tahun_awal = $request->input('tahun_awal');
       //  $tahun_akhir = $request->input('tahun_akhir');
       //  $periode = $request->input('periode');
       //  $input = $tahun_awal.'/'.$tahun_akhir.' '.$periode;
       //  $tahun = TahunAkademik::create(
       //      [
       //      'semester_periode'=>$input,
       //      ]
       //      );
       $cek = $request->input('cek');
       if ($cek=='') {
        Session::put('alert-danger', 'Mata Kuliah Harus diisi');
        return Redirect::back();
       }
       else{
       foreach ($cek as $c) {
           MKDitawarkan::create(
            [
            'thn_akademik_id'=>$thn_akademik_id,
            'matakuliah_id'=>$c,
            ]
            );
       }
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'MK Ditawarkan berhasil diedit');
        // Kembali ke halaman krs-khs/ruang
        return Redirect::to('karyawan/krs-khs/mk-ditawarkan/show?periode='.$thn_akademik_id.'');
        }
    }

}
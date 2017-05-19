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
        'page' => 'mk_ditawarkan',
        'mk_ditawarkan' => MK::all()
        ];
        return view('karyawan.krs-khs.mk-ditawarkan.create',$data);
    }

     public function create(Request $request)
    {
        MKDitawarkan::create($request->input('cek'));

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'MK Ditawarkan berhasil ditambahkan');

        // Kembali ke halaman krs-khs/ruang
        return Redirect::to('krs-khs/mk_ditawarkan/create');
    }

    public function createAction(Request $request)
    {
        $tahun_awal = $request->input('tahun_awal');
        $tahun_akhir = $request->input('tahun_akhir');
        $periode = $request->input('periode');
        $input = $tahun_awal.'/'.$tahun_akhir.' '.$periode;
        $tahun = TahunAkademik::create(
            [
            'semester_periode'=>$input,
            ]
            );
       $cek = $request->input('cek');
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

        // Kembali ke halaman krs-khs/ruang
        return Redirect::to('krs-khs/mk_ditawarkan/create');
    }

    public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'mk_ditawarkan',
            // Mencari ruang berdasarkan id
            'mk_ditawarkan' => MKDitawarkan::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('krs-khs.ruang.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari ruang yang akan di update dan menaruhnya di variabel $ruang
        $mk_ditawarkan = MKDitawarkan::find($id);
        
        $tahun_awal = $request->input('tahun_awal');
        $tahun_akhir = $request->input('tahun_akhir');
        $periode = $request->input('periode');
        $input = $tahun_awal.'/'.$tahun_akhir.' '.$periode;
        $tahun = TahunAkademik::create(
            [
            'semester_periode'=>$input,
            ]
            );
       $cek = $request->input('cek');
       foreach ($cek as $c) {
           MKDitawarkan::create(
            [
            'thn_akademik_id'=>$tahun->id_thn_akademik,
            'matakuliah_id'=>$c,
            ]
            );
       }

        // Mengupdate $ruang tadi dengan isi dari form edit tadi
        $mk_ditawarkan->thn_akademik_id = $request->input('nama_ruang');
        $mk_ditawarkan->matakuliah_id = $request->input('kapasitas');
        $mk_ditawarkan->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Ruang berhasil diedit');

        // Kembali ke halaman krs-khs/ruang/view
        return Redirect::to('krs-khs/ruang/view');
    }

}
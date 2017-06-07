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
use App\Models\KrsKhs\Ruang;
// /**
//  * Class HomeController
//  * @package App\Http\Controllers
//  */
class RuangController extends Controller
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
        'page' => 'ruang',
        'ruang' => Ruang::all()
        ];
        return view('karyawan.krs-khs.ruang.index',$data);
    }
    public function edit($id_ruang)
    {
        $data = [
            'page' => 'ruang',
            'ruang' => Ruang::find($id_ruang)
        ];

        return view('karyawan.krs-khs.ruang.edit',$data);
    }

     public function editAction($id_ruang, Request $request)
    {
        // Mencari ruang yang akan di update dan menaruhnya di variabel $ruang
        $ruang = Ruang::find($id_ruang);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $ruang->id_ruang = $request->input('id_ruang');
        $ruang->nama_ruang = $request->input('nama_ruang');
        $ruang->kapasitas = $request->input('kapasitas');
        $ruang->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Ruang berhasil diedit');
        return Redirect::to('karyawan/krs-khs/ruang/create');
   }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel ruang
        $create=Ruang::create($request->input());
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Ruang berhasil ditambahkan');

        // Kembali ke halaman krs-khs/ruang
        return Redirect::back();
}
}
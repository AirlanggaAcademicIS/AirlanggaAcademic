<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers\Inventaris;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Peminjaman;
use App\Asset;
use Auth;
use Session;
use Carbon\Carbon;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class PeminjamanController extends Controller
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
        $peminjaman = Peminjaman::all();
        $data = [
            'page' => 'inventaris',
            'peminjaman' => $peminjaman,
        ];
        return view('inventaris.peminjaman.index', $data);
    }

    public function inputPeminjaman()
    {   
        $data = [
            'page' => 'inventaris',
        ];

        return view('inventaris.peminjaman.create', $data);
    }

    public function postInputPeminjaman(Request $request)
    {   
        $idAsset = '123';

        $peminjaman = Peminjaman::create([
            'nip_petugas' => Auth::User()->name,
            'nim_nip_peminjam' => $request->input('nim_nip_peminjam'),
            'id_asset' => $idAsset,
            'asset_yang_dipinjam' => $request->input('asset_yang_dipinjam'),
            'checkout_date' => Carbon::now(),
            'expected_checkin_date' => $request->input('expected_checkin_date'),
            'waktu_pinjam' => Carbon::now(),
        ]);

        return Redirect::to('inventaris/index-peminjaman');
    }

    public function viewDetail($id)
    {
        $peminjaman = Peminjaman::where('id', $id)->first();
        $data = [
            'page'=> 'inventaris',
            'peminjaman' => $peminjaman,

        ];

        return view('inventaris.peminjaman.view', $data);
    }

    public function edit($id){
        $peminjaman = Peminjaman::where('id', $id)->first();
        $data = [
            'page'=> 'inventaris',
            'peminjaman' => $peminjaman,
        ];

        return view('inventaris.peminjaman.edit', $data);
    }

    public function postEditPeminjaman($id, Request $request)
    {
        $idAsset = '456';
        $peminjaman = Peminjaman::find($id);

        $peminjaman->nip_petugas = Auth::user()->name;
        $peminjaman->id_asset = $idAsset;
        $peminjaman->nim_nip_peminjam = $request->input('nim_nip_peminjam');
        $peminjaman->asset_yang_dipinjam = $request->input('asset_yang_dipinjam');
        $peminjaman->checkin_date = $request->input('checkin_date');
        $peminjaman->checkout_date = $request->input('checkout_date');
        $peminjaman->expected_checkin_date = $request->input('expected_checkin_date');
        $peminjaman->waktu_pinjam = $request->input('waktu_pinjam');
        $peminjaman->save();
        
        Session::put('alert-success', 'Peminjaman berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('inventaris/index-peminjaman');        
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $peminjaman = Peminjaman::find($id);

        // Menghapus biodata yang dicari tadi
        $peminjaman->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Biodata berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }
}
<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers\Karyawan;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Transaksi_Peminjaman;
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
        $transaksi_peminjaman = Transaksi_Peminjaman::all();
        $data = [
            'page' => 'inventaris',
            'peminjaman' => $transaksi_peminjaman,
        ];
        return view('karyawan.inventaris.peminjaman.index', $data);
    }

    public function inputPeminjaman()
    {   
        $data = [
            'page' => 'inventaris',
        ];

        return view('karyawan.inventaris.peminjaman.create', $data);
    }

    /* 
        STILL NOT DONE, BUG
        WAITING FOR ASSET MODULE

    public function postInputPeminjaman(Request $request)
    {   
        $peminjaman = Transaksi_Peminjaman::create([
            'nip_petugas_id' => Auth::User()->name, 
            'nim_nip_peminjam' => $request->input('nim_nip_peminjam'),
            'asset_id' => Transaksi_Peminjaman::,
            'asset_yang_dipinjam' => $request->input('asset_yang_dipinjam'),
            'checkout_date' => Carbon::now(),
            'expected_checkin_date' => $request->input('expected_checkin_date'),
            'waktu_pinjam' => Carbon::now(),
        ]);

        return Redirect::to('inventaris/index-peminjaman');
    }
    */

    public function viewDetail($id)
    {
        $peminjaman = Transaksi_Peminjaman::where('id_peminjaman', $id)->first();
        $data = [
            'page'=> 'inventaris',
            'peminjaman' => $peminjaman,

        ];

        return view('karyawan.inventaris.peminjaman.view', $data);
    }

    public function edit($id){
        $peminjaman = Transaksi_Peminjaman::where('id_peminjaman', $id)->first();
        $data = [
            'page'=> 'inventaris',
            'peminjaman' => $peminjaman,
        ];

        return view('karyawan.inventaris.peminjaman.edit', $data);
    }

    public function postEditPeminjaman($id, Request $request)
    {
        $peminjaman = Transaksi_Peminjaman::find($id);

        $peminjaman->nip_petugas_id = 12345; //references petugas_tu table
        $peminjaman->asset_id = $request->input('id_asset');
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
        $peminjaman = Transaksi_Peminjaman::find($id);

        // Menghapus biodata yang dicari tadi
        $peminjaman->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Data peminjaman berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }
}
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
    * function index
    * untuk menampilkan data peminjaman dalam bentuk index
    * param: -
    */
    public function index()
    {
        $transaksi_peminjaman = Transaksi_Peminjaman::all(); //memanggil semua isi tabel transaksi_peminjaman
        
        $data = [
            'page' => 'inventaris',
            'peminjaman' => $transaksi_peminjaman, // data yang terpanggil tadi diparse dengan alias 'peminjaman'
        ];

        return view('karyawan.inventaris.peminjaman.index', $data); // menampilkan view index peminjaman beserta data yang siap di parsing
    }

    /**
    * function inputPeminjaman
    * untuk menampilkan form tambah peminjaman
    * param: id = id asset yang akan dipinjam
    */
    public function inputPeminjaman($id)
    {   
        $asset = Asset::find($id); //memanggil asset berdasarkan id

        if ($asset->status_id != 1) { //memastikan apa status asset != ready
            Session::put('alert-warning', 'Asset tidak dapat dipinjam'); //memberi notifikasi warning
            return Redirect::back(); //redirect ke halaman sebelumnya
        }
        else { //status == ready
            $data = [
                'page' => 'inventaris',
                'asset'=> $asset, //aset yang dipanggil tadi diparse dengan alias 'asset'
            ];
            return view('karyawan.inventaris.peminjaman.create', $data); // menampilkan view create peminjaman beserta data yang siap di parsing
        }
    }

    /**
    * function postInputPeminjaman
    * untuk menyimpan data peminjaman ke database
    * param: request = isi form
    */
    public function postInputPeminjaman(Request $request)
    {   
        Asset::where('id_asset', $request->input('asset_id'))->update(['status_id' => 2]); //mengubah status asset dari 'ready' menjadi 'borrowed'
        
        $peminjaman = Transaksi_Peminjaman::create([
            'nip_petugas_id' => Auth::User()->username,
            'nim_nip_peminjam' => $request->input('nim_nip_peminjam'),
            'asset_id' => $request->input('asset_id'),
            'asset_yang_dipinjam' => $request->input('asset_yang_dipinjam'),
            'checkout_date' => Carbon::now(),
            'expected_checkin_date' => $request->input('expected_checkin_date'),
            'waktu_pinjam' => Carbon::now()->setTimezone('Asia/Phnom_Penh'),
        ]);

        Session::put('alert-success', 'Data Peminjaman Berhasil Ditambahkan'); //memberi notifikasi sukses

        return Redirect::to('inventaris/index-peminjaman'); //redirect ke halaman index peminjaman
    }
    
    /**
    * function viewDetail
    * untuk melihat data peminjaman secara detail
    * param: id = id peminjaman yang akan dilihat secara detail
    */
    public function viewDetail($id)
    {
        $peminjaman = Transaksi_Peminjaman::where('id_peminjaman', $id)->first();//memanggil data peminjaman sesuai id
        
        $data = [
            'page'=> 'inventaris',
            'peminjaman' => $peminjaman, // data peminjaman tadi diparse dengan alias 'peminjaman'
        ];

        return view('karyawan.inventaris.peminjaman.view', $data); //menampilkan view viewDetail dengan data yang siapdi parse
    }

    /**
    * function edit
    * untuk menampilkan view edit
    * param: id = id peminjaman yang akan diedit
    */
    public function edit($id){
        $peminjaman = Transaksi_Peminjaman::where('id_peminjaman', $id)->first(); //memanggil data peminjaman sesuai id

        $data = [
            'page'=> 'inventaris',
            'peminjaman' => $peminjaman, //data peminjaman tadi diparse dengan alias 'peminjaman'
        ];

        return view('karyawan.inventaris.peminjaman.edit', $data); //menampilkan view edit dengan data yang siap di parse
    }

    /**
    * function postEditPeminjaman
    * untuk mengupdate data peminjaman di database
    * param: id = id peminjaman yang akan diedit, request = isi form
    */
    public function postEditPeminjaman($id, Request $request)
    {
        $peminjaman = Transaksi_Peminjaman::find($id); //memanggil data peminjaman sesuai id

        $peminjaman->nip_petugas_id = Auth::user()->username;
        $peminjaman->asset_id = $request->input('id_asset');
        $peminjaman->nim_nip_peminjam = $request->input('nim_nip_peminjam');
        $peminjaman->asset_yang_dipinjam = $request->input('asset_yang_dipinjam');
        $peminjaman->checkin_date = $request->input('checkin_date');
        $peminjaman->checkout_date = $request->input('checkout_date');
        $peminjaman->expected_checkin_date = $request->input('expected_checkin_date');
        $peminjaman->waktu_pinjam = $request->input('waktu_pinjam');
        $peminjaman->save();
        
        Session::put('alert-success', 'Peminjaman berhasil diedit'); //menaruh pesan sukses

        return Redirect::to('inventaris/index-peminjaman'); // Kembali ke halaman index peminjaman
    }

    /**
    * function delete
    * untuk menghapus data dari database
    * param: id = id peminjaman yang akan dihapus
    */
    public function delete($id)
    {
        // Mencari data peminjaman berdasarkan id dan memasukkannya ke dalam variabel $peminjaman
        $peminjaman = Transaksi_Peminjaman::find($id);

        // Menghapus data peminjaman yang dicari tadi
        $peminjaman->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Data peminjaman berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

    /**
    * function delete
    * untuk mencatat pengembalian asset
    * param: id = id peminjaman yang akan diupdate
    */
    public function checkin($id)
    {   
        //mengupdate checkin_date dengan waktu sekarang
        Transaksi_Peminjaman::where('id_peminjaman', $id)->update(['checkin_date' => Carbon::now()]);
        
        //memanggil data peminjaman berdasarkan id
        $id_asset = Transaksi_Peminjaman::where('id_peminjaman', $id)->first();

        //mengupdate status data peminjaman tadi menjadi ready
        Asset::where('id_asset', $id_asset->asset_id)->update(['status_id' => 1]);

        //menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Asset berhasil di checkin');

        //kembali ke halaman sebelumnya
        return Redirect::back();
    }
}
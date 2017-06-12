<?php 

namespace App\Http\Controllers\Karyawan\inventaris;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Auth;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Maintenance;
use App\Asset;

class MaintenanceController extends Controller
{

    /**
    * function index
    * untuk menampilkan data maintenance dalam bentuk index
    * param: -
    */
    public function index()
    {
        $data = [
            'page' => 'index-maintenance',
            'maintenance' => Maintenance::all() //memanggil semua isi tabel maintenance dan di parse dengan alias 'maintenance'
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.inventaris.maintenance.index',$data);
    }

    /**
    * function create
    * untuk menampilkan form create maintenance
    * param: id = id asset yang akan dimaintenance
    */
    public function create($id)
    {
        $asset = Asset::find($id); //memanggil data asset berdasarkan id asset

        //memeriksa apakah status asset == broker
        if ($asset->status_id != 4) { //jika tidak broken 
            Session::put('alert-warning', 'Asset tidak dapat dimaintenance'); //notifikasi warning
            return Redirect::back(); //kembali ke halaman sebelumnya
        }
        else { //jika status asset == broken
            $data = [
                'page' => 'index-maintenance',
                'asset' => $asset, //data asset diparse dengan alias 'asset'
            ];
            
            Asset::where('id_asset', $id)->update(array('status_id' => 3)); //ubah status asset menjadi maintenance
            return view('karyawan.inventaris.maintenance.input',$data); // Memanggil tampilan form create dengan data yang siap di parse
        }
    }

    /**
    * function createAction
    * untuk menyimpan data maintenance ke database
    * param: request = isi form
    */
    public function createAction(Request $request)
    {
        Asset::where('id_asset', $request->input('asset_id'))->update(array('status_id' => 1)); //ubah status asset menjadi ready
        
        $maintenance = Maintenance::create([
            'nip_petugas_id' => Auth::User()->username,
            'asset_id' => $request->input('asset_id'),
            'asset_yang_dimaintenance' => $request->input('asset_yang_dimaintenance'),
            'nama_pemaintenance' => $request->input('nama_pemaintenance'),
            'problem' => $request->input('problem'),
            'solution' => $request->input('solution'),
            'waktu_maintenance' => $request->input('waktu_maintenance'),
        ]);

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Input maintenance berhasil ditambahkan');

        // Kembali ke halaman index maintenance
        return Redirect::to('inventaris/index-maintenance');
    }

    /**
    * function delete
    * untuk menghapus data dari database
    * param: id = id maintenance yang akan dihapus
    */
    public function delete($id_maintenance)
    {
        // Mencari data maintenance berdasarkan id dan memasukkannya ke dalam variabel $maintenance
        $maintenance = Maintenance::find($id_maintenance);

        // Menghapus data yang dicari tadi
        $maintenance->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Data maintenance berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

    /**
    * function edit
    * untuk menampilkan view edit
    * param: id = id data maintenance yang akan diedit
    */
    public function edit($id_maintenance)
    {
        $data = [
            'page' => 'index-maintenance',
            // Mencari maintenance berdasarkan id
            'maintenance' => Maintenance::find($id_maintenance)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.inventaris.maintenance.edit',$data);
    }

    /**
    * function editAction
    * untuk mengupdate data maintenance di database
    * param: id = id data maintenance yang akan diedit, request = isi form
    */
    public function editAction($id_maintenance, Request $request)
    {
        // Mencari maintenance yang akan di update dan menaruhnya di variabel $biodata
        $maintenance = Maintenance::find($id_maintenance);

        // Mengupdate $maintenance tadi dengan isi dari form edit tadi
        $maintenance->nip_petugas_id = $request->input('nip_petugas_id');
        $maintenance->asset_id = $request->input('asset_id');
        $maintenance->asset_yang_dimaintenance = $request->input('asset_yang_dimaintenance');
        $maintenance->nama_pemaintenance = $request->input('nama_pemaintenance');
        $maintenance->problem = $request->input('problem');
        $maintenance->solution = $request->input('solution');
        $maintenance->waktu_maintenance = $request->input('waktu_maintenance');
        $maintenance->save();

        Asset::where('id_asset', $request->input('asset_id'))->update(array('status_id'=>1));

        // Notifikasi sukses
        Session::put('alert-success', 'Data maintenance berhasil diedit');

        // Kembali ke halaman index maintenance
        return Redirect::to('inventaris/index-maintenance');
    }

    /**
    * function viewDetail
    * untuk melihat data maintenance secara detail
    * param: id = id maintenance yang akan dilihat secara detail
    */
    public function viewDetail($id_maintenance)
    {
        $maintenance = Maintenance::where('id_maintenance', $id_maintenance)->first(); //panggil data maintenance berdasarkan id
        $data = [
            'page'=> 'index-maintenance',
            'maintenance' => $maintenance, //parse dengan alias 'maintenance'
        ];

        return view('karyawan.inventaris.maintenance.viewDetail', $data); //tampilkan view viewDetail dengan data yang siap di parse
    }

}
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

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            'page' => 'index-maintenance',
            'maintenance' => Maintenance::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.inventaris.maintenance.index',$data);
    }

    public function create($id)
    {
        $asset = Asset::find($id);
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'index-maintenance',
            'asset' => $asset,
            
        ];
        // Memanggil tampilan form create
        return view('karyawan.inventaris.maintenance.input',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
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

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('inventaris/index-maintenance');
    }

    public function delete($id_maintenance)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $maintenance = Maintenance::find($id_maintenance);

        // Menghapus biodata yang dicari tadi
        $maintenance->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Data maintenance berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($id_maintenance)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'index-maintenance',
            // Mencari biodata berdasarkan id
            'maintenance' => Maintenance::find($id_maintenance)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.inventaris.maintenance.edit',$data);
    }

    public function editAction($id_maintenance, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $maintenance = Maintenance::find($id_maintenance);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $maintenance->nip_petugas_id = $request->input('nip_petugas_id');
        $maintenance->asset_id = $request->input('asset_id');
        $maintenance->asset_yang_dimaintenance = $request->input('asset_yang_dimaintenance');
        $maintenance->nama_pemaintenance = $request->input('nama_pemaintenance');
        $maintenance->problem = $request->input('problem');
        $maintenance->solution = $request->input('solution');
        $maintenance->waktu_maintenance = $request->input('waktu_maintenance');
        $maintenance->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Data maintenance berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('inventaris/index-maintenance');
    }

    public function viewDetail($id_maintenance)
    {
        $maintenance = Maintenance::where('id_maintenance', $id_maintenance)->first();
        $data = [
            'page'=> 'index-maintenance',
            'maintenance' => $maintenance,

        ];

        return view('karyawan.inventaris.maintenance.viewDetail', $data);
    }

}
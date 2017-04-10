<?php 

namespace App\Http\Controllers\Inventaris;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Asset;


class AssetController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data=[
            // Buat di sidebar, biar ketika diklik yg aktif sidebar asset
        
            'page' => 'asset',
            // Memanggil semua isi dari tabel asset
            'asset' => Asset::all()
        ];

        return view('inventaris.asset.index',$data);

        }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar asset
            'page' => 'asset',
        ];

        // Memanggil tampilan form create
        return view('inventaris.asset.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel asset
        Asset::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Asset berhasil ditambahkan');

        // Kembali ke halaman inventaris/asset
        return Redirect::to('inventaris/asset');
    }

     public function delete($id_asset)
    {
        // Mencari asset berdasarkan id dan memasukkannya ke dalam variabel $asset
        $asset = Asset::find($id_asset);

        // Menghapus asset yang dicari tadi
        $asset->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Asset berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($id_asset)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar asset
            'page' => 'asset',
            // Mencari asset berdasarkan id
            'asset' => Asset::find($id_asset)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('inventaris.asset.edit',$data);
    }

    public function editAction($id_asset, Request $request)
    {
        // Mencari asset yang akan di update dan menaruhnya di variabel $asset
        $asset = Asset::find($id_asset);

        // Mengupdate $asset tadi dengan isi dari form edit tadi
        $asset->id_asset = $request->input('id_asset');
        $asset->nip_petugas = $request->input('nip_petugas');
        $asset->serial_barcode = $request->input('serial_barcode');
        $asset->nama_asset = $request->input('nama_asset');
        $asset->lokasi = $request->input('lokasi');
        $asset->expired_date = $request->input('expired_date');
        $asset->nama_supplier = $request->input('nama_supplier');
        $asset->harga_satuan = $request->input('harga_satuan');
        $asset->jumlah_barang = $request->input('jumlah_barang');
        $asset->total_harga = $request->input('total_harga');
        $asset->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Asset berhasil diedit');

        // Kembali ke halaman inventaris/asset
        return Redirect::to('inventaris/asset');
    }


}
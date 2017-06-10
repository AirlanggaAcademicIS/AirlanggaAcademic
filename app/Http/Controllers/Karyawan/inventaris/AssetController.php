<?php 

namespace App\Http\Controllers\Karyawan\inventaris;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
use Auth;
// Tambahkan model yang ingin dipakai
use App\Asset;
use App\Kategori;
use App\StatusAsset;
use App\Lokasi;
use Milon\Barcode\DNS2D;
use PDF;

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
        return view('karyawan.inventaris.asset.index',$data);

        }

    public function create()
    {
        $status = StatusAsset::all();
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();


        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar asset
            'page' => 'asset',
            'status' => $status,
            'kategori' => $kategori,
            'lokasi' => $lokasi,
        ];

        // Memanggil tampilan form create
        return view('karyawan.inventaris.asset.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel asset
        $string = preg_replace('/\s+/', '', $request->input('nama_asset'));
        $serial_barcode = 'ast'.$string.'.png';

            $asset = Asset::create([
            'kategori_id' => $request->input('kategori'),
            'nip_petugas_id' => Auth::User()->username,
            'status_id' => $request->input('status'),
            'serial_barcode' => $serial_barcode,
            'nama_asset' => $request->input('nama_asset'),
            'lokasi_id' => $request->input('lokasi'),
            'expired_date' => $request->input('expired_date'),
            'nama_supplier' => $request->input('nama_supplier'),
            'harga_satuan' => $request->input('harga_satuan'),
           ]);

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Asset berhasil ditambahkan! QRCODE telah dicetak!');

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
            'asset' => Asset::find($id_asset),
        ];
        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.inventaris.asset.edit',$data);
    }

    public function editAction($id_asset, Request $request)
    {
        $string = preg_replace('/\s+/', '', $request->input('nama_asset'));
        $serial_barcode = 'ast'.$string.'.png';
        // Mencari asset yang akan di update dan menaruhnya di variabel $asset
        $asset = Asset::find($id_asset);

        // Mengupdate $asset tadi dengan isi dari form edit tadi
        $asset->id_asset = $request->input('id_asset');
        $asset->kategori_id = $request->input('kategori_id');
        $asset->nip_petugas_id = Auth::User()->username;
        $asset->status_id = $request->input('status_id');
        $asset->serial_barcode = $serial_barcode;
        $asset->nama_asset = $request->input('nama_asset');
        $asset->lokasi = $request->input('lokasi');
        $asset->expired_date = $request->input('expired_date');
        $asset->nama_supplier = $request->input('nama_supplier');
        $asset->harga_satuan = $request->input('harga_satuan');
        $asset->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Asset berhasil diedit');

        // Kembali ke halaman inventaris/asset
        return Redirect::to('inventaris/asset');
    }

     public function viewDetail($id_asset)
    {
        $asset = Asset::where('id_asset', $id_asset)->first();
        $data = [
            'page'=> 'inventaris',
            'asset' => $asset,
        ];
        return view('karyawan.inventaris.asset.viewDetail', $data);
    }

    public function locationReport()
    {
        $lokasi = Lokasi::all();
        $data = [
            'page'=> 'inventaris',
            'lokasi' => $lokasi
        ];
        return view('karyawan.inventaris.asset.locationReport', $data);
    }

    public function printLocationReport (Request $request)
    {
        $report = Asset::where('lokasi_id', $request->input('lokasi'))->get();

        $data = [
            'report' => $report
        ];

        $pdf = PDF::loadView('karyawan.inventaris.asset.report',$data);
        return $pdf->inline('dokumen.pdf');
    }

    public function printBarcode($id)
    {
        $asset = Asset::find($id);
        $pdf = PDF::loadHTML(''.DNS2D::getBarcodeHtml('AST'.$asset->serial_barcode.'',"QRCODE",20,20).'<h1>'.$asset->nama_asset.'<h1>');
        return $pdf->inline('QRCODE.pdf');
    }
} 
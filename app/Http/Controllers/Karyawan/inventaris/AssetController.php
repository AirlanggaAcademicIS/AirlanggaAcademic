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

    /**
    * function index
    * untuk menampilkan data asset dalam bentuk index
    * param: -
    */
    public function index()
    {
        $data=[
            'page' => 'asset',
            'asset' => Asset::all() // Memanggil semua isi dari tabel asset dan diparse dengan alias 'asset'
        ];

        return view('karyawan.inventaris.asset.index',$data); // menampilkan view index asset beserta data yang siap di parsing

    }
    
    /**
    * function create
    * untuk menampilkan form tambah asset
    * param: -
    */
    public function create()
    {
        $status = StatusAsset::all(); //memanggil semua isi tabel status_asset
        $kategori = Kategori::all(); //memanggil semua isi tabel kategori
        $lokasi = Lokasi::all(); //memanggil semua isi tabel lokasi

        $data = [
            'page' => 'asset',
            'status' => $status, //isi tabel status_asset diparse dengan alias 'status'
            'kategori' => $kategori, //isi tabel kategori diparse dengan alias 'kategori'
            'lokasi' => $lokasi, //isi tabel lokasi diparse dengan alias 'lokasi'
        ];

        return view('karyawan.inventaris.asset.create',$data); // Memanggil tampilan view create asset dengan data yang siap di parsing
    }

    /**
    * function createAction
    * memasukkan data ke database
    * param: request = isi dari form
    */
    public function createAction(Request $request)
    {

        $string = preg_replace('/\s+/', '', $request->input('nama_asset')); //mengubah input menjadi lowercase
        $serial_barcode = 'ast'.$string.'.png'; // mendeklarasikan string yang dicrypt menggunakan qrcode

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

        Session::put('alert-success', 'Asset berhasil ditambahkan! QRCODE telah dicetak!'); // Menampilkan notifikasi pesan sukses

        return Redirect::to('inventaris/asset'); // Kembali ke halaman inventaris/asset
    }


    /**
    * function delete
    * menghapus data dari database
    * param: id_asset = id dari asset yang akan dihapus
    */
     public function delete($id_asset)
    {
        $asset = Asset::find($id_asset); // Mencari asset berdasarkan id

        $asset->delete(); // Menghapus asset yang dicari tadi

        Session::put('alert-success', 'Asset berhasil dihapus'); // Menampilkan notifikasi pesan sukses

        return Redirect::back(); // Kembali ke halaman sebelumnya
    }

    /**
    * function edit
    * menampilkan form edit
    * param: id_asset = id dari asset yang ingin diupdate
    */
   public function edit($id_asset)
    {
        $data = [
            'page' => 'asset',
            'asset' => Asset::find($id_asset), // Mencari asset berdasarkan id dan diarse dengan alias 'asset'
        ];
        
        return view('karyawan.inventaris.asset.edit',$data); // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
    }

    /**
    * function editAction
    * mengupdate data di database
    * param: id_asset = id dari asset yang ingin diupdate, request = isi dari form
    */
    public function editAction($id_asset, Request $request)
    {
        $string = preg_replace('/\s+/', '', $request->input('nama_asset')); //mengubah input menjadi lowercase
        $serial_barcode = 'ast'.$string.'.png'; // mendeklarasikan string yang dicrypt menggunakan qrcode
        
        $asset = Asset::find($id_asset);

        // Mengupdate $asset tadi dengan isi dari form edit tadi
        $asset->id_asset = $request->input('id_asset');
        $asset->kategori_id = $request->input('kategori_id');
        $asset->nip_petugas_id = Auth::User()->username;
        $asset->status_id = $request->input('status_id');
        $asset->serial_barcode = $serial_barcode;
        $asset->nama_asset = $request->input('nama_asset');
        $asset->lokasi_id = $request->input('lokasi');
        $asset->expired_date = $request->input('expired_date');
        $asset->nama_supplier = $request->input('nama_supplier');
        $asset->harga_satuan = $request->input('harga_satuan');
        $asset->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Asset berhasil diedit');

        // Kembali ke halaman inventaris/asset
        return Redirect::to('inventaris/asset');
    }

    /**
    * function viewDetail
    * menampilkan detail data asset
    * param: id_asset = id dari asset yang ingin dilihat secara detail, request = isi dari form
    */
    public function viewDetail($id_asset)
    {
        $asset = Asset::where('id_asset', $id_asset)->first(); //memanggil data asset sesuai id_asset
       
        $data = [
            'page'=> 'inventaris', 
            'asset' => $asset, // data asset diparse dengan alias 'asset'
        ];

        return view('karyawan.inventaris.asset.viewDetail', $data); // Menampilkan view viewDetail dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
    }

    /**
    * function locationReport
    * menampilkan view locationReport
    * param: -
    */
    public function locationReport()
    {
        $lokasi = Lokasi::all(); //memanggil semua data di tabel lokasi
        
        $data = [
            'page'=> 'inventaris',
            'lokasi' => $lokasi // data lokasi diparse dengan alias 'asset'
        ];

        return view('karyawan.inventaris.asset.locationReport', $data); // Menampilkan view locationReport dan menambahkan variabel $data ke tampilan tadi
    }

    /**
    * function printLocationReport
    * mencetak laporan asset berdasarkan lokasi
    * param: request = isi form
    */
    public function printLocationReport (Request $request)
    {
        $report = Asset::where('lokasi_id', $request->input('lokasi'))->get(); //memanggil data asset sesuai dengan lokasi
        $lokasi =  $request->input('lokasi');

        $data = [
            'report' => $report, //data asset di parse dengan alias 'report'
            'lokasi' => $lokasi,
        ];

        $pdf = PDF::loadView('karyawan.inventaris.asset.report',$data); //mencetak report dengan template report.blade.php dengan data $report
        return $pdf->inline('dokumen.pdf'); //mereturn download link file location report dgn filename 'dokumen.pdf'
    }

    /**
    * function printBarcode
    * mencetak barcode asset
    * param: id = id asset yang akan diberikan barcode
    */
    public function printBarcode($id)
    {
        $asset = Asset::find($id); //memanggil data asset sesuai id

        //mencetak barcode dalam html lalu diconvert ke pdf dgn keterangan nama dan id asset
        $pdf = PDF::loadHTML(''.DNS2D::getBarcodeHtml('AST'.$asset->serial_barcode.'',"QRCODE",20,20).'<h1>'.$asset->nama_asset.' '.$asset->id_asset.'<h1>'); 
        
        return $pdf->inline('QRCODE.pdf'); //mereturn download link file barcode dgn filename 'QRCODE.pdf'

    }
} 
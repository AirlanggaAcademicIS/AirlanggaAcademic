<?php 

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Biodata;
use Intervention\Image\ImageManagerStatic as Image;
use Session;
use Input;
use DB;
use Validator;
use Response;


class BiodataController extends Controller
{

    public function index()
    {
        $data = [
            'page' => 'biodata',
            'biodata' => Biodata::all()
        ];
        return view('mahasiswa.biodata.index',$data);
    }

    public function create()
    {
        $data = [
            'page' => 'stok_barang',
            'stok_barang' => StokBarang::all()
        ];
    	return view('admin.stok_barang.tambah',$data);
    }

    public function postTambah(Request $request)
    {
        StokBarang::create($request->input());
        Session::put('alert-success', 'Barang "'.$request->input('barang_id').'" berhasil ditambahkan');
        return Redirect::to('stok_barang');
    }

    public function hapus($id)
    {
        $stokbarang = StokBarang::find($id);
        $stokbarang->delete();
    	Session::put('alert-success', 'Barang '.$stokbarang->barang_id.' berhasil dihapus');
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            'page' => 'stok_barang',
            'stok_barang' => StokBarang::find($id)
        ];
        return view('admin.stok_barang.edit',$data);
    }

    public function postEdit(Request $request)
    {
        $stokbarang = StokBarang::find($request->input('id'));
        $stokbarang->satuan_stok = $request->input('satuan_stok');
        $stokbarang->jumlah_stok = $request->input('jumlah_stok');
        $stokbarang->barang_id    = $request->input('barang_id');
        $stokbarang->save();        
        $namaBarang = Barang::where('id', $request->input('barang_id'))->first()->nama_barang;

        Session::put('alert-success', 'Barang "'.$namaBarang.'" berhasil diedit');
        return Redirect::to('stok_barang');
    }

}
<?php 

namespace App\Http\Controllers\Karyawan\PLA;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
use Auth;
// Tambahkan model yang ingin dipakai
use App\Dokumen;

class UploadDokumenController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'upload-dokumen',
            'dokumen' => Dokumen::orderBy('tgl_upload','desc')->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.pla.upload-dokumen.index',$data);
    }

    public function upload_doc(Request $request)
    {
        $dok = $request->input();
        $checkDoc = Dokumen::all();
        foreach ($checkDoc as $c) {
            if ($c->nama == $request->input('nama')) {
                Session::put('alert-danger', 'Nama dokumen telah terpakai');
                return Redirect::back();
            }
        }
        if($request->file('url_dokumen')==null||$request->input('nama')==null){
        Session::put('alert-danger', 'Belum mengisi nama dokumen / memilih dokumen');
        return Redirect::back();
        }
        $dok['nip_petugas_id'] = Auth::user()->username;
        $dok['url_dokumen']= time() .'.'.$request->file('url_dokumen')->getClientOriginalExtension();
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Dokumen::create($dok);
        $file = $request->file('url_dokumen')->move("file_dokumen/",$dok['url_dokumen']);
        Session::put('alert-success', 'Dokumen berhasil ditambahkan');
        return Redirect::back();
    }

    public function delete($id_dokumen)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $dokumen = Dokumen::find($id_dokumen);

        // Menghapus biodata yang dicari tadi
        $dokumen->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Dokumen berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }
   
}
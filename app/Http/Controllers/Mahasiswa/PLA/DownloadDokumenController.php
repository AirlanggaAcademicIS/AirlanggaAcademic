<?php 

namespace App\Http\Controllers\Mahasiswa\PLA;
 
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

class DownloadDokumenController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $AkunDosen = Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'download-dokumen',
            'dokumen' => Dokumen::orderBy('tgl_upload','desc')->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.pla.download_dokumen.index',$data);
    }

    

    public function download_doc($id)
    {
        $file = Dokumen::where('id_dokumen',$id)->first();
        $pathToFile=public_path('file_dokumen/'.$file->url_dokumen);
        return response()->download($pathToFile);
    }

   
}
<?php 

namespace App\Http\Controllers\Karyawan\monitoringskripsi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;

use Illuminate\Http\Request;
use Redirect;
// Tambahkan model yang ingin dipakai
use App\Skripsi;
use App\BiodataMahasiswa;
use App\KBK;
use Auth;
use DB;

class DownloadController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar skripsi
            'page' => 'skripsi',
            // Memanggil semua isi dari tabel skripsi
            'skripsi' => Skripsi::all(),
            'mhs' => BiodataMahasiswa::all(),
            'kbk' => KBK::all(),
        ];
        // Memanggil tampilan index di folder monitoring-skripsi/skripsi dan juga menambahkan $data tadi di view
        return view('karyawan.monitoring-skripsi.berkas.index',$data);
    }

    public function downloadProposal($nim)
    {
        $file = Skripsi::where('NIM_id',$nim)->first();
        $pathToFile=public_path('file_proposal/'.$file->upload_berkas_proposal);
        return response()->download($pathToFile);
    }

    public function downloadSkripsi($nim)
       {
           $file = Skripsi::where('NIM_id',$nim)->first();
           // dd($file->upload_berkas_skripsi);
           $pathToFile=public_path('file_skripsi/'.$file->upload_berkas_skripsi);
           return response()->download($pathToFile);
       }
    public function downloadForm($nim)
    {
      $file = Skripsi::where('NIM_id',$nim)->first();
      // dd($file->upload_berkas_skripsi);
      $pathToFile=public_path('file_proposal/'.$file->upload_form_usulan);
      return response()->download($pathToFile);
    }

   

}
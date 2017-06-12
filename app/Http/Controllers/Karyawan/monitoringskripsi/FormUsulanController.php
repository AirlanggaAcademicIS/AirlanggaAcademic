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

class FormUsulanController extends Controller
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
        ];
        // Memanggil tampilan index di folder monitoring-skripsi/skripsi dan juga menambahkan $data tadi di view
        return view('karyawan.monitoring-skripsi.form_usulan.index',$data);
    }
    public function downloadForm($nim)
    {
      $file = Skripsi::where('NIM_id',$nim)->first();
      // dd($file->upload_berkas_skripsi);
      $pathToFile=public_path('file_formusulan/'.$file->upload_form_usulan);
      return response()->download($pathToFile);
    }

   

}
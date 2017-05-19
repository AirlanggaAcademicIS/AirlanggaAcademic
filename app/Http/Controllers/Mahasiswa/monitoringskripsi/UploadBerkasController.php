<?php 

namespace App\Http\Controllers\Mahasiswa\monitoringskripsi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;

use Illuminate\Http\Request;
use Redirect;
// Tambahkan model yang ingin dipakai
use App\Skripsi;
use App\BiodataMhs;

class UploadBerkasController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar skripsi
            'page' => 'upload berkas',
            // Memanggil semua isi dari tabel skripsi
            'skripsi' => Skripsi::all()
        ];

        // Memanggil tampilan index di folder monitoring-skripsi/skripsi dan juga menambahkan $data tadi di view
        return view('mahasiswa.monitoring-skripsi.upload_berkas.form_uploadproposal',$data);
    }

   

}
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
use App\BiodataMahasiswa;
use App\KBK;
use Auth;
use DB;

class FormUsulanController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $AkunMhs = Auth::user()->username;
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar skripsi
            'page' => 'skripsi',
            // Memanggil semua isi dari tabel skripsi
            'mhs' => BiodataMahasiswa::where('nim_id', $AkunMhs)->first(),
        ];
        // Memanggil tampilan index di folder monitoring-skripsi/skripsi dan juga menambahkan $data tadi di view
        return view('mahasiswa.monitoring-skripsi.form_usulan.index',$data);
    }

    public function downloadForm()
    {
        $pathToFile=public_path('file_dokumen/formusulantopik.docx');
        return response()->download($pathToFile);
    }

    public function uploadForm(Request $request)
    {
        $upload_form_usulan = time() .'.'.$request->file('upload_form_usulan')->getClientOriginalExtension();
        Skripsi::where('NIM_id',Auth::user()->username)->update([
            'upload_form_usulan' => $upload_form_usulan,
            ]);
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
            $dok = $request->file('upload_form_usulan')->move("file_formusulan/",$upload_form_usulan);
            

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Berkas berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/monitoring-skripsi/form_usulan');
    }

   

}
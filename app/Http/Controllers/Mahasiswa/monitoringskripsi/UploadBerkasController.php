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
use Auth;
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
public function uploadProposal(Request $request)
    {
        $upload_berkas_proposal = time() .'.'.$request->file('upload_berkas_proposal')->getClientOriginalExtension();
        Skripsi::where('NIM_id',Auth::user()->username)->update([
            'upload_berkas_proposal' => $upload_berkas_proposal,
            ]);
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
            $dok = $request->file('upload_berkas_proposal')->move("file_proposal/",$upload_berkas_proposal);

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Berkas berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/monitoring-skripsi/upload_berkas');
    }
public function uploadSkripsi(Request $request)
    {
        $upload_berkas_skripsi = time() .'.'.$request->file('upload_berkas_skripsi')->getClientOriginalExtension();
        Skripsi::where('NIM_id',Auth::user()->username)->update([
            'upload_berkas_skripsi' => $upload_berkas_skripsi,
            ]);
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
            $dok = $request->file('upload_berkas_skripsi')->move("file_skripsi/",$upload_berkas_skripsi);

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Berkas berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('mahasiswa/monitoring-skripsi/upload_berkas');
   
}
}
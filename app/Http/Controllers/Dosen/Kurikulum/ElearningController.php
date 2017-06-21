<?php 
namespace App\Http\Controllers\Dosen\Kurikulum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\elearning;
use App\Models\KrsKhs\MKDitawarkan;
use App\MataKuliah;
use Auth;

class ElearningController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'elearning',
            // Memanggil semua isi dari tabel biodata
            'elearning' => elearning::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.kurikulum.elearning.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'elearning',
            'matkul' => MataKuliah::all()
        ];

        // Memanggil tampilan form create
        return view('dosen.kurikulum.elearning.create',$data);

    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        $dosen = $request->input();
        $mkd = MKDitawarkan::where('matakuliah_id', '=' ,$dosen['mk_id'])->first();
        $dosen['mk_ditawarkan_id'] = $mkd->id_mk_ditawarkan;
        $dosen['nip_id'] = Auth::user()->username;
        $dosen['direktori_file'] = time() .'.'.$request->file('direktori_file')->getClientOriginalExtension();
        $dosen['nama_file'] = time() .'.'.$request->file('direktori_file')->getClientOriginalExtension();
        elearning::create($dosen);
        $file = $request->file('direktori_file')->move("file/",$dosen['direktori_file']);

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'File Telah berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/kurikulum/elearning/');
    }
    
}

    


   
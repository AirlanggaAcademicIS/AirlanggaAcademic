<?php 
namespace App\Http\Controllers\Mahasiswa\Kurikulum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\CapaianPembelajaran;
use App\Prodi;
use App\KategoriCapaianPembelajaran;

class CapaianPembelajaranController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'capaian-pembelajaran',

            // Memanggil semua isi dari tabel biodata
            'capaianpembelajaran' => CapaianPembelajaran::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.Kurikulum.CapaianPembelajaran.index',$data);
    }
}
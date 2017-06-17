<?php 

namespace App\Http\Controllers\Dosen;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use Illuminate\Support\Facades\DB;

use App\JurnalDosen,App\PenelitianDosen,App\Konferensi,App\PengmasDosen,App\SuratTugasDosen;


class DataDosenController extends Controller
{

public function index_jurnal()
    {   
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'data-dosen',
            // Memanggil semua isi dari tabel biodata
            'jurnal' => DB::table('jurnal_dosen')
            
            ->join('jurnal','jurnal.jurnal_id','=','jurnal_dosen.jurnal_id')
            ->join('biodata_dosen', 'jurnal_dosen.nip', '=', 'biodata_dosen.nip')
            ->select('*')
            ->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.data-dosen.index_jurnal',$data);
    }

public function index_penelitian()
    {   
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'data-dosen',
            // Memanggil semua isi dari tabel biodata
             'penelitian' => DB::table('penelitian_milik_dosen')
           
            ->join('penelitian_dosen', 'penelitian_milik_dosen.penelitian_id', '=', 'penelitian_dosen.penelitian_id')
            ->join('biodata_dosen','penelitian_milik_dosen.nip','=','biodata_dosen.nip')
            ->select('*')
            ->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.data-dosen.index_penelitian',$data);
    }    

public function index_konferensi()
    {   
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'data-dosen',
            // Memanggil semua isi dari tabel biodata
            'konferensi' => DB::table('konferensi_dosen')
            
            ->join('konferensi', 'konferensi_dosen.konferensi_id', '=', 'konferensi.konferensi_id')
            ->join('biodata_dosen', 'konferensi_dosen.nip', '=', 'biodata_dosen.nip')

            ->select('*')
            ->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.data-dosen.index_konferensi',$data);
    }      

public function index_sktugas()
    {   
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'data-dosen',
            // Memanggil semua isi dari tabel biodata
            'surattugas' => DB::table('surat_tugas_dosen')
           
            ->join('surat_tugas', 'surat_tugas_dosen.surat_id', '=', 'surat_tugas.surat_id')
            ->join('biodata_dosen', 'surat_tugas_dosen.nip', '=', 'biodata_dosen.nip')
            ->select('*')
            ->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.data-dosen.index_sktugas',$data);
    }     

    public function index_pengmas()
    {   
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'data-dosen',
            // Memanggil semua isi dari tabel biodata
            'pengmas' => DB::table('pengmas_dosen')
            
            ->join('pengabdian_masyarakat', 'pengmas_dosen.kegiatan_id', '=', 'pengabdian_masyarakat.kegiatan_id')
            ->join('biodata_dosen', 'pengmas_dosen.nip', '=', 'biodata_dosen.nip')
            ->select('*')
            ->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.data-dosen.index_pengmas',$data);
    } 
}
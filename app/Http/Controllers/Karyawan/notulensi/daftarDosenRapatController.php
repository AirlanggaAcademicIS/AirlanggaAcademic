<?php 

namespace App\Http\Controllers\Karyawan\notulensi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\DosenRapat;
use App\NotulensiKaryawan;
use PDF;


class daftarDosenRapatController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'notulensi',
            // Memanggil semua isi dari tabel biodata
            'notulensi' => DB::table('notulen_rapat') 
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'notulen_rapat.permohonan_ruang_id') 
            ->join('jadwal_permohonan', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang') 
            ->join('ruang', 'ruang.id_ruang', '=', 'jadwal_permohonan.ruang_id') 
            ->select('*') 
            ->get()
            //DB::table('dosen_rapat')->count(DB::raw('DISTINCT nip')
         
        ];
   // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.kehadiranRapat.daftarDosenRapat',$data);
    }

    public function toPDF($id)
    {
        $data = [
           'page' => 'notulensi',
            // Memanggil semua isi dari tabel biodata
            // 'notulensi' => DB::table('dosen_rapat') 
            // ->join('biodata_dosen', 'biodata_dosen.nip', '=', 'dosen_rapat.nip')
            // ->select('*') 
            // ->get()
           'dosen' => DB::table('dosen_rapat') 
            ->join('biodata_dosen', 'dosen_rapat.nip', '=', 'biodata_dosen.nip')
            ->select('*') 
            ->where('status','=','1')
            ->get(),
           'rapat' => DB::table('notulen_rapat') 
            ->join('permohonan_ruang', 'permohonan_ruang.id_permohonan_ruang', '=', 'notulen_rapat.permohonan_ruang_id') 
            ->join('jadwal_permohonan', 'jadwal_permohonan.permohonan_ruang_id', '=', 'permohonan_ruang.id_permohonan_ruang') 
            ->join('ruang', 'ruang.id_ruang', '=', 'jadwal_permohonan.ruang_id')
            ->join('dosen_rapat', 'dosen_rapat.notulen_id', '=', 'notulen_rapat.id_notulen')  
            ->select('*') 
            ->where('notulen_id', '=', $id)
            ->get()
        ];
        $pdf = PDF::loadView('karyawan.kehadiranRapat.cetak',$data);
        return $pdf->inline('dokumen.pdf');
    }

   


}
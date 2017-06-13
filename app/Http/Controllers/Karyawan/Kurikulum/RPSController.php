<?php 

namespace App\Http\Controllers\Karyawan\Kurikulum;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\RPS_Matkul;
use App\RPS_Matkul_Prasyarat;
use App\RPS_CP_Matkul;
use App\RPS_CPL_Prodi;
use App\RPS_Koor_Matkul;
use App\RPS_Detail_Kategori;
use App\Status_Team_Teaching;
use App\CapaianPembelajaran;
use App\BiodataDosen;
use App\Silabus_Matkul;
use App\Silabus_detail_kategori;    
use App\Silabus_Matkul_prasyarat;
use PDF;
use DB;

class RPSController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar rps
            'page' => 'rps',
            // Memanggil semua isi dari tabel
            'mata_kuliah' => RPS_Matkul::where('status_rps','=', '1')->get(),
        ];

        // Memanggil tampilan index
        return view('karyawan.kurikulum.rps.index',$data);
    }

    public function detail($id)
    {
        $data = [
            'page' => 'rps',
            'mata_kuliah' => RPS_Matkul::find($id),
            'matkul' => RPS_Matkul::all(),
            'cpmk' => RPS_CP_Matkul::where('matakuliah_id', '=', $id)->get(),
            'mk_prasyarat' => RPS_Matkul_Prasyarat::where('mk_id', '=', $id)->get(),
            'cp_prodi' => RPS_CPL_Prodi::where('mk_id', '=', $id)->get(),
            'cpl' => CapaianPembelajaran::all(),
            'koor' => RPS_Koor_Matkul::where('mk_id', '=', $id)->get(),
            'dosen' => DB::table('koor_mk')
            ->join('biodata_dosen', 'biodata_dosen.nip', '=', 'koor_mk.nip_id')
            ->select('*')
            ->get(),
        ];
        return view('karyawan.kurikulum.rps.detail',$data);
    }

    public function pdf($id)
    {
        $cek = 0; 
        $media_pembelajaran;
        $cpProdi = RPS_CPL_Prodi::where('mk_id', '=', $id)->get();
        $cpmk = RPS_CP_Matkul::where('matakuliah_id', '=', $id)->get();        
        // for($count = 0; $count<count($cpmk); $count++)
        // {
        //     $media_pembelajaran[$count] = Silabus_detail_kategori::where('cpmk_id', '=', $cpmk[$count]->id_cpmk)->get();      
        // } 
        $data = [
            'matkul_silabus' => Silabus_Matkul::find($id),
            'cpem' => RPS_CPL_Prodi::where('mk_id', '=', $id)->get(),
            'mk_prasyarat' => Silabus_Matkul_prasyarat::where('mk_id', '=', $id)->get(),
            'mk_dosen' => RPS_Koor_Matkul::where('mk_id', '=', $id)->get(),
            'cp_matkul' => RPS_CP_Matkul::where('matakuliah_id', '=', $id)->get(),   
            // 'mk_media_pembelajaran' => DB::table('detail_kategori')->select( DB::raw('DISTINCT(media_pembelajaran_id)'))->get()        
            'mk_media_pembelajaran' => Silabus_detail_kategori::all()           
        ];   
        // dd($data['mk_media_pembelajaran']);
        $pdf = PDF::loadView('karyawan.kurikulum.rps.pdf-rps', $data);
        return $pdf->download('silabus-mata-kuliah.pdf');
    }

}
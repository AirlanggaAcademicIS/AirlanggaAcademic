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
use App\Status_Team_Teaching;


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
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'rps',
            // Mencari biodata berdasarkan id
            'mata_kuliah' => RPS_Matkul::find($id),
            'mk_prasyarat' => RPS_Matkul_Prasyarat::where('mk_id', '=', $id)->get(),
            'cp_mata_kuliah' => RPS_CP_Matkul::where('matakuliah_id', '=', $id)->get(),
            'cp_prodi' => RPS_CPL_Prodi::where('mk_id', '=', $id)->get(),
            'koor' => RPS_Koor_Matkul::where('mk_id', '=', $id)->get(),
            // 'media' => RPS_Detail_Kategori::where($media->cpmk['matakuliah_id'], '=', $id)->get()
        ];
        return view('karyawan.kurikulum.rps.detail',$data);
    }

    public function pdf($id)
    {
        $cpmk = RPS_CP_Matkul::where('matakuliah_id', '=', $id)->first();        
        $data = [
            'matkul_silabus' => Silabus_Matkul::find($id),
            'matkul_prasyarat' =>Silabus_Matkul_prasyarat::where('mk_id', '=' , $id)->get(),
            'atribut_softskill' => Silabus_Atribut_Softskill::all(),    
            'mk_softskill' => Silabus_mk_softskill::where('mk_id', '=', $id)->get(),
            'metode_pembelajaran' => Silabus_Sistem_Pembelajaran::all(),
            'mk_metode_pembelajaran' => Silabus_detail_media::where('cpmk_id', '=', $cpmk->id_cpmk)->get(),            
            'media_pembelajaran' => Silabus_Media_Pembelajaran::all(),
            'mk_media_pembelajaran' => Silabus_detail_kategori::where('cpmk_id', '=', $cpmk->id_cpmk)->get()
        ];
        $pdf = PDF::loadView('dosen.kurikulum.rps.pdf-rps', $data);
        return $pdf->download('silabus-mata-kuliah.pdf');        
    }    
}
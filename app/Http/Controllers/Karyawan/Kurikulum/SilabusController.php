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
use App\Silabus_Matkul;
use App\Silabus_Matkul_Prasyarat;
use App\Silabus_Atribut_Softskill;
use App\Silabus_mk_softskill;
use App\Silabus_cp_matkul;
use App\Silabus_detail_media;
use App\Silabus_Sistem_Pembelajaran;
use App\Silabus_Koor_Matkul;

class SilabusController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'silabus',
            // Memanggil semua isi dari tabel biodata
            'mata_kuliah' => Silabus_Matkul::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.kurikulum.silabus.index',$data);
        // dd($data['sistem-pembelajaran']);
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'silabus',
            // Mencari biodata berdasarkan id
            'mata_kuliah' => Silabus_Matkul::find($id),
            'mk_prasyarat' => Silabus_Matkul_Prasyarat::where('mk_id', '=', $id)->get(),
            'mk_softskills' =>  Silabus_mk_softskill::where('mk_id', '=', $id)->get(),
            'cp_matkul' => Silabus_cp_matkul::where('matakuliah_id', '=', $id)->get(),
            'koor' => Silabus_Koor_Matkul::where('mk_id', '=', $id)->get()
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.kurikulum.silabus.edit',$data);
    }


}
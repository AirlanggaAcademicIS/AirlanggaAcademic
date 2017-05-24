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
use App\Silabus_Matkul;
use App\Silabus_Matkul_Prasyarat;
use App\Silabus_Atribut_Softskill;
use App\Silabus_mk_softskill;
use App\Silabus_cp_matkul;
use App\Silabus_detail_media;
use App\Silabus_Sistem_Pembelajaran;
use App\Silabus_Koor_Matkul;
use App\Silabus_Media_Pembelajaran;
use App\Status_Team_Teaching;
use App\RPS_CP_Matkul;

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
        return view('dosen.kurikulum.silabus.index',$data);
        // dd($data['sistem-pembelajaran']);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'silabus',
            'mata_kuliah' => Silabus_Matkul::all(),            
            'mk_prasyarat' => Silabus_Matkul_Prasyarat::all(),
            'atribut_softskill' => Silabus_Atribut_Softskill::all(),
            'media_pembelajaran' => Silabus_Media_Pembelajaran::all(),            
            'metode_pembelajaran' => Silabus_Sistem_Pembelajaran::all(),                
            'status_team_teaching' => Status_Team_Teaching::all()
        ];

        // Memanggil tampilan form create
    	return view('dosen.kurikulum.silabus.create',$data);
    }

    public function createAction(Request $request)
    {
        //update to table mata_kuliah
        $matkul  = Silabus_Matkul::find($request->input('matkul'));
        $matkul->capaian_matkul = $request->input('capaian_matkul');
        $matkul->deskripsi_matkul  = $request->input('deskripsi_matkul');
        $matkul->penilaian_matkul = $request->input('penilaian_matkul');
        $matkul->pustaka_utama = $request->input('pustaka_utama');
        $matkul->save();

        //insert to table mk_prasyarat
        $mk_prasyarat  = new Silabus_Matkul_Prasyarat;
        $mk_prasyarat->mk_id = $request->input('matkul');
        $mk_prasyarat->mk_syarat_id = $request->input('mk_syarat_id');
        $mk_prasyarat->save();

        //insert to table mk_softskill
        $mk_softskill = new Silabus_mk_softskill;
        $mk_softskill->mk_id = $request->input('matkul');
        $mk_softskill->softskill_id = $request->input('softskill_id');
        $mk_softskill->save();

        //insert to table "mk-metode pembelajaran"
        

        //get capaian matakuliah where matkul chosen
        $cpmk = RPS_CP_Matkul::where('matakuliah_id', '=', $request->input('matkul'))->first();

        //insert to table detail_media_pembelajaran
        $detail_media = new Silabus_detail_media;
        $detail_media->cpmk_id = $cpmk->id_cpmk;
        $detail_media->save();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Sistem pembelajaran berhasil ditambahkan');
        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('/dosen/kurikulum/silabus');
        // dd($request->input('matkul'));
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $mata_kuliah = Silabus_Matkul::find($id);

        // Menghapus biodata yang dicari tadi
        $mata_kuliah->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Silabus berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
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
        return view('dosen.kurikulum.silabus.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $sp = Silabus_Matkul::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $sp->mata_kuliah = $request->input('mata_kuliah');

        $sp->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Silabus berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('kurikulum/silabus');
    }

}
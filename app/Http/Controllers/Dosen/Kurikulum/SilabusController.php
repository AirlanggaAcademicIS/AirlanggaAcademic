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
use DB;
use PDF;
// Tambahkan model yang ingin dipakai
use App\Silabus_Matkul;
use App\Silabus_Matkul_Prasyarat;
use App\Silabus_Atribut_Softskill;
use App\Silabus_mk_softskill;
use App\Silabus_detail_media;
use App\Silabus_detail_kategori;
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
            'mata_kuliah' => Silabus_Matkul::where('status_rps', '=', '2')->where('status_silabus', '=', '1')->get()
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
            'matkul_silabus' => Silabus_Matkul::where('status_rps', '=', '2')->where('status_silabus', '=', '0')->get(),
            'mata_kuliah' => Silabus_Matkul::all(),            
            // 'mk_prasyarat' => Silabus_Matkul_Prasyarat::all(),
            'atribut_softskill' => Silabus_Atribut_Softskill::all(),
           // 'media_pembelajaran' => Silabus_Media_Pembelajaran::all(),            
            'metode_pembelajaran' => Silabus_Sistem_Pembelajaran::all(),                
            // 'status_team_teaching' => Status_Team_Teaching::all()
        ];

        // Memanggil tampilan form create
        return view('dosen.kurikulum.silabus.create',$data);
    }

    public function autofill(Request $request)
    {   
        $id = $request->id;
        $data = Silabus_Matkul::where('id_mk', '=', $id)->first();
        return response()->json([
                'success' => true,
                'pustaka' => $data->pustaka_utama
            ]);                    
    }

    public function createAction(Request $request)
    {
        //get cpmk first (perlu dibenahi)
        $cpmk = RPS_CP_Matkul::where('matakuliah_id', '=', $request->input('matkul'))->first();
        //insert to table mk_softskill
        $softskillId = $request->input('softskill_id');
        for($count = 0; $count < count($softskillId); $count++)
        {
            $mk_softskill = new Silabus_mk_softskill;
            $mk_softskill->mk_id = $request->input('matkul');
            $mk_softskill->softskill_id = $softskillId[$count];
            $mk_softskill->save();            
        }
        //insert to table detail_media_pembelajaran (sistem pembelajaran/metode pembelajaran)
        $mksp = $request->input('sistem_pembelajaran_id');
        for($count  = 0 ; $count < count($mksp); $count++)
        {
            $mk_sp = new Silabus_detail_media;        
            $mk_sp->cpmk_id = $cpmk->id_cpmk ;
            $mk_sp->sistem_pembelajaran_id = $mksp[$count] ;
            $mk_sp->save();
        }
        //insert to table detail_kategori (media pembelajaran) 
        $mdp = $request->input('media_pembelajaran_id');
        for($count = 0; $count < count($mdp); $count++)
        {
            $detail_kategori = new Silabus_detail_kategori;
            $detail_kategori->media_pembelajaran_id = $mdp[$count];
            $detail_kategori->cpmk_id = $cpmk->id_cpmk;
            $detail_kategori->save();            
        }
        //update to table mata_kuliah
        $matkul  = Silabus_Matkul::find($request->input('matkul'));
        $matkul->penilaian_matkul = $request->input('penilaian_matkul');
        $matkul->pustaka_utama = $request->input('pustaka_utama');        
        $matkul->deskripsi_mata_ajar = $request->input('deskripsi_mata_ajar');
        $matkul->capaian_matkul = $request->input('capaian_matkul');
        $matkul->status_silabus = 1;
        $matkul->save();
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Silabus berhasil ditambahkan');
        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('/dosen/kurikulum/silabus');
        // dd($request->input('matkul'));
    }

    public function delete($id, Request $request)
    {
        $cpmk = RPS_CP_Matkul::where('matakuliah_id', '=', $id)->first();
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $mata_kuliah = Silabus_Matkul::find($id);
        $mksoftskill = Silabus_mk_softskill::where('mk_id', $id)->delete();
            
        // Menghapus biodata yang dicari tadi
        $mata_kuliah->status_silabus = '0';
        $mata_kuliah->save();

        Silabus_detail_media::where('cpmk_id', '=' ,$cpmk->id_cpmk)->delete();
        // $cpmatkul = RPS_CP_Matkul::where('matakuliah_id', $id)->delete();
        // $cpmatkul= Silabus_cp_matkul::where('matakuliah_id', $id)->get();


        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Silabus berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

    public function edit($id)
    {
        $cpmk = RPS_CP_Matkul::where('matakuliah_id', '=', $id)->first();
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'silabus',

            //get cpmk_id

            // Mencari biodata berdasarkan id
            'matkul_silabus' => Silabus_Matkul::find($id),
            'atribut_softskill' => Silabus_Atribut_Softskill::all(),    
            'mk_softskill' => Silabus_mk_softskill::where('mk_id', '=', $id)->get(),
            'metode_pembelajaran' => Silabus_Sistem_Pembelajaran::all(),
            'mk_metode_pembelajaran' => Silabus_detail_media::where('cpmk_id', '=', $cpmk->id_cpmk)->get(),            
            'media_pembelajaran' => Silabus_Media_Pembelajaran::all(),
            'mk_media_pembelajaran' => Silabus_detail_kategori::where('cpmk_id', '=', $cpmk->id_cpmk)->get()
        ];
        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.kurikulum.silabus.edit',$data);
    }

    public function editAction($id, Request $request)
    {        
        //get cpmk first
        $cpmk = RPS_CP_Matkul::where('matakuliah_id', '=', $id)->first();

        //update to table mk_softskill
        $softskillId = $request->input('softskill_id');
        $del_mk_softskill = Silabus_mk_softskill::where('mk_id', '=', $id)->delete();
        for($count = 0; $count < count($softskillId); $count++)
        {
            $mk_softskill = new Silabus_mk_softskill;
            $mk_softskill->mk_id = $id;
            $mk_softskill->softskill_id = $softskillId[$count];
            $mk_softskill->save();            
        }

        //update to table detail_media_pembelajaran (sistem pembelajaran/metode pembelajaran)
        $mksp = $request->input('sistem_pembelajaran_id');
        $del_mk_sp = Silabus_detail_media::where('cpmk_id', '=', $cpmk->id_cpmk)->delete();
        for($count  = 0 ; $count < count($mksp); $count++)
        {
            $mk_sp = new Silabus_detail_media;        
            $mk_sp->cpmk_id = $cpmk->id_cpmk ;
            $mk_sp->sistem_pembelajaran_id = $mksp[$count] ;
            $mk_sp->save();
        }

        //update to table detail_kategori (media pembelajaran) 
        $mdp = $request->input('media_pembelajaran_id');
        $del_detail_kategori = Silabus_detail_kategori::where('cpmk_id', '=', $cpmk->id_cpmk)->delete();
        for($count = 0; $count < count($mdp); $count++)
        {
            $detail_kategori = new Silabus_detail_kategori;
            $detail_kategori->media_pembelajaran_id = $mdp[$count];
            $detail_kategori->cpmk_id = $cpmk->id_cpmk;
            $detail_kategori->save();            
        }

        //update to table mata_kuliah
        $matkul  = Silabus_Matkul::find($id);
        $matkul->penilaian_matkul = $request->input('penilaian_matkul');
        $matkul->pustaka_utama = $request->input('pustaka_utama');        
        $matkul->deskripsi_mata_ajar = $request->input('deskripsi_mata_ajar');
        $matkul->capaian_matkul = $request->input('capaian_matkul');
        $matkul->status_silabus = 1;
        $matkul->save();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Silabus berhasil diedit');
        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('/dosen/kurikulum/silabus');
        // dd($request->input('matkul'));
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
            'cp_matkul' => RPS_CP_Matkul::where('matakuliah_id', '=', $id)->get(),               
            'mk_media_pembelajaran' => Silabus_detail_kategori::all(),
            'data_media' => DB::table('cp_mata_kuliah')->where('matakuliah_id', '=', $id)
                        ->join('detail_kategori', 'cp_mata_kuliah.id_cpmk', '=', 'detail_kategori.cpmk_id')
                        ->join('kategori_media_pembelajaran', 'detail_kategori.media_pembelajaran_id', '=', 'kategori_media_pembelajaran.id')->select('kategori_media_pembelajaran.media_pembelajaran', 'detail_kategori.media_pembelajaran_id')->groupBy('kategori_media_pembelajaran.media_pembelajaran', 'detail_kategori.media_pembelajaran_id')->get()                       
        ];
        $pdf = PDF::loadView('dosen.kurikulum.silabus.pdf-silabus', $data);
        return $pdf->download('silabus-mata-kuliah.pdf');
    }


}
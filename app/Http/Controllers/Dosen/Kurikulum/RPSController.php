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
use App\RPS_Matkul;
use App\RPS_Matkul_Prasyarat;
use App\RPS_CP_Matkul;
use App\RPS_CPL_Prodi;
use App\RPS_Koor_Matkul;
use App\Status_Team_Teaching;
use App\NamaDosenMK;
use App\RPS_Media_Pembelajaran;
use App\CapaianPembelajaran;
use App\RPS_Detail_Kategori;
use App\Silabus_Matkul;
use App\Silabus_detail_kategori;    
use App\Silabus_Matkul_prasyarat;
use PDF;
use DB;
use App\BiodataDosen;
use App\Silabus_Sistem_Pembelajaran;
use App\Minggu;
use App\RPSPerMinggu;
use App\RPS;
use App\RPS_Minggu;
use App\RPS_Pembelajaran;

class RPSController extends Controller
{

    public function index()
    {
        $data = [
            'page' => 'rps',
            'mata_kuliah' => RPS_Matkul::where('status_rps','=', '2')->get(),
        ];
        return view('dosen.kurikulum.rps.index',$data);
    }

    public function pilih_mk()
    {
        $data = [
            'page' => 'rps',
            'mata_kuliah' => RPS_Matkul::where('status_rps','=', '1')->get(),
        ];
        return view('dosen.kurikulum.rps.pilih-mk',$data);
    }

    public function pilihMk(Request $request)
    {
        $mk = $request->input('matkul');
        return Redirect::to('dosen/kurikulum/rps/lanjutan-rps/'.$mk);
    }

    public function ujian()
    {
        $data = [
            'page' => 'rps',
            'mata_kuliah' => RPS_Matkul::all(),
            'minggu_ke' => Minggu::all(),
            'minggu_ujian' => RPSPerMinggu::all(),
            'uts' => DB::table('mata_kuliah')
            ->join('mk_minggu', 'mk_minggu.mk_id', '=', 'mata_kuliah.id_mk')
            ->join('minggu', 'mk_minggu.minggu_id', '=', 'minggu.id_minggu')
            ->where('mk_minggu.status', '=', 0)
            ->get(),
            'uas' => DB::table('mata_kuliah')
            ->join('mk_minggu', 'mk_minggu.mk_id', '=', 'mata_kuliah.id_mk')
            ->join('minggu', 'mk_minggu.minggu_id', '=', 'minggu.id_minggu')
            ->where('mk_minggu.status', '=', 1)
            ->get(),
            ];
        return view('dosen.kurikulum.rps.set-ujian',$data);
    }

    public function setUjian(Request $request)
    {   
        $uts = RPSPerMinggu::create([
            'mk_id' => $request->input('matkul'),
            'minggu_id' => $request->input('uts'),
            'status' => 0,
            ]);
        $uts->save();

        $uas = RPSPerMinggu::create([
            'mk_id' => $request->input('matkul'),
            'minggu_id' => $request->input('uas'),
            'status' => 1,
            ]);
        $uas->save();
        return Redirect::to('dosen/kurikulum/rps/set-ujian/');
    }

    public function deleteUjian($id)
    {   
        $ujian = RPSPerMinggu::find($id);
        $ujian->delete();
        Session::put('alert-success', 'Plot ujian berhasil dihapus');
        return Redirect::back(); 
    }

    public function cp_mk()
    {
        $data = [
            'page' => 'rps',
            'mata_kuliah' => DB::table('mata_kuliah')
            ->join('cp_mata_kuliah', 'cp_mata_kuliah.matakuliah_id', '=', 'mata_kuliah.id_mk')
            ->join('detail_kategori', 'cp_mata_kuliah.id_cpmk', '=', 'detail_kategori.cpmk_id')
            ->join('kategori_media_pembelajaran', 'kategori_media_pembelajaran.id', '=', 'detail_kategori.media_pembelajaran_id')
            ->select('*')
            ->get(),
            'mk' => RPS_Matkul::all(),
            'cpmk' => RPS_CP_Matkul::all(),
            'media' => RPS_Media_Pembelajaran::all(),
            'mp' => RPS_Detail_Kategori::all()  
        ];

        return view('dosen.kurikulum.rps.cp-mk',$data);
    }

    public function cp_mkGetId(Request $request)
    {   
        $id = $request->id;
        $data = DB::table('mata_kuliah')
        ->where('id_mk', '=', $id)
        ->join('cp_mata_kuliah', 'cp_mata_kuliah.matakuliah_id', '=', 'mata_kuliah.id_mk')
        ->join('detail_kategori', 'cp_mata_kuliah.id_cpmk', '=', 'detail_kategori.cpmk_id')
        ->join('kategori_media_pembelajaran', 'kategori_media_pembelajaran.id', '=', 'detail_kategori.media_pembelajaran_id')        
        ->select('*')
        ->get();
        return response()->json([
                'success' => true,
                'dataMatkul' => $data
            ]);  
    }

    public function cpmk($id)
    {
        $data = [
            'page' => 'rps',
            'mata_kuliah' => DB::table('mata_kuliah')
            ->where('id_mk', '=', $id)
            ->join('cp_mata_kuliah', 'cp_mata_kuliah.matakuliah_id', '=', 'mata_kuliah.id_mk')
            ->join('detail_kategori', 'cp_mata_kuliah.id_cpmk', '=', 'detail_kategori.cpmk_id')
            ->join('kategori_media_pembelajaran', 'kategori_media_pembelajaran.id', '=', 'detail_kategori.media_pembelajaran_id')
            ->select('*')
            ->get(),
            'mk' => RPS_Matkul::all(),
            'cpmk' => RPS_CP_Matkul::all(),
            'media' => RPS_Media_Pembelajaran::all(),
            'mp' => RPS_Detail_Kategori::all()  
        ];

        return view('dosen.kurikulum.rps.cpmk',$data);
    }

    public function cpmkAction(Request $request)
    { 
        $matkul = $request->input('matkul');
        $cpmk = RPS_CP_Matkul::create([
            'matakuliah_id' => $request->input('matkul'),
            'kode_cpmk' => $request->input('kode_cpmk'),
            'deskripsi_cpmk' => $request->input('deskripsi_cpmk'),
            ]);
        $cpmk->save();
        $media = $request->input('media_pembelajaran');
        foreach ($media as $value) {
            RPS_Detail_Kategori::create([
                'media_pembelajaran_id' => $value,
                'cpmk_id' => $cpmk->id_cpmk,

                ]);
        }

        Session::put('alert-success', 'Kode CP MK berhasil ditambahkan');
        return Redirect::to('dosen/kurikulum/rps/cpmk/'.$matkul);
    }

     public function cpmkDelete($id)
    {
        $cpmk = RPS_CP_Matkul::find($id);
        $cpmk->delete();
        Session::put('alert-success', 'CP MK berhasil dihapus');
        return Redirect::back();     
    }

    public function create()
    {
        $data = [
            'page' => 'rps',
            'mata_kuliah' => RPS_Matkul::where('status_rps', '=', '0')->get(),
            'matkul' => RPS_Matkul::all(),
            'dosen' => NamaDosenMK::all(),
            'media' => RPS_Media_Pembelajaran::all(),
            'cpl' => CapaianPembelajaran::all()
        ];
        return view('dosen.kurikulum.rps.create',$data);
    }

    public function createAction(Request $request)
    {
        $mkSyaratId = $request->input('mk_syarat_id');
        for($count = 0; $count < count($mkSyaratId); $count++)
        {   
            $mk_prasyarat = new RPS_Matkul_Prasyarat;
            $mk_prasyarat->mk_id = $request->input('matkul');
            $mk_prasyarat->mk_syarat_id = $mkSyaratId[$count];
            $mk_prasyarat->save();
        }

        $cpemId = $request->input('cpem_id');
        for($count = 0; $count < count($cpemId); $count++)
        {   
            $cpl = new RPS_CPL_Prodi;
            $cpl->mk_id = $request->input('matkul');
            $cpl->cpem_id = $cpemId[$count];
            $cpl->save();
        }

        $koormk = RPS_Koor_Matkul::create([
            'nip_id' => $request->input('koor_mk'),
            'mk_id' => $request->input('matkul'),
            'status_tt_id' => 1,
            ]);
        $koormk->save();

        $koormk1 = RPS_Koor_Matkul::create([
            'nip_id' => $request->input('koor_mk1'),
            'mk_id' => $request->input('matkul'),
            'status_tt_id' => 2,
            ]);
        $koormk1->save();

        $koormk2 = RPS_Koor_Matkul::create([
            'nip_id' => $request->input('koor_mk2'),
            'mk_id' => $request->input('matkul'),
            'status_tt_id' => 3,
            ]);
        $koormk2->save();

        $koormk3 = RPS_Koor_Matkul::create([
            'nip_id' => $request->input('koor_mk3'),
            'mk_id' => $request->input('matkul'),
            'status_tt_id' => 4,
            ]);
        $koormk3->save();

        $matkul  = RPS_Matkul::find($request->input('matkul'));
        $matkul->deskripsi_matkul = $request->input('deskripsi_matkul');
        $matkul->pokok_pembahasan = $request->input('pokok_pembahasan');        
        $matkul->pustaka_utama = $request->input('pustaka_utama');
        $matkul->pustaka_pendukung = $request->input('pustaka_pendukung');
        $matkul->status_rps = 1;
        $matkul->save();
<<<<<<< HEAD
        return Redirect::to('dosen/kurikulum/rps/lanjutan-rps/'.$matkul);        
=======
        return view('dosen.kurikulum.rps.lanjutan-rps/'.$matkul);
>>>>>>> 51d35c1ddb4c47bc69e19accb81cb22e04df7d5e
    }

    public function delete($id, Request $request)
    {
        $matkul = RPS_Matkul::find($id);
        $matkul->status_rps = '0';
        $matkul->save();
        $rps = DB::table('rps')
            ->where('mata_kuliah', '=', $id)
            ->join('mata_kuliah', 'mata_kuliah.id_mk', '=', 'rps.mk_id')
            ->select('*')
            ->first();

        $del_minggu = RPSPerMinggu::where('mk_id', '=', $id)->delete();
        $del_rps_minggu = RPS_Minggu::where('rps_id', '=', $rps->id_rps)->delete();
        $del_metode = RPS_Pembelajaran::where('rps_id', '=', $rps->id_rps)->delete();
        $del_rps = RPS::where('id_rps', '=', $rps->id_rps)->delete();

        $cpmk = RPS_CP_Matkul::where('matakuliah_id', $id)->delete();
        $cpl_prodi = RPS_CPL_Prodi::where('mk_id', $id)->delete();
        $mk_prasyarat = RPS_Matkul_Prasyarat::where('mk_id',$id)->delete();
        $koormk = RPS_Koor_Matkul::where('mk_id',$id)->delete();

        Session::put('alert-success', 'RPS berhasil dihapus');
        return Redirect::back();     
    }

   public function edit($id)
    {
        $data= [
            'page' => 'rps',
            'mata_kuliah' => RPS_Matkul::find($id),
            'matkul' => RPS_Matkul::all(),
            'mk_prasyarat' => RPS_Matkul_Prasyarat::where('mk_id', '=', $id)->get(),
            'cp_prodi' => RPS_CPL_Prodi::where('mk_id', '=', $id)->get(),
            'cpl' => CapaianPembelajaran::all(),
            'koor' => RPS_Koor_Matkul::where('mk_id', '=', $id)->get(),
            'dosen' => BiodataDosen::all(),
        ];
        return view('dosen.kurikulum.rps.edit',$data);
    }

    public function editAction($id, Request $request)
    {

        $del_koormk = RPS_Koor_Matkul::where('mk_id', '=', $id)->delete();
        $koormk = RPS_Koor_Matkul::create([
            'nip_id' => $request->input('koor_1'),
            'mk_id' => $id,
            'status_tt_id' => 1,
            ]);
        $koormk->save();

        $koormk1 = RPS_Koor_Matkul::create([
            'nip_id' => $request->input('koor_2'),
            'mk_id' => $id,
            'status_tt_id' => 2,
            ]);
        $koormk1->save();

        $koormk2 = RPS_Koor_Matkul::create([
            'nip_id' => $request->input('koor_3'),
            'mk_id' => $id,
            'status_tt_id' => 3,
            ]);
        $koormk2->save();

        $koormk3 = RPS_Koor_Matkul::create([
            'nip_id' => $request->input('koor_4'),
            'mk_id' => $id,
            'status_tt_id' => 4,
            ]);
        $koormk3->save();

        $mk_syarat= $request->input('mk_syarat_id');
        $del_mk_prasyarat = RPS_Matkul_Prasyarat::where('mk_id', '=', $id)->delete();
        for($count = 0; $count < count($mk_syarat); $count++)
        {   
            $mk_prasyarat = new RPS_Matkul_Prasyarat;
            $mk_prasyarat->mk_id = $id;
            $mk_prasyarat->mk_syarat_id = $mk_syarat[$count];
            $mk_prasyarat->save();
        }

        $cpemId = $request->input('cpem_id');
        $del_cpem_id = RPS_CPL_Prodi::where('mk_id', '=', $id)->delete();
        for($count = 0; $count < count($cpemId); $count++)
        {   
            $cpl = new RPS_CPL_Prodi;
            $cpl->mk_id = $id;
            $cpl->cpem_id = $cpemId[$count];
            $cpl->save();
        }


        $mata_kuliah = RPS_Matkul::find($id);
        $mata_kuliah->id_mk = $id;
        $mata_kuliah->deskripsi_matkul = $request->input('deskripsi_matkul');
        $mata_kuliah->pokok_pembahasan = $request->input('pokok_pembahasan');
        $mata_kuliah->save();

        Session::put('alert-success', 'RPS berhasil diedit');
        return Redirect::to('/dosen/kurikulum/rps');
    }

     public function lanjutanRPS($id){
        $data = [
            'page' => 'rps', 
            'rps_lanjutan' => DB::table('rps')
            ->join('mata_kuliah', 'rps.mk_id', '=', 'mata_kuliah.id_mk')
            ->join('pembelajaran_rps', 'rps.id_rps', '=', 'pembelajaran_rps.rps_id')
            ->join('rps_minggu', 'rps.id_rps', '=', 'rps_minggu.rps_id')
            ->join('sistem_pembelajaran', 'pembelajaran_rps.sistem_pembelajaran_id', '=', 'sistem_pembelajaran.id')
            ->select('*')
            ->get(),
<<<<<<< HEAD
            'mata_kuliah' => DB::table('mata_kuliah')->where('id_mk', '=', $id)->first(),
=======
            'mata_kuliah' => RPS_Matkul::find($id),
>>>>>>> 51d35c1ddb4c47bc69e19accb81cb22e04df7d5e
            'minggu' => Minggu::all(),
            'rps' => RPS::all(),
            'metode_pembelajaran' => Silabus_Sistem_Pembelajaran::all(),
            'pembelajaran_rps' => RPS_Pembelajaran::all(),
<<<<<<< HEAD
        ];        
        return view('dosen.kurikulum.rps.lanjutan-rps',$data);
     }

    public function lanjutanRPSAction($id, Request $request){
=======
        ];
        return view('dosen.kurikulum.rps.lanjutan-rps',$data);
     }

     public function lanjutanRPSAction($id, Request $request){
>>>>>>> 51d35c1ddb4c47bc69e19accb81cb22e04df7d5e
        $rps = RPS::create([
            'mk_id' => $id,
            'kemampuan_akhir' => $request->input('kemampuan_akhir'),
            'indikator' => $request->input('indikator'),
            'kriteria' => $request->input('kriteria'),
            'kriteria_non_test' => $request->input('kriteria_non_test'),
            'waktu_pembelajaran' => $request->input('waktu_pembelajaran'),
            'tugas' => $request->input('tugas'),
            'materi_pembelajaran' => $request->input('materi_pembelajaran'),
            'bobot_penilaian' => $request->input('bobot_penilaian'),
        ]);
<<<<<<< HEAD
        $rps->save();
=======
       $rps->save();
>>>>>>> 51d35c1ddb4c47bc69e19accb81cb22e04df7d5e

       $id_rps = DB::table('rps')->latest('id_rps')->first()->id_rps;

       $minggu = RPS_Minggu::create([
            'rps_id' => $id_rps,
            'minggu_id' => $request->input('minggu'),
        ]);
       $minggu->save();

       $minggu_ke = DB::table('rps_minggu')->latest('minggu_id')->first()->minggu_id;

       $metode_pembelajaran = $request->input('metode_pembelajaran_id');
        for($count = 0; $count < count($metode_pembelajaran); $count++)
        {   
            $metode = new RPS_Pembelajaran;
            $metode->rps_id = $id_rps;
            $metode->sistem_pembelajaran_id = $metode_pembelajaran[$count];
            $metode->save();
<<<<<<< HEAD
        }       

       Session::put('alert-success', 'RPS Minggu Ke-'.$minggu_ke.' berhasil ditambahkan');
       return Redirect::to('dosen/kurikulum/rps/lanjutan-rps/'.$id);
    }
=======
        }

       Session::put('alert-success', 'RPS Minggu Ke-'.$minggu_ke.' berhasil ditambahkan');
       return Redirect::to('dosen/kurikulum/rps/lanjutan-rps/'.$id);
     }
>>>>>>> 51d35c1ddb4c47bc69e19accb81cb22e04df7d5e

     public function editLanjutanRPS($id){
        $data = [
            'page' => 'rps', 
            'mk' => DB::table('rps')
            ->where('id_rps', '=', $id)
            ->join('mata_kuliah', 'mata_kuliah.id_mk', '=', 'rps.mk_id')
            ->select('*')
            ->first(),
            'minggu' => Minggu::all(),
            'rps' => DB::table('rps')->where('id_rps', '=' , $id)->first(),
            'metode_pembelajaran' => Silabus_Sistem_Pembelajaran::all(),
            'pembelajaran_rps' => RPS_Pembelajaran::where('rps_id', '=', $id)->get(),
        ];
        return view('dosen.kurikulum.rps.edit-lanjutan-rps',$data);
     }

     public function editLanjutanRPSAction($id, Request $request){
        $mk = DB::table('rps')
            ->where('id_rps', '=', $id)
            ->join('mata_kuliah', 'mata_kuliah.id_mk', '=', 'rps.mk_id')
            ->select('*')
            ->first();

        $minggu = DB::table('rps_minggu')
            ->where('rps_id', '=', $id)
            ->first();

<<<<<<< HEAD
        $del_minggu = RPSPerMinggu::where('mk_id', '=', $mk->id_mk)->delete();
        $del_rps_minggu = RPS_Minggu::where('rps_id', '=', $id)->delete();
        $del_metode = RPS_Pembelajaran::where('rps_id', '=', $id)->delete();
        $del_rps = RPS::where('id_rps', '=', $id)->delete();
=======
        $del_rps = RPS::where('id_rps', '=', $id)->delete();
        $del_metode = RPS_Pembelajaran::where('rps_id', '=', $id)->delete();
>>>>>>> 51d35c1ddb4c47bc69e19accb81cb22e04df7d5e

        $rps = RPS::create([
            'mk_id' => $mk->id_mk,
            'kemampuan_akhir' => $request->input('kemampuan_akhir'),
            'indikator' => $request->input('indikator'),
            'kriteria' => $request->input('kriteria'),
            'kriteria_non_test' => $request->input('kriteria_non_test'),
            'waktu_pembelajaran' => $request->input('waktu_pembelajaran'),
            'tugas' => $request->input('tugas'),
            'materi_pembelajaran' => $request->input('materi_pembelajaran'),
            'bobot_penilaian' => $request->input('bobot_penilaian'),
        ]);
       $rps->save();

       $id_rps = DB::table('rps')->latest('id_rps')->first()->id_rps;

       $minggu = RPS_Minggu::create([
            'rps_id' => $id_rps,
            'minggu_id' => $minggu->minggu_id,
        ]);
       $minggu->save();

       $minggu_ke = DB::table('rps_minggu')->latest('minggu_id')->first()->minggu_id;

       $metode_pembelajaran = $request->input('metode_pembelajaran_id');
        for($count = 0; $count < count($metode_pembelajaran); $count++)
        {   
            $metode = new RPS_Pembelajaran;
            $metode->rps_id = $id_rps;
            $metode->sistem_pembelajaran_id = $metode_pembelajaran[$count];
            $metode->save();
        }
        
        Session::put('alert-success', 'RPS Lanjutan berhasil diedit');
        return Redirect::to('dosen/kurikulum/rps/lanjutan-rps/'.$mk->id_mk);
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
            'mk_media_pembelajaran' => Silabus_detail_kategori::all(),
            'data_media' => DB::table('cp_mata_kuliah')->where('matakuliah_id', '=', $id)
                        ->join('detail_kategori', 'cp_mata_kuliah.id_cpmk', '=', 'detail_kategori.cpmk_id')
                        ->join('kategori_media_pembelajaran', 'detail_kategori.media_pembelajaran_id', '=', 'kategori_media_pembelajaran.id')->select('kategori_media_pembelajaran.media_pembelajaran', 'detail_kategori.media_pembelajaran_id')->groupBy('kategori_media_pembelajaran.media_pembelajaran', 'detail_kategori.media_pembelajaran_id')->get(),                       
            'sub_cpmk' => DB::table('rps')->where('mk_id', '=', $id)
                        // ->join('mk_minggu', 'rps.mk_id', '=', 'mk_minggu.mk_id')
                        ->join('rps_minggu', 'rps.id_rps', '=', 'rps_minggu.rps_id')
                        ->get(),
            'metode_pembelajaran' => DB::table('cp_mata_kuliah')->where('matakuliah_id', '=', $id)
                        ->join('detail_media_pembelajaran', 'cp_mata_kuliah.id_cpmk', '=', 'detail_media_pembelajaran.cpmk_id')
                        ->join('sistem_pembelajaran', 'detail_media_pembelajaran.sistem_pembelajaran_id', '=', 'sistem_pembelajaran.id' )->get(),
            'getUts' => DB::table('mata_kuliah')->where('id_mk', '=', $id)
            ->join('mk_minggu', 'mk_minggu.mk_id', '=', 'mata_kuliah.id_mk')
            ->where('mk_minggu.status', '=', 0)
            ->first(),
            'getUas' => DB::table('mata_kuliah')->where('id_mk', '=', $id)
            ->join('mk_minggu', 'mk_minggu.mk_id', '=', 'mata_kuliah.id_mk')
            ->where('mk_minggu.status', '=', 1)
            ->first(),
        ];   
        // dd($data['getUas']->minggu_id);
        $pdf = PDF::loadView('dosen.kurikulum.rps.pdf-rps', $data);
        return $pdf->download('silabus-mata-kuliah.pdf');
    }

}
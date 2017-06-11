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

class RPSController extends Controller
{

    public function index()
    {
        $data = [
            'page' => 'rps',
            'mata_kuliah' => RPS_Matkul::where('status_rps','=', '1')->get(),
        ];
        return view('dosen.kurikulum.rps.index',$data);
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

        Session::put('alert-success', 'RPS berhasil ditambahkan');
        return Redirect::to('dosen/kurikulum/rps');
    }

    public function delete($id, Request $request)
    {
        $matkul = RPS_Matkul::find($id);
        $matkul->status_rps = '0';
        $matkul->save();

        $cpmk = RPS_CP_Matkul::where('matakuliah_id', $id)->delete();
        $cpl_prodi = RPS_CPL_Prodi::where('mk_id', $id)->delete();
        $mk_prasyarat = RPS_Matkul_Prasyarat::where('mk_id',$id)->delete();
        $koormk = RPS_Koor_Matkul::where('mk_id',$id)->delete();

    	Session::put('alert-success', 'RPS berhasil dihapus');
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
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
        $koormk = RPS_Koor_Matkul::where('mk_id',$id)->get();
        foreach ($koormk as $value) {
            if ($value->status_tt_id == '1') {
                $value->nip_id = $request->input('koor_1');
            }
            elseif ($value->status_tt_id == '2') {
                $value->nip_id = $request->input('koor_2');
            }
            elseif ($value->status_tt_id == '3') {
                $value->nip_id = $request->input('koor_3');
            }
            elseif ($value->status_tt_id == '4') {
                $value->nip_id = $request->input('koor_4');
            }
        }
        $mk_syarat = RPS_Matkul_Prasyarat::where('mk_id',$id);
        
        $mk_syarat= $request->input('mk_prasyarat');
        foreach ($mk_syarat as $mk) {
            RPS_Matkul_Prasyarat::create([
                'mk_id' => $id,
                'mk_syarat_id' => $mk
                ]);
        }
        $mk_prasyarat = RPS_Matkul_Prasyarat::where('mk_id',$id)->delete();
        $mata_kuliah = RPS_Matkul::find($id);
        $mata_kuliah->id_mk = $id;
        $mata_kuliah->deskripsi_matkul = $request->input('deskripsi_matkul');
        $mata_kuliah->pokok_pembahasan = $request->input('pokok_pembahasan');
        $mata_kuliah->save();

        Session::put('alert-success', 'RPS berhasil diedit');
        return Redirect::to('/dosen/kurikulum/rps');
    }

    public function pdf($id)
    {
        $cpProdi = RPS_CPL_Prodi::where('mk_id', '=', $id)->get();
        $cpmk = RPS_CP_Matkul::where('matakuliah_id', '=', $id)->first();        
        $data = [
            'matkul_silabus' => Silabus_Matkul::find($id),
            'cpem' => RPS_CPL_Prodi::where('mk_id', '=', $id)->get(),
            'mk_media_pembelajaran' => Silabus_detail_kategori::where('cpmk_id', '=', $cpmk->id_cpmk)->get(),
            'mk_prasyarat' => Silabus_Matkul_prasyarat::where('mk_id', '=', $id)->get(),
            'mk_dosen' => RPS_Koor_Matkul::where('mk_id', '=', $id)->get(),
            'cp_matkul' => RPS_CP_Matkul::where('matakuliah_id', '=', $id)->get()
        ];
        $pdf = PDF::loadView('dosen.kurikulum.rps.pdf-rps', $data);
        return $pdf->download('silabus-mata-kuliah.pdf');
    }

}
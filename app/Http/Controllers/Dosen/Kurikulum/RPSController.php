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

class RPSController extends Controller
{

    public function index()
    {
        $data = [
            'page' => 'rps',
            'mata_kuliah' => RPS_Matkul::where('status_rps','=', '1')
        ];
        return view('dosen.kurikulum.rps.index',$data);
    }

     public function cpmk()
    {
        $data = [
            'page' => 'rps',
            'mata_kuliah' => RPS_Matkul::all(),
            'cpmk' => RPS_CP_Matkul::all()  
        ];

        return view('dosen.kurikulum.rps.cpmk',$data);
    }

     public function cpmkAction($id,Request $request)
    {
        $mata_kuliah = RPS_Matkul::find($id);
        RPS_CP_Matkul::create($request->input());
        Session::put('alert-success', 'Kode berhasil ditambahkan');
        return Redirect::to('dosen/kurikulum/cpmk');
    }

     public function delete_cpmk($id)
    {
        $cpmk = RPS_CP_Matkul::find($id);
        $rps->delete();
        Session::put('alert-success', 'RPS berhasil dihapus');
        return Redirect::back();     
    }

    public function create()
    {
        $data = [
            'page' => 'rps',
            'mata_kuliah' => RPS_Matkul::all(),
            'dosen' => NamaDosenMK::all(),
            'media' => RPS_Media_Pembelajaran::all(),
            'cpl_prodi' => RPS_CPL_Prodi::all()
        ];
    	return view('dosen.kurikulum.rps.create',$data);
    }

    public function createAction(Request $request)
    {
        RPS_Matkul::create($request->input());
        Session::put('alert-success', 'RPS berhasil ditambahkan');
        return Redirect::to('dosen/kurikulum/rps');
    }

    public function delete($id, Request $request)
    {
        $matkul = RPS_Matkul::find($id);
        $matkul->status_rps = '0';
        $matkul->save();

        $cpmk = RPS_CP_Matkul::where('matakuliah_idk', $id)->delete();
        $cpl_prodi = RPS_CPL_Prodi::where('matakuliah_idk', $id)->delete();

        $rps->delete();
    	Session::put('alert-success', 'RPS berhasil dihapus');
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            'page' => 'rps',
            'mata_kuliah' => RPS_Matkul::find($id),
            'mk_prasyarat' => RPS_Matkul_Prasyarat::where('mk_id', '=', $id)->get(),
            'cp_mata_kuliah' => RPS_CP_Matkul::where('matakuliah_id', '=', $id)->get(),
            'cp_prodi' => RPS_CPL_Prodi::where('mk_id', '=', $id)->get(),
            'koor' => RPS_Koor_Matkul::where('mk_id', '=', $id)->get()
            // 'detail_kategori' => RPS_Detail_Kategori::where()
        ];
        return view('dosen.kurikulum.rps.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        $mata_kuliah = RPS_Matkul::find($id);
        $mata_kuliah->id = $id;
        $mata_kuliah->deskripsi_matkul = $request->input('deskripsi_matkul');
        $mata_kuliah->pokok_pembahasan = $request->input('pokok_pembahasan');
        $mata_kuliah->save();
        Session::put('alert-success', 'RPS berhasil diedit');
        return Redirect::to('dosen/kurikulum/index');
    }
}
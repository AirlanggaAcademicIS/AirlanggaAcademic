<?php 

namespace App\Http\Controllers\Pla;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\JadwalPermohonan;


class JadwalPermohonanController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            'page' => 'jadwalpermohonan',
            'jadwalpermohonan' => JadwalPermohonan::all()
        ];

        return view('pla.jadwal-permohonan.index',$data);
    }

    public function create()
    {
        $data = [
            'page' => 'jadwalpermohonan',
        ];
    	return view('pla.jadwal-permohonan.create',$data);
    }

    public function createAction(Request $request)
    {
        JadwalPermohonan::create($request->input());

        Session::put('alert-success', 'Jadwal Permohonan berhasil ditambahkan');

        return Redirect::to('pla/jadwal-permohonan/view');
    }

    public function delete($id)
    {
        $jadwalpermohonan = JadwalPermohonan::find($id);

        $jadwalpermohonan->delete();

    	Session::put('alert-success', 'Jadwal Permohonan berhasil dihapus');

      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            'page' => 'jadwalpermohonan',
            'jadwalpermohonan' => JadwalPermohonan::find($id)
        ];
        return view('pla.jadwal-permohonan.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        $jadwalpermohonan = JadwalPermohonan::find($id);

        $jadwalpermohonan->id_permohonan_ruang = $request->input('id_permohonan_ruang');
        $jadwalpermohonan->id_ruang = $request->input('id_ruang');
        $jadwalpermohonan->id_hari = $request->input('id_hari');
        $jadwalpermohonan->id_jam = $request->input('id_jam');
        $jadwalpermohonan->save();

        Session::put('alert-success', 'Jadwal Permohonan berhasil diedit');

        return Redirect::to('pla/jadwal-permohonan/view');
    }

}
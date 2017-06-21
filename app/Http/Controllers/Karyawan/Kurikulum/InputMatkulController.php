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
use DB; 
// Tambahkan model yang ingin dipakai
use App\MataKuliah;
use App\JenisMataKuliah;

class InputMatkulController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {   
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'input_matkul',
            // Memanggil semua isi dari tabel biodata
            'input_matkul' =>DB::table('mata_kuliah')
            ->join('jenis_mk', 'jenis_mk.id', '=', 'mata_kuliah.jenis_mk_id')
            ->select('mata_kuliah.*','jenis_mk.*')
            ->get(),
            'jenis_mk' =>JenisMataKuliah::all(),
        ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.kurikulum.mata-kuliah.index',$data);
    }

    public function createAction(Request $request)
    {        
        $isSame = false;
        $input_kode = $request->input('kode_matkul');
        $nama_matkul = $request->input('nama_matkul');
        $isSameKode = MataKuliah::where('kode_matkul', '=', $input_kode)->get()->count();
        $isSameName = MataKuliah::where('nama_matkul', '=', $nama_matkul)->get()->count();

        if($isSameKode == 0 && $isSameName == 0)
        {
            // Menginsertkan apa yang ada di form ke dalam tabel biodata
            MataKuliah::create($request->input());
            // Menampilkan notifikasi pesan sukses
            Session::put('alert-success', 'Mata Kuliah berhasil ditambahkan');

            // Kembali ke halaman mahasiswa/biodata
            return Redirect::to('karyawan/kurikulum/inputmatkul');
        }
        else
        {           
            Session::put('alert-danger', 'Kode Mata Kuliah atau Nama Mata Kuliah sudah diinputkan');

            return Redirect::to('karyawan/kurikulum/inputmatkul');
        }
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        DB::table('mata_kuliah')->where('id_mk', '=', $id)->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-danger', 'Mata Kuliah berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();
    }

    public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'kode',
            // Mencari biodata berdasarkan id
            'input_matkul' =>MataKuliah::find($id),
            'jenis_mk' => JenisMataKuliah::all(),
            'matkul_all' =>DB::table('mata_kuliah')
            ->join('jenis_mk', 'jenis_mk.id', '=', 'mata_kuliah.jenis_mk_id')
            ->select('mata_kuliah.*','jenis_mk.*')
            ->get(),

        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        // dd($data['kode_cpmatkul']);
        return view('karyawan.kurikulum.mata-kuliah.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        $isSame =  false ;
        $input_kode = $request->input('kode_matkul');
        $nama_matkul = $request->input('nama_matkul');
        $isSameKode = MataKuliah::where('kode_matkul', '=', $input_kode)->get()->count();
        $isSameName = MataKuliah::where('nama_matkul', '=', $nama_matkul)->get()->count();

        $getFromId = MataKuliah::find($id);

        if($isSameKode == 0 || $isSameName == 0)
        {

        $inputmk = MataKuliah::find($id);
        $inputmk->kode_matkul = $request->input('kode_matkul');
        $inputmk->nama_matkul = $request->input('nama_matkul');
        $inputmk->sks = $request->input('sks');
        $inputmk->jenis_mk_id = $request->input('jenis_mk_id');

        $inputmk->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Mata Kuliah berhasil diedit');
        }
        elseif (
        $getFromId->kode_matkul == $request->input('kode_matkul') &&
        $getFromId->nama_matkul == $request->input('nama_matkul') &&
        $getFromId->sks == $request->input('sks') &&
        $getFromId->jenis_mk_id == $request->input('jenis_mk_id')
            ) {
            Session::put('alert-warning', 'Tidak ada perubahan');
        }
        else
        {
            Session::put('alert-danger', 'Kode Mata Kuliah atau Nama Mata Kuliah sudah diinputkan');
        }

        return Redirect::to('karyawan/kurikulum/inputmatkul');
}
}
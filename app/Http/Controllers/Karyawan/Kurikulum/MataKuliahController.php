<?php 

namespace App\Http\Controllers\Karyawan\Kurikulum;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use PDF;
use Response;
// Tambahkan model yang ingin dipakai
use App\MataKuliah;
use App\JenisMataKuliah;

class MataKuliahController extends Controller
{
    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            'page' => 'mata-kuliah',
            'matkul' => MataKuliah::all(),
        ];

        return view('karyawan.kurikulum.mata-kuliah.index',$data);
    }

    public function toPdf($id)
    {
        $data = [
            'page' => 'mata-kuliah',
            'matkul' => MataKuliah::find($id),
            'jenis_matkul' =>JenisMataKuliah::all()
        ];

        $pdf = PDF::loadView('karyawan.kurikulum.mata-kuliah.pdf', $data);
        return $pdf->download('mata-kuliah.pdf');
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'mata-kuliah',
            'jenis_matkul' => JenisMataKuliah::all(),
        ];
        // Memanggil tampilan form create
        return view('karyawan.kurikulum.mata-kuliah.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        MataKuliah::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Mata Kuliah berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/kurikulum/mata-kuliah');
    }

    public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'mata-kuliah',
            'matkul' => MataKuliah::find($id),
            'jenis_matkul' =>JenisMataKuliah::all()
        ];

        return view('karyawan.kurikulum.mata-kuliah.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
 
        $matkul = $request->input();
 
        try {
            $result = MataKuliah::find($id)->update($matkul);
        } 
        catch (ValidatorException $e) {
            $result = $e->getMessageBag();
        }
    
        if($result['status']) {
            Session::put('alert-success', 'Mata Kuliah berhasil diubah');
            return Redirect::to('kurikulum/mata-kuliah');
        }
        else {
            return Redirect::to('kurikulum/mata-kuliah');
        }

        // Kembali ke halaman mahasiswa/biodata
    }

    public function delete($id)
    {
        $result = MataKuliah::find($id)->delete();
        Session::put('alert-success', 'Mata Kuliah telah berhasil dihapus.');
        return Redirect::back();     
    }

}
<?php 

namespace App\Http\Controllers\Kurikulum;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
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
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'mata-kuliah',
            // Memanggil semua isi dari tabel biodata
            'matkul' => MataKuliah::all(),
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        // dd($data['matkul']);
        return view('kurikulum.mata-kuliah.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'mata-kuliah',
            'jenis_matkul' => JenisMataKuliah::all()
        ];

        // Memanggil tampilan form create
        return view('kurikulum.mata-kuliah.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        MataKuliah::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Mata Kuliah berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('kurikulum/mata-kuliah');
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'biodata',
            // Mencari biodata berdasarkan id
            'matkul' => MataKuliah::find($id),
            'jenis_matkul' =>JenisMataKuliah::all()

        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('kurikulum.mata-kuliah.edit',$data);
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
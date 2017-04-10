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
use Illuminate\Support\Facades\DB;
// Tambahkan model yang ingin dipakai
use App\Mhs_pemohon_surat;
use App\Biodata;

class PermohonanSuratController extends Controller
{
    // Function untuk menampilkan tabel
    public function showMhs()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'surat_mhs',
            // Memanggil semua isi dari tabel biodata
            'biodata' => Mhs_pemohon_surat::join('biodata', 'Mhs_pemohon_surat.NIM', '=', 'biodata.NIM')
            ->join('surat_keluar_mhs', 'Mhs_pemohon_surat.id_surat_keluar', '=', 'surat_keluar_mhs.id_surat_keluar')->get(),
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('pla.permohonan-surat.index-mhs',$data);
    }
    

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'surat_mhs',
            'mhs' => Biodata::all(),
            'surat' => DB::table('surat_keluar_mhs')->get(),
        ];

        // Memanggil tampilan form create
        return view('pla.permohonan-surat.create-mhs',$data);
    }

    public function createAction(Request $request)
    {   
        $check= Mhs_pemohon_surat::where([
                    ['NIM', '=', $request->NIM],
                    ['id_surat_keluar', '=', $request->id_surat_keluar]
                ])->get();
        if(count($check)==0){
            Mhs_pemohon_surat::create($request->input());
        }
        // Menginsertkan apa yang ada di form ke dalam tabel biodata

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Mahasiswa Pemohon Surat berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('pla/PermohonanSuratMhs');
    }

    public function delete($id, $id2)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $biodata = Mhs_pemohon_surat::where([
                    ['NIM', '=', $id],
                    ['id_surat_keluar', '=', $id2]
                ])->delete();

        // Menghapus biodata yang dicari tadi
        

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Mahasiswa Pemohon Surat berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($id, $id2)
    {

        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'surat_mhs',
            'nim_mhs' => $id,
            'id_surat' => $id2,
            // Mencari biodata berdasarkan id
             'mhs' => Biodata::all(),
            'surat' => DB::table('surat_keluar_mhs')->get(),
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('pla.permohonan-surat.edit-mhs',$data);
    }

    public function editAction($id, $id2, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $biodata = Mhs_pemohon_surat::where([
                    ['NIM', '=', $id],
                    ['id_surat_keluar', '=', $id2]
                ])->update(['id_surat_keluar' => $request->input('id_surat_keluar')]);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
       

        // Notifikasi sukses
        Session::put('alert-success', 'Mahasiswa Pemohon Surat berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('pla/PermohonanSuratMhs');
    }

}
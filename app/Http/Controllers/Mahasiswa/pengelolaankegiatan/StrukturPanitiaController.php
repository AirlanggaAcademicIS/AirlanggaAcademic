<?php 

namespace App\Http\Controllers\Mahasiswa\pengelolaankegiatan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\PengajuanKegiatan;
use App\StrukturPanitia;
use App\JabatanPanitia;
use App\MahasiswaPanitia;
use App\MahasiswaPengajuan;

class StrukturPanitiaController extends Controller
{

    // Function untuk menampilkan tabel
    public function index($kegiatan_id)
    {

        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'struktur-panitia',
            // Memanggil semua isi dari tabel biodata

            'panitia' => MahasiswaPengajuan::all(),

            'jabatan' => JabatanPanitia::all(),

            'struktur' => StrukturPanitia::where("kegiatan_id",$kegiatan_id)->whereNull('deleted_at')->get(),

            'konfirmasiProposal' => PengajuanKegiatan::where("id_kegiatan",$kegiatan_id)->where("konfirmasi_proposal","0")->where("konfirmasi_lpj","0")->whereNull('deleted_at')->get(),

        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.pengelolaan-kegiatan.input-struktur-panitia.index',$data);
    }
    public function view()
    {
        # code...
         $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'daftar-konfirmasi',
            // Memanggil semua isi dari tabel biodata

            'konfirmasiProposal' => PengajuanKegiatan::where("konfirmasi_proposal","1")->where("konfirmasi_lpj","0")->whereNull('deleted_at')->get(),

            'konfirmasiLPJ' => PengajuanKegiatan::where("konfirmasi_lpj","2")->where("konfirmasi_proposal","1")->whereNull('deleted_at')->get()

        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.pengelolaan-kegiatan.input-struktur-panitia.view',$data);
    
    }

    public function createAction($id_kegiatan, Request $request)
    {
        # code...
        $user = StrukturPanitia::where("nim_id", $request->input('panitiaKegiatan'))->where("kegiatan_id",$id_kegiatan)->whereNull('deleted_at')->first();
           if ($user === null) {
               // user doesn't exist
                $strukturPanitia = new StrukturPanitia;
                $strukturPanitia->kegiatan_id = $id_kegiatan;
                $strukturPanitia->nim_id = $request->input('panitiaKegiatan');
                $strukturPanitia->jabatan_id = $request->input('jabatanPanitia');
                $strukturPanitia->save();

                Session::put('alert-success', 'Panitia Berhasil Ditambahkan');
            }
            else{
                // Notifikasi gagal
                Session::put('alert-danger', 'Gagal Ditambahkan! Panitia Telah Terdaftar Dalam Kepanitiaan');
        
            }
        
        return Redirect::to('mahasiswa/pengelolaan-kegiatan/input-struktur-panitia/'.$id_kegiatan.'');
   
    }
    public function edit($id)
        {
        # code...
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'struktur-panitia',
            // Memanggil semua isi dari tabel biodata

            'panitia' => MahasiswaPengajuan::all(),

            'jabatan' => JabatanPanitia::all(),

            'struktur' => StrukturPanitia::where("kegiatan_id",$id)->get(),

            'konfirmasiProposal' => PengajuanKegiatan::where("id_kegiatan",$id)->get(),

        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.pengelolaan-kegiatan.input-struktur-panitia.edit',$data);
    
    }


    public function editTambahAction($id_kegiatan, Request $request)
    {
        # code...
        $user = StrukturPanitia::where("nim_id", $request->input('panitiaKegiatan'))->where("kegiatan_id",$id_kegiatan)->whereNull('deleted_at')->first();
           if ($user === null) {
               // user doesn't exist
                $strukturPanitia = new StrukturPanitia;
                $strukturPanitia->kegiatan_id = $id_kegiatan;
                $strukturPanitia->nim_id = $request->input('panitiaKegiatan');
                $strukturPanitia->jabatan_id = $request->input('jabatanPanitia');
                $strukturPanitia->save();

                Session::put('alert-success', 'Panitia Berhasil Ditambahkan');
            }
            else{

        $id = $id_kegiatan;
        $nim = $request->input('panitiaKegiatan');
        $jabatan =  $request->input('jabatanPanitia');
        
        StrukturPanitia::where('kegiatan_id', $id)->where('nim_id',$nim)->whereNull('deleted_at')->update(array(
            'jabatan_id'    =>  $jabatan
        ));

        Session::put('alert-success', 'Panitia Berhasil Direvisi');
        
            
        }
        return Redirect::to('mahasiswa/pengelolaan-kegiatan/input-struktur-panitia/'.$id_kegiatan.'/edit');
   
    }

    public function TambahAction($id_kegiatan, Request $request)
    {
        # code...
        $user = StrukturPanitia::where("nim_id", $request->input('panitiaKegiatan'))->where("kegiatan_id",$id_kegiatan)->whereNull('deleted_at')->first();
           if ($user === null) {
               // user doesn't exist
                $strukturPanitia = new StrukturPanitia;
                $strukturPanitia->kegiatan_id = $id_kegiatan;
                $strukturPanitia->nim_id = $request->input('panitiaKegiatan');
                $strukturPanitia->jabatan_id = $request->input('jabatanPanitia');
                $strukturPanitia->save();

                Session::put('alert-success', 'Panitia Berhasil Ditambahkan');
            }
            else{

        $id = $id_kegiatan;
        $nim = $request->input('panitiaKegiatan');
        $jabatan =  $request->input('jabatanPanitia');
        
        StrukturPanitia::where('kegiatan_id', $id)->where('nim_id',$nim)->whereNull('deleted_at')->update(array(
            'jabatan_id'    =>  $jabatan
        ));

        Session::put('alert-success', 'Panitia Berhasil Direvisi');
        
            
        }
        return Redirect::to('mahasiswa/pengelolaan-kegiatan/input-struktur-panitia/'.$id_kegiatan);
   
    }

    

}
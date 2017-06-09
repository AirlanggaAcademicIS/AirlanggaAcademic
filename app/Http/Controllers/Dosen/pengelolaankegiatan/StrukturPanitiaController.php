<?php 

namespace App\Http\Controllers\Dosen\pengelolaankegiatan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\PengajuanKegiatan;
use App\StrukturPanitiaDosen;
use App\JabatanPanitia;
use App\DosenPanitia;
use App\DosenPengajuan;

class StrukturPanitiaController extends Controller
{

    // Function untuk menampilkan tabel
    public function index($kegiatan_id)
    {

        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'struktur-panitia',
            // Memanggil semua isi dari tabel biodata

            'panitia' => DosenPengajuan::all(),

            'jabatan' => JabatanPanitia::all(),

            'struktur' => StrukturPanitiaDosen::where("kegiatan_id",$kegiatan_id)->whereNull('deleted_at')->get(),

            'konfirmasiProposal' => PengajuanKegiatan::where("id_kegiatan",$kegiatan_id)->where("konfirmasi_proposal","0")->where("konfirmasi_lpj","0")->whereNull('deleted_at')->get(),

        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.pengelolaan-kegiatan.input-struktur-panitia.index',$data);
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
        return view('dosen.pengelolaan-kegiatan.input-struktur-panitia.view',$data);
    
    }

    public function createAction($id_kegiatan, Request $request)
    {
        # code...
        $user = StrukturPanitiaDosen::where("nip_id", $request->input('panitiaKegiatan'))->where("kegiatan_id",$id_kegiatan)->whereNull('deleted_at')->first();
           if ($user === null) {
               // user doesn't exist
                $strukturPanitia = new StrukturPanitiaDosen;
                $strukturPanitia->kegiatan_id = $id_kegiatan;
                $strukturPanitia->nip_id = $request->input('panitiaKegiatan');
                $strukturPanitia->jabatan_id = $request->input('jabatanPanitia');
                $strukturPanitia->save();

                Session::put('alert-success', 'Panitia Berhasil Ditambahkan');
            }
            else{
                // Notifikasi gagal
                Session::put('alert-danger', 'Gagal Ditambahkan! Panitia Telah Terdaftar Dalam Kepanitiaan');
        
            }
        
        return Redirect::to('dosen/pengelolaan-kegiatan/input-struktur-panitia/'.$id_kegiatan.'');
   
    }
    public function edit($id)
        {
        # code...
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'struktur-panitia',
            // Memanggil semua isi dari tabel biodata

            'panitia' => DosenPengajuan::all(),

            'jabatan' => JabatanPanitia::all(),

            'struktur' => StrukturPanitiaDosen::where("kegiatan_id",$id)->get(),

            'konfirmasiProposal' => PengajuanKegiatan::where("id_kegiatan",$id)->get(),

        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.pengelolaan-kegiatan.input-struktur-panitia.edit',$data);
    
    }


    public function editTambahAction($id_kegiatan, Request $request)
    {
        # code...
        $user = StrukturPanitiaDosen::where("nip_id", $request->input('panitiaKegiatan'))->where("kegiatan_id",$id_kegiatan)->whereNull('deleted_at')->first();
           if ($user === null) {
               // user doesn't exist
                $strukturPanitia = new StrukturPanitiaDosen;
                $strukturPanitia->kegiatan_id = $id_kegiatan;
                $strukturPanitia->nip_id = $request->input('panitiaKegiatan');
                $strukturPanitia->jabatan_id = $request->input('jabatanPanitia');
                $strukturPanitia->save();

                Session::put('alert-success', 'Panitia Berhasil Ditambahkan');
            }
            else{

        $id = $id_kegiatan;
        $nip = $request->input('panitiaKegiatan');
        $jabatan =  $request->input('jabatanPanitia');
        
        StrukturPanitiaDosen::where('kegiatan_id', $id)->where('nip_id',$nip)->whereNull('deleted_at')->update(array(
            'jabatan_id'    =>  $jabatan
        ));

        Session::put('alert-success', 'Panitia Berhasil Direvisi');
        
            
        }
        return Redirect::to('dosen/pengelolaan-kegiatan/input-struktur-panitia/'.$id_kegiatan.'/edit');
   
    }

    

}
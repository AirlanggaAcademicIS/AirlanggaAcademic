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
use App\KonfirmasiKegiatan;
use App\StrukturPanitiaDosen;
use App\JabatanPanitia;
use App\DosenPanitia;
use App\DosenPengajuan;

class StrukturPanitiaDosenController extends Controller
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

            'struktur' => StrukturPanitiaDosen::where("kegiatan_id",$kegiatan_id)->get(),

            'konfirmasiProposal' => KonfirmasiKegiatan::where("id_kegiatan",$kegiatan_id)->where("konfirmasi_proposal","1")->where("konfirmasi_lpj","0")->get(),

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

            'konfirmasiProposal' => KonfirmasiKegiatan::where("konfirmasi_proposal","1")->where("konfirmasi_lpj","0")->get(),

            'konfirmasiLPJ' => KonfirmasiKegiatan::where("konfirmasi_lpj","2")->where("konfirmasi_proposal","1")->get()

        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.pengelolaan-kegiatan.input-struktur-panitia.view',$data);
    
    }

    public function createAction($id_kegiatan, Request $request)
    {
        # code...
        $user = StrukturPanitiaDosen::where("nip_id", $request->input('panitiaKegiatan'))->where("kegiatan_id",$id_kegiatan)->first();
        
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


}
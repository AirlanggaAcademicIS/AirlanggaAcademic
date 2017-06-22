<?php 

namespace App\Http\Controllers\Karyawan\pengelolaankegiatan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\KonfirmasiKegiatan;
use App\RincianDana;
use App\RincianRundown;


class KonfirmasiKegiatanController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {

        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konfirmasi-kegiatan',
            // Memanggil semua isi dari tabel biodata

            'konfirmasiProposal' => KonfirmasiKegiatan::where("konfirmasi_proposal","0")->where("konfirmasi_lpj","0")->get(),

            'konfirmasiLPJ' => KonfirmasiKegiatan::where("konfirmasi_lpj","1")->where("konfirmasi_proposal","1")->get()

        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.pengelolaan-kegiatan.konfirmasi-kegiatan.index',$data);
    }

    public function indexLPJ()
    {

        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konfirmasi-kegiatan',
            // Memanggil semua isi dari tabel biodata

            'konfirmasiProposal' => KonfirmasiKegiatan::where("konfirmasi_proposal","0")->where("konfirmasi_lpj","0")->get(),

            'konfirmasiLPJ' => KonfirmasiKegiatan::where("konfirmasi_lpj","1")->where("konfirmasi_proposal","1")->get()

        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.pengelolaan-kegiatan.konfirmasi-kegiatan.indexLPJ',$data);
    }

    public function setujuiActionProposal($id_kegiatan, Request $request)
    {
        # code...
        $konfirmasi_proposal = KonfirmasiKegiatan::find($id_kegiatan);
        $konfirmasi_proposal->revisi = $request->input('revisiProposal');
        $konfirmasi_proposal->konfirmasi_proposal = 1;
        $konfirmasi_proposal->save();
           
        // Notifikasi sukses
        Session::put('alert-success', 'Proposal telah disetujui');

        return Redirect::to('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan');
   
    }


    public function tolakActionProposal($id_kegiatan, Request $request)
    {
        # code...
        $konfirmasi_proposal = KonfirmasiKegiatan::find($id_kegiatan);

        $konfirmasi_proposal->revisi = $request->input('revisiProposal');
        $konfirmasi_proposal->konfirmasi_proposal = 2;
        $konfirmasi_proposal->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Proposal telah ditolak');

        return Redirect::to('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan'); 
    }
    

    public function setujuiActionLPJ($id_kegiatan, Request $request)
    {
        # code...
        $konfirmasi_lpj = KonfirmasiKegiatan::find($id_kegiatan);

        $konfirmasi_lpj->revisi = $request->input('revisiLPJ');
        $konfirmasi_lpj->konfirmasi_lpj =2;
        $konfirmasi_lpj->save();

        // Notifikasi sukses
        Session::put('alert-success', 'LPJ telah disetujui');

        return Redirect::to('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan');           
    }


    public function tolakActionLPJ($id_kegiatan, Request $request)
    {
        # code...
        $konfirmasi_proposal = KonfirmasiKegiatan::find($id_kegiatan);

        $konfirmasi_proposal->revisi = $request->input('revisiLPJ');
        $konfirmasi_proposal->konfirmasi_lpj = 3;
        $konfirmasi_proposal->save();
        
        // Notifikasi sukses
        Session::put('alert-success', 'LPJ telah ditolak');

   
        return Redirect::to('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan');
    }
    
}
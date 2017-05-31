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
use App\Dokumentasi;
use App\KategoriDana;

class DetailPengajuanController extends Controller
{

    // Function untuk menampilkan tabel
    public function index($id_kegiatan)
    {
            $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konfirmasi-kegiatan',
            // Memanggil semua isi dari tabel biodata

            'konfirmasiKegiatan' => KonfirmasiKegiatan::where('id_kegiatan',$id_kegiatan)->get(),
            'lpj' => Dokumentasi::where('kegiatan_id',$id_kegiatan)->get(),
            'rundownProposal' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','0')->get(),
            'danaProposal' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','0')->get(),
            'rundownLPJ' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','1')->get(),
            'danaLPJ' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','1')->get()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.pengelolaan-kegiatan.detail-pengajuan.index',$data);
    }

    
}
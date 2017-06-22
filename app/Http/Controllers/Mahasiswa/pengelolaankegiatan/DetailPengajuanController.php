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
use App\RincianDana;
use App\RincianRundown;
use App\Dokumentasi;
use App\KategoriDana;
use App\StrukturPanitia;
use App\BiodataMahasiswa;
use App\MahasiswaPanitia;
use App\MahasiswaPengajuan;
use App\JabatanPanitia;

class DetailPengajuanController extends Controller
{

    // Function untuk menampilkan tabel
    public function index($id_kegiatan)
    {
            $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konfirmasi-kegiatan',
            // Memanggil semua isi dari tabel biodata

            'konfirmasiKegiatan' => PengajuanKegiatan::where('id_kegiatan',$id_kegiatan)->get(),
            'lpj' => Dokumentasi::where('kegiatan_id',$id_kegiatan)->get(),
            'rundownProposal' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','0')->get(),
            'danaProposal' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','0')->get(),
            'rundownLPJ' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','1')->get(),
            'danaLPJ' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','1')->get(),
            'status' => StrukturPanitia::where('kegiatan_id',$id_kegiatan)->get(),
            'jabatan' => JabatanPanitia::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.pengelolaan-kegiatan.detail-pengajuan.index',$data);
    }

     public function indexLPJ($id_kegiatan)
    {
            $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konfirmasi-kegiatan',
            // Memanggil semua isi dari tabel biodata

            'konfirmasiKegiatan' => PengajuanKegiatan::where('id_kegiatan',$id_kegiatan)->get(),
            'lpj' => Dokumentasi::where('kegiatan_id',$id_kegiatan)->get(),
            'rundownProposal' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','0')->get(),
            'danaProposal' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','0')->get(),
            'rundownLPJ' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','1')->get(),
            'danaLPJ' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','1')->get(),
            'status' => StrukturPanitia::where('kegiatan_id',$id_kegiatan)->get(),
            'jabatan' => JabatanPanitia::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.pengelolaan-kegiatan.detail-pengajuan.indexLPJ',$data);
    }
     // Function untuk menampilkan tabel
    public function indexRevisi($id_kegiatan)
    {
            $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konfirmasi-kegiatan',
            // Memanggil semua isi dari tabel biodata

            'konfirmasiKegiatan' => PengajuanKegiatan::where('id_kegiatan',$id_kegiatan)->get(),
            'lpj' => Dokumentasi::where('kegiatan_id',$id_kegiatan)->get(),
            'rundownProposal' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','0')->get(),
            'danaProposal' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','0')->get(),
            'rundownLPJ' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','1')->get(),
            'danaLPJ' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','1')->get(),
            'status' => StrukturPanitia::where('kegiatan_id',$id_kegiatan)->get(),
            'jabatan' => JabatanPanitia::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.pengelolaan-kegiatan.detail-pengajuan.indexRevisi',$data);
    }

     public function indexLPJRevisi($id_kegiatan)
    {
            $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'konfirmasi-kegiatan',
            // Memanggil semua isi dari tabel biodata

            'konfirmasiKegiatan' => PengajuanKegiatan::where('id_kegiatan',$id_kegiatan)->get(),
            'lpj' => Dokumentasi::where('kegiatan_id',$id_kegiatan)->get(),
            'rundownProposal' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','0')->get(),
            'danaProposal' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','0')->get(),
            'rundownLPJ' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','1')->get(),
            'danaLPJ' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','1')->get(),
            'status' => StrukturPanitia::where('kegiatan_id',$id_kegiatan)->get(),
            'jabatan' => JabatanPanitia::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('mahasiswa.pengelolaan-kegiatan.detail-pengajuan.indexLPJRevisi',$data);
    }
}
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
use App\PengajuanKegiatan;
use App\RincianDana;
use App\RincianRundown;
use App\Dokumentasi;
use App\KategoriDana;
use App\StrukturPanitia;
use App\BiodataMahasiswa;
use App\MahasiswaPanitia;
use App\MahasiswaPengajuan;
use App\StrukturPanitiaDosen;
use App\DosenPanitia;
use App\DosenPengajuan;
use App\JabatanPanitia;

class DetailPengajuanController extends Controller
{

    // Function untuk menampilkan tabel
    public function index($id_kegiatan)
    {
             $struktur = StrukturPanitia::where('kegiatan_id',$id_kegiatan)->count();
             if($struktur>0){
                         $data = [
                         // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
                         'page' => 'konfirmasi-kegiatan',
                         // Memanggil semua isi dari tabel biodata
             
                         'konfirmasiKegiatan' => PengajuanKegiatan::where('id_kegiatan',$id_kegiatan)->get(),
                         'lpj' => Dokumentasi::where('kegiatan_id',$id_kegiatan)->get(),
                         'rundownProposal' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','0')->get(),
                         'danaProposal' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','0')->get(),
                         'rundownLPJ' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','0')->get(),
                         'danaLPJ' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','0')->get(),
                         'struktur' => StrukturPanitia::where('kegiatan_id',$id_kegiatan)->get(),
                         'jabatan' => JabatanPanitia::all()
        ];
        return view('karyawan.pengelolaan-kegiatan.detail-pengajuan.index',$data);
                     }
                     else{
                         $data = [
                         // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
                         'page' => 'konfirmasi-kegiatan',
                         // Memanggil semua isi dari tabel biodata
             
                         'konfirmasiKegiatan' => PengajuanKegiatan::where('id_kegiatan',$id_kegiatan)->get(),
                         'lpj' => Dokumentasi::where('kegiatan_id',$id_kegiatan)->get(),
                         'rundownProposal' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','0')->get(),
                         'danaProposal' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','0')->get(),
                         'rundownLPJ' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','0')->get(),
                         'danaLPJ' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','0')->get(),
                         'struktur' => StrukturPanitiaDosen::where('kegiatan_id',$id_kegiatan)->get(),
                         'jabatan' => JabatanPanitia::all()
        ];
        return view('karyawan.pengelolaan-kegiatan.detail-pengajuan.indexDosen',$data);

                     }
            

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
    }

    public function indexKonfirmasi($id_kegiatan)
    {
             $struktur = StrukturPanitia::where('kegiatan_id',$id_kegiatan)->count();
             if($struktur>0){
                         $data = [
                         // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
                         'page' => 'konfirmasi-kegiatan',
                         // Memanggil semua isi dari tabel biodata
             
                         'konfirmasiKegiatan' => PengajuanKegiatan::where('id_kegiatan',$id_kegiatan)->get(),
                         'lpj' => Dokumentasi::where('kegiatan_id',$id_kegiatan)->get(),
                         'rundownProposal' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','0')->get(),
                         'danaProposal' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','0')->get(),
                         'rundownLPJ' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','0')->get(),
                         'danaLPJ' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','0')->get(),
                         'struktur' => StrukturPanitia::where('kegiatan_id',$id_kegiatan)->get(),
                         'jabatan' => JabatanPanitia::all()
                     ];
                     return view('karyawan.pengelolaan-kegiatan.detail-pengajuan.indexKonfirmasi',$data);
                         }
                         else{
                         $data = [
                         // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
                         'page' => 'konfirmasi-kegiatan',
                         // Memanggil semua isi dari tabel biodata
             
                         'konfirmasiKegiatan' => PengajuanKegiatan::where('id_kegiatan',$id_kegiatan)->get(),
                         'lpj' => Dokumentasi::where('kegiatan_id',$id_kegiatan)->get(),
                         'rundownProposal' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','0')->get(),
                         'danaProposal' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','0')->get(),
                         'rundownLPJ' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','0')->get(),
                         'danaLPJ' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','0')->get(),
                         'struktur' => StrukturPanitiaDosen::where('kegiatan_id',$id_kegiatan)->get(),
                         'jabatan' => JabatanPanitia::all()
                     ];
                     return view('karyawan.pengelolaan-kegiatan.detail-pengajuan.indexKonfirmasiDosen',$data);
                            
                         }

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
    }
    public function indexLPJ($id_kegiatan)
    {
             $struktur = StrukturPanitia::where('kegiatan_id',$id_kegiatan)->count();
             if($struktur>0){
                             $data = [
                         // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
                         'page' => 'konfirmasi-kegiatan',
                         // Memanggil semua isi dari tabel biodata
             
                         'konfirmasiKegiatan' => PengajuanKegiatan::where('id_kegiatan',$id_kegiatan)->get(),
                         'lpj' => Dokumentasi::where('kegiatan_id',$id_kegiatan)->get(),
                         'rundownProposal' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','1')->get(),
                         'danaProposal' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','1')->get(),
                         'rundownLPJ' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','1')->get(),
                         'danaLPJ' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','1')->get(),
                         'struktur' => StrukturPanitiaDosen::where('kegiatan_id',$id_kegiatan)->get(),
                         'jabatan' => JabatanPanitia::all()
                     ];
                     return view('karyawan.pengelolaan-kegiatan.detail-pengajuan.indexLPJ',$data);
                         
             }
             else{
                      $data = [
                         // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
                         'page' => 'konfirmasi-kegiatan',
                         // Memanggil semua isi dari tabel biodata
             
                         'konfirmasiKegiatan' => PengajuanKegiatan::where('id_kegiatan',$id_kegiatan)->get(),
                         'lpj' => Dokumentasi::where('kegiatan_id',$id_kegiatan)->get(),
                         'rundownProposal' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','1')->get(),
                         'danaProposal' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','1')->get(),
                         'rundownLPJ' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','1')->get(),
                         'danaLPJ' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','1')->get(),
                         'struktur' => StrukturPanitiaDosen::where('kegiatan_id',$id_kegiatan)->get(),
                         'jabatan' => JabatanPanitia::all()
                     ];
                     return view('karyawan.pengelolaan-kegiatan.detail-pengajuan.indexLPJDosen',$data);
             }
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
    }
    public function indexLPJKonfirmasi($id_kegiatan)
    {
               $struktur = StrukturPanitia::where('kegiatan_id',$id_kegiatan)->count();
             if($struktur>0){
                           $data = [
                         // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
                         'page' => 'konfirmasi-kegiatan',
                         // Memanggil semua isi dari tabel biodata
             
                         'konfirmasiKegiatan' => PengajuanKegiatan::where('id_kegiatan',$id_kegiatan)->get(),
                         'lpj' => Dokumentasi::where('kegiatan_id',$id_kegiatan)->get(),
                         'rundownProposal' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','1')->get(),
                         'danaProposal' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','1')->get(),
                         'rundownLPJ' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','1')->get(),
                         'danaLPJ' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','1')->get(),
                         'struktur' => StrukturPanitiaDosen::where('kegiatan_id',$id_kegiatan)->get(),
                         'jabatan' => JabatanPanitia::all()
                     ];
                     return view('karyawan.pengelolaan-kegiatan.detail-pengajuan.indexLPJKonfirmasi',$data);
                         }
                         else{
                           $data = [
                         // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
                         'page' => 'konfirmasi-kegiatan',
                         // Memanggil semua isi dari tabel biodata
             
                         'konfirmasiKegiatan' => PengajuanKegiatan::where('id_kegiatan',$id_kegiatan)->get(),
                         'lpj' => Dokumentasi::where('kegiatan_id',$id_kegiatan)->get(),
                         'rundownProposal' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','1')->get(),
                         'danaProposal' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','1')->get(),
                         'rundownLPJ' => RincianRundown::where('kegiatan_id',$id_kegiatan)->where('kategori_rundown','1')->get(),
                         'danaLPJ' => RincianDana::where('kegiatan_id',$id_kegiatan)->where('kategori_dana','1')->get(),
                         'struktur' => StrukturPanitiaDosen::where('kegiatan_id',$id_kegiatan)->get(),
                         'jabatan' => JabatanPanitia::all()
                     ];
                     return view('karyawan.pengelolaan-kegiatan.detail-pengajuan.indexLPJKonfirmasiDosen',$data);
                            
                         }
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
    }

}
<?php 

namespace App\Http\Controllers\Dosen;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\PenelitianDosen;
use App\JurnalDosen;
use App\PengmasDosen;
use App\Konferensi;


class ValidasiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index_jurnal()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar penelitian
            'page' => 'validasi',
            // Memanggil semua isi dari tabel penelitian
            'jurnal' => JurnalDosen::where('status_jurnal',0)->get(),
        ];

        // Memanggil tampilan index di folder mahasiswa/penelitian dan juga menambahkan $data tadi di view
        return view('dosen.validasi.index_jurnal',$data);
    }

    public function index_penelitian()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar penelitian
            'page' => 'validasi',
            // Memanggil semua isi dari tabel penelitian
            'penelitian' => PenelitianDosen::where('status_penelitian',0)->get(),
        ];

        // Memanggil tampilan index di folder mahasiswa/penelitian dan juga menambahkan $data tadi di view
        return view('dosen.validasi.index_penelitian',$data);
    }

    public function index_konferensi()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar penelitian
            'page' => 'validasi',
            // Memanggil semua isi dari tabel penelitian
            'konferensi' => Konferensi::where('status_konferensi',0)->get(),
        ];

        // Memanggil tampilan index di folder mahasiswa/penelitian dan juga menambahkan $data tadi di view
        return view('dosen.validasi.index_konferensi',$data);
    }

    public function index_pengmas()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar penelitian
            'page' => 'validasi',
            // Memanggil semua isi dari tabel penelitian
            'pengmas' => PengmasDosen::where('status_pengmas',0)->get(),
        ];

        // Memanggil tampilan index di folder mahasiswa/penelitian dan juga menambahkan $data tadi di view
        return view('dosen.validasi.index_pengmas',$data);
    }

     public function terima_penelitian($penelitian_id)
    {
        // Mencari penelitian berdasarkan id dan memasukkannya ke dalam variabel $penelitian
        $penelitian = PenelitianDosen::find($penelitian_id);

        // Menghapus penelitian yang dicari tadi
        $penelitian->status_penelitian=1;
        $penelitian->save();
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'penelitian diterima');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

         public function terima_jurnal($jurnal_id)
    {
        // Mencari penelitian berdasarkan id dan memasukkannya ke dalam variabel $penelitian
        $penelitian = JurnalDosen::find($jurnal_id);

        // Menghapus penelitian yang dicari tadi
        $penelitian->status_jurnal=1;
        $penelitian->save();
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'jurnal diterima');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

     public function terima_konferensi($konferensi_id)
    {
        // Mencari penelitian berdasarkan id dan memasukkannya ke dalam variabel $penelitian
        $konferensi = Konferensi::find($konferensi_id);

        // Menghapus penelitian yang dicari tadi
        $konferensi->status_konferensi=1;
        $konferensi->save();
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'konferensi diterima');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

    public function terima_pengmas($pengmas_id)
    {
        // Mencari penelitian berdasarkan id dan memasukkannya ke dalam variabel $penelitian
        $penelitian = PengmasDosen::find($pengmas_id);

        // Menghapus penelitian yang dicari tadi
        $penelitian->status_pengmas=1;
        $penelitian->save();
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'pengmas diterima');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

    public function tolak_penelitian($penelitian_id)
    {
        // Mencari penelitian berdasarkan id dan memasukkannya ke dalam variabel $penelitian
        $penelitian = PenelitianDosen::find($penelitian_id);

        // Menghapus penelitian yang dicari tadi
        $penelitian->status_penelitian=2;
        $penelitian->save();
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'penelitian ditolak');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

         public function tolak_jurnal($jurnal_id)
    {
        // Mencari penelitian berdasarkan id dan memasukkannya ke dalam variabel $penelitian
        $penelitian = JurnalDosen::find($jurnal_id);

        // Menghapus penelitian yang dicari tadi
        $penelitian->status_jurnal=2;
        $penelitian->save();
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'jurnal ditolak');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

     public function tolak_konferensi($konferensi_id)
    {
        // Mencari penelitian berdasarkan id dan memasukkannya ke dalam variabel $penelitian
        $penelitian = Konferensi::find($konferensi_id);
        $penelitian->save();
        // Menghapus penelitian yang dicari tadi
        $penelitian->status_konferensi=2;

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'konferensi ditolak');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

    public function tolak_pengmas($pengmas_id)
    {
        // Mencari penelitian berdasarkan id dan memasukkannya ke dalam variabel $penelitian
        $penelitian = PengmasDosen::find($pengmas_id);

        // Menghapus penelitian yang dicari tadi
        $penelitian->status_pengmas=2;
        $penelitian->save();
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'pengmas ditolak');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

    }
<?php 

namespace App\Http\Controllers\Karyawan\KrsKhs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
use DB;
// Tambahkan model yang ingin dipakai
use App\Models\KrsKhs\JadwalKuliah;
use App\Models\KrsKhs\MKDitawarkan;
use App\Models\KrsKhs\Jam;
use App\Models\KrsKhs\Hari;
use App\Models\KrsKhs\Ruang;
use App\Models\KrsKhs\MataKuliah;
use App\Models\KrsKhs\TahunAkademik;



class JadwalKuliahController extends Controller
{

    // Function untuk menampilkan tabel

   
    public function index()
    {
        $thn=TahunAkademik::count();
        $mk=MKDitawarkan::select('id_mk_ditawarkan')->where('thn_akademik_id',$thn)->get();
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
           
        'page' => 'jadwal_kuliah',
        
        'jadwal_kuliah'=>JadwalKuliah::whereIn('mk_ditawarkan_id',$mk)->get(),
        ];
        // Memanggil tampilan index di folder krs-khs/ruang dan juga menambahkan $data tadi di view
        return view('karyawan.krs-khs.jadwal_kuliah.index',$data);
    }
     
     public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'jadwal',
            // Memanggil semua isi dari tabel ruang
            'jadwal' => Hari::all(),

            'jadwal2' =>Jam::all(),


             'jadwal3' =>Ruang::all(),

             'jadwal4' =>MKDitawarkan::all()



        ];
        // Memanggil tampilan form create
        return view('karyawan.krs-khs.jadwal_kuliah.create',$data);
    }

    public function createAction(Request $request){
            JadwalKuliah::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Jadwal Kuliah berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/krs-khs/jadwal_kuliah/index');
    }
     
     public function delete($mk_ditawarkan_id)
    {
        // Mencari ruang berdasarkan id dan memasukkannya ke dalam variabel $ruang
        $jadwal = JadwalKuliah::find($mk_ditawarkan_id);

        // Menghapus ruang yang dicari tadi
        $jadwal->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Ruang berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }
    public function input(Request $request)
    {
        $data = $request->input('cek');
        return view('.inventarisasset.input');
    }
     public function edit($mk_ditawarkan_id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'jadwal',
            // Mencari ruang berdasarkan id
            'jadwal' => JadwalKuliah::where('mk_ditawarkan_id',$mk_ditawarkan_id)->first(),

            'jadwal5' => Hari::all(),

            'jadwal2' =>Jam::all(),

             'jadwal3' =>Ruang::all(),

             'jadwal4' =>MKDitawarkan::all()
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.krs-khs.jadwal_kuliah.edit',$data);
    }

    public function editAction($mk_ditawarkan_id, Request $request)
    {
        // Mencari ruang yang akan di update dan menaruhnya di variabel $ruang
        $jadwal = JadwalKuliah::where('mk_ditawarkan_id',$mk_ditawarkan_id)->first();

        // Mengupdate $ruang tadi dengan isi dari form edit tadi
        $jadwal->mk_ditawarkan_id = $request->input('mk_ditawarkan_id');
        $jadwal->jam_id = $request->input('jam_id');
        $jadwal->hari_id = $request->input('hari_id');
        $jadwal->ruang_id = $request->input('ruang_id');
        $jadwal->save();

        // Notifikasi sukses
        Session::put('alert-success', 'jadwal berhasil diedit');

        // Kembali ke halaman krs-khs/ruang/view
        return Redirect::to('karyawan/krs-khs/jadwal_kuliah/index');
    }
    

}

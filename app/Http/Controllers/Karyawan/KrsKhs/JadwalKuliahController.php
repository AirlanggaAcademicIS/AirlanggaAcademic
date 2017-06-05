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
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'jadwal',
            // Memanggil semua isi dari tabel ruang
            'jadwal' => JadwalKuliah::all()
        ];
        // Memanggil tampilan index di folder krs-khs/ruang dan juga menambahkan $data tadi di view
        // dd($data);
        return view('karyawan.krs-khs.jadwal_kuliah.index',$data);
    }
     public function create()
    {
        $tahun = TahunAkademik::count();
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'jadwal',
            // Memanggil semua isi dari tabel ruang
            'jadwal' => Hari::all(),

            'jadwal2' =>Jam::all(),

             'jadwal3' =>Ruang::all(),

             'jadwal4' =>MKDitawarkan::where('thn_akademik_id',1)->get()
        ];
        // Memanggil tampilan form create
        return view('karyawan.krs-khs.jadwal_kuliah.create',$data);
    }

    public function createAction(Request $request){
        // if($request->input('jam_id2')!=""){
        //     JadwalKuliah::create($request->input());
        //     JadwalKuliah::create(['mk_ditawarkan_id' => $request->input('mk_ditawarkan_id'),
        //                     'jam_id' => $request->input('jam_id2'),
        //                     'hari_id' => $request->input('hari_id'),
        //                     'ruang_id' => $request->input('ruang_id')]);
        // }
        // else{
            JadwalKuliah::create($request->input()); 
        // }

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Jadwal Kuliah berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/krs-khs/jadwal-kuliah/index');
    }
     
     public function delete($mk_ditawarkan_id,$hari_id,$ruang_id)
    {
        // Mencari ruang berdasarkan id dan memasukkannya ke dalam variabel $ruang
        $jadwal = JadwalKuliah::where('mk_ditawarkan_id',$mk_ditawarkan_id)
                            ->where('hari_id',$hari_id)
                            ->where('ruang_id',$ruang_id)->delete();

        // Menghapus ruang yang dicari tadi

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Ruang berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }
    
     public function edit($mk_ditawarkan_id,$hari_id,$ruang_id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'jadwal',
            // Mencari ruang berdasarkan id
            'jadwal' => JadwalKuliah::where('mk_ditawarkan_id',$mk_ditawarkan_id)
                                    ->where('hari_id',$hari_id)
                                    ->where('ruang_id',$ruang_id)->get(),
            'jadwal1' => JadwalKuliah::where('mk_ditawarkan_id',$mk_ditawarkan_id)
                                    ->where('hari_id',$hari_id)
                                    ->where('ruang_id',$ruang_id)->first(),
            'jadwal5' => Hari::all(),

            'jadwal2' =>Jam::all(),

             'jadwal3' =>Ruang::all(),

             'jadwal4' =>MKDitawarkan::where('id_mk_ditawarkan',$mk_ditawarkan_id)->first()
        ];
        // dd($data);
        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.krs-khs.jadwal_kuliah.edit',$data);
    }

    public function editAction($mk_ditawarkan_id,$hari_id,$ruang_id, Request $request)
    {
        // Mencari ruang yang akan di update dan menaruhnya di variabel $ruang
        $jadwal = JadwalKuliah::where([
           ['mk_ditawarkan_id','=',$mk_ditawarkan_id], 
           ['ruang_id','=',$ruang_id],
           ['hari_id','=',$hari_id]
            ])->update(
            ['jam_id'=> $request->input('jam_id')],
            ['hari_id'=> $request->input('hari_id')],
            ['ruang_id'=> $request->input('ruang_id')]
            );
        // Mengupdate $ruang tadi dengan isi dari form edit tadi
        // $jadwal->mk_ditawarkan_id = $request->input('mk_ditawarkan_id');
        // $jadwal->jam_id = $request->input('jam_id');
        // $jadwal->hari_id = $request->input('hari_id');
        // $jadwal->ruang_id = $request->input('ruang_id');
        // $jadwal->save();
        $mk = $request->input('nama_matkul');    
        // Notifikasi sukses
        Session::put('alert-success', 'Jadwal '.$mk.' berhasil diedit');

        // Kembali ke halaman krs-khs/ruang/view
        return Redirect::to('karyawan/krs-khs/jadwal-kuliah/index');
    }

}

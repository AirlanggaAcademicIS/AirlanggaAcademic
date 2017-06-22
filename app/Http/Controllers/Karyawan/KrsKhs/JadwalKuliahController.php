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
        $tahun = TahunAkademik::count();
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'jadwal',
            // Memanggil semua isi dari tabel ruang
            'jadwal' => DB::table('jadwal_kuliah')
                            ->leftJoin('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','=','jadwal_kuliah.mk_ditawarkan_id')
                            ->leftJoin('mata_kuliah','mk_ditawarkan.matakuliah_id','=','mata_kuliah.id_mk')
                            ->leftJoin('jam','jadwal_kuliah.jam_id','=','jam.id_jam')
                            ->leftJoin('hari','hari.id_hari','=','jadwal_kuliah.hari_id')
                            ->leftJoin('ruang','ruang.id_ruang','=','jadwal_kuliah.ruang_id')
                            ->where('mk_ditawarkan.thn_akademik_id',$tahun)->get()
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

             'jadwal4' =>MKDitawarkan::where('thn_akademik_id',$tahun)->get()
        ];
        // dd($data['jadwal4']);
        // Memanggil tampilan form create
        return view('karyawan.krs-khs.jadwal_kuliah.create',$data);
    }

    public function createAction(Request $request){
        $tahun = TahunAkademik::count();
        $cek = DB::table('jadwal_kuliah')
                ->join('mk_ditawarkan','mk_ditawarkan.id_mk_ditawarkan','jadwal_kuliah.mk_ditawarkan_id')
                ->where('mk_ditawarkan.thn_akademik_id',$tahun)
                ->where('hari_id',$request->input('hari_id'))
                ->where('jam_id',$request->input('jam_id'))
                ->where('ruang_id',$request->input('ruang_id'))->first();
        if (!empty($cek)) {
           Session::put('alert-danger', 'Jadwal Tabrakan');

        return Redirect::back();
        }
        JadwalKuliah::create($request->input()); 
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Jadwal Kuliah berhasil ditambahkan');

        return Redirect::to('karyawan/krs-khs/jadwal-kuliah/index');
    }
     
     public function delete($mk_ditawarkan_id,$hari_id,$ruang_id,$jam_id)
    {
        // Mencari ruang berdasarkan id dan memasukkannya ke dalam variabel $ruang
        $jadwal = JadwalKuliah::where('mk_ditawarkan_id',$mk_ditawarkan_id)
                            ->where('hari_id',$hari_id)
                            ->where('ruang_id',$ruang_id)
                            ->where('jam_id',$jam_id)->delete();

        // Menghapus ruang yang dicari tadi

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Ruang berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }
    
     public function edit($mk_ditawarkan_id,$hari_id,$ruang_id,$jam_id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar ruang
            'page' => 'jadwal',
            // Mencari ruang berdasarkan id
            'jadwal1' => JadwalKuliah::where('mk_ditawarkan_id',$mk_ditawarkan_id)
                                    ->where('hari_id',$hari_id)
                                    ->where('ruang_id',$ruang_id)
                                    ->where('jam_id',$jam_id)->first(),
            'jadwal5' => Hari::all(),

            'jadwal2' =>Jam::all(),

             'jadwal3' =>Ruang::all(),

             'jadwal4' =>MKDitawarkan::where('id_mk_ditawarkan',$mk_ditawarkan_id)->first()
        ];
        // dd($data);
        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.krs-khs.jadwal_kuliah.edit',$data);
    }

    public function editAction($mk_ditawarkan_id,$hari_id,$ruang_id, $jam_id,Request $request)
    {
        if (!empty(JadwalKuliah::where('hari_id',$request->input('hari_id'))->where('jam_id',$request->input('jam_id'))->where('ruang_id',$request->input('ruang_id'))->first())) {
           Session::put('alert-danger', 'Jadwal Tabrakan');

        return Redirect::back();
        }
        // Mencari ruang yang akan di update dan menaruhnya di variabel $ruang
        $jadwal = JadwalKuliah::where([
           ['mk_ditawarkan_id','=',$mk_ditawarkan_id], 
           ['ruang_id','=',$ruang_id],
           ['hari_id','=',$hari_id],
           ['jam_id','=',$jam_id]
            ])->update(
            array('jam_id' => $request->input('jam_id'),
                'hari_id'=> $request->input('hari_id'),
                'ruang_id'=> $request->input('ruang_id'))
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

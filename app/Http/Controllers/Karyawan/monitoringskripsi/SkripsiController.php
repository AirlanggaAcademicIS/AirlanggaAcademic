<?php 

namespace App\Http\Controllers\Karyawan\monitoringskripsi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;

use Illuminate\Http\Request;
use Redirect;
// Tambahkan model yang ingin dipakai
use App\Skripsi;
use App\DosenPembimbing;
use App\BiodataMahasiswa;
use App\BiodataDosen;
use App\KBK;
use Auth;
use DB;

class SkripsiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar skripsi
            'page' => 'skripsi',
            // Memanggil semua isi dari tabel skripsi
            'skripsi' => Skripsi::all(),
            'mhs' => BiodataMahasiswa::all(),
            'kbk' => KBK::all(),
            // 'dosen' => BiodataDosen::all(),
            'dosen1' => DB::table('skripsi')
            ->join('dosen_pembimbing', 'skripsi.id_skripsi', '=', 'dosen_pembimbing.skripsi_id')
            ->join('biodata_dosen', 'dosen_pembimbing.nip_id', '=', 'biodata_dosen.nip')
            ->select('skripsi.*', 'biodata_dosen.nama_dosen','dosen_pembimbing.status')
            ->where('dosen_pembimbing.status','=','0')
            ->get(),
            'dosen2' => DB::table('skripsi')
            ->join('dosen_pembimbing', 'skripsi.id_skripsi', '=', 'dosen_pembimbing.skripsi_id')
            ->join('biodata_dosen', 'dosen_pembimbing.nip_id', '=', 'biodata_dosen.nip')
            ->select('skripsi.*', 'biodata_dosen.nama_dosen','dosen_pembimbing.status')
            ->where('dosen_pembimbing.status','=','1')
            ->get(),
            'dospem' => DosenPembimbing::all()
        ];
        // Memanggil tampilan index di folder monitoring-skripsi/skripsi dan juga menambahkan $data tadi di view
        return view('karyawan.monitoring-skripsi.skripsi.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar skripsi
            'page' => 'skripsi',
            'dosen' => BiodataDosen::all(),
            'kbk' => KBK::all()
        ];
        // Memanggil tampilan form create
        return view('karyawan.monitoring-skripsi.skripsi.create',$data);

    }

    public function createAction(Request $request)
    {
        //dd($request->input());
        // Menginsertkan apa yang ada di form ke dalam tabel skripsi
        $skripsi = Skripsi::create([
            'NIM_id' => $request->input('NIM_id'),
            'kbk_id' => $request->input('kbk_id'),
            'Judul' => $request->input('Judul'),
            'nip_petugas_id' => Auth::user()->username,
            ]);

        $skripsi = Skripsi::where('Judul',$skripsi->Judul)->first();
        DosenPembimbing::create([
            'skripsi_id' => $skripsi->id_skripsi,
            'nip_id' => $request->input('nip_id1'),
            'status' => '0'
            ]);
        DosenPembimbing::create([
            'skripsi_id' => $skripsi->id_skripsi,
            'nip_id' => $request->input('nip_id2'),
            'status' => '1'
            ]);

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Data Skripsi berhasil ditambahkan');

        // Kembali ke halaman monitoring-skripsi/skripsi
        return Redirect::to('karyawan/monitoring-skripsi/skripsi');
    }

    public function delete($id)
    {
        // Mencari skripsi berdasarkan id dan memasukkannya ke dalam variabel $skripsi
        $skripsi = Skripsi::find($id);
        $dosen1 = DosenPembimbing::where('skripsi_id', '=', $id)->where('status','=','0')->first();
        $dosen2 = DosenPembimbing::where('skripsi_id', '=', $id)->where('status','=','1')->first();

        // Menghapus skripsi yang dicari tadi
        $skripsi->delete();
        $dosen1->delete();
        $dosen2->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Data Skripsi berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar skripsi
            'page' => 'skripsi',
            // Mencari skripsi berdasarkan id
            'skripsi' => Skripsi::find($id),
            'kbk' => KBK::all(),
            'dosen' => BiodataDosen::all(),
            'dosen1' => DB::table('skripsi')
            ->join('dosen_pembimbing', 'skripsi.id_skripsi', '=', 'dosen_pembimbing.skripsi_id')
            ->join('biodata_dosen', 'dosen_pembimbing.nip_id', '=', 'biodata_dosen.nip')
            ->select('skripsi.*', 'dosen_pembimbing.*', 'biodata_dosen.*')
            ->where('dosen_pembimbing.status','=','0')
            ->where('skripsi_id', $id)
            ->get(),
            'dosen2' => DB::table('skripsi')
            ->join('dosen_pembimbing', 'skripsi.id_skripsi', '=', 'dosen_pembimbing.skripsi_id')
            ->join('biodata_dosen', 'dosen_pembimbing.nip_id', '=', 'biodata_dosen.nip')
            ->select('skripsi.*', 'dosen_pembimbing.*', 'biodata_dosen.*')
            ->where('dosen_pembimbing.status','=','1')
            ->where('skripsi_id', $id)
            ->get()
            
        ];
        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.monitoring-skripsi.skripsi.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari skripsi yang akan di update dan menaruhnya di variabel $skripsi
        $skripsi = Skripsi::find($id);
        //$kbk = KBK::find($id);

        // Mengupdate $skripsi tadi dengan isi dari form edit tadi
        $skripsi->nim_id = $request->input('NIM_id');
        $skripsi->kbk_id = $request->input('kbk_id');
        $skripsi->Judul = $request->input('Judul');
        $skripsi->nip_petugas_id = Auth::user()->username;
        $skripsi->save();

        $dosen1 = DosenPembimbing::where('skripsi_id', '=', $id)->where('status','=','0')->update(['nip_id' =>$request->input('nip_id1')]);

         $dosen2 = DosenPembimbing::where('skripsi_id', '=', $id)->where('status','=','1')->update(['nip_id' =>$request->input('nip_id2')]);
        // Notifikasi sukses
        Session::put('alert-success', 'Data Skripsi berhasil diedit');

        // Kembali ke halaman monitoring-skripsi/skripsi
        return Redirect::to('karyawan/monitoring-skripsi/skripsi');
    }
    public function ajax(Request $request)
    {   
        $term=$request->term;
        $results = array();
        $data=BiodataMahasiswa::where('nim_id','LIKE','%'.$term.'%')->take(10)->get();
        foreach ($data as $key => $v) {

          $results[]=['value'=>$v->nim_id.' - '.$v->nama_mhs,
                      'nim_id'=>$v->nim_id,];

      }

      return response()->json($results);
    }

}
<?php 

namespace App\Http\Controllers\Karyawan\KrsKhs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Models\KrsKhs\MKDiajar;
use App\Models\KrsKhs\MKDitawarkan;
use App\Models\KrsKhs\Dosen;
use App\Models\KrsKhs\MK;
use App\Models\KrsKhs\BiodataDosen;
use App\Models\KrsKhs\TahunAkademik;



class InputDosenMKController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
      $data = [
        'page' => 'tabel',
        'dosen' => BiodataDosen::all(),
        'tabel' => MKDiajar::all(),
            'mk_ditawarkan' => MKDitawarkan::all(),
            'mk' => MK::all(),
            'tahun'=>TahunAkademik::all()
        ];
        return view('karyawan.krs-khs.input_dosen_mk.index',$data);   
    }

    public function show(Request $request)
    {
        $thn = \Request::get('periode');
        $data = [
        'page' => 'tabel',
        'dosen' => BiodataDosen::all(),
        'tabel' => MKDiajar::all(),
            'mk_ditawarkan' => MKDitawarkan::all(),
            'mk' => MK::all(),
        'periode' => TahunAkademik::where('id_thn_akademik',$thn)->first(),
        'id_thn_akademik' => $thn,
        'tahun'=>TahunAkademik::all(),
        ];
        
        return view('karyawan.krs-khs.input_dosen_mk.show',$data);
    }

    public function create()
    {
      
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'input_dosen_mk',
            // Memanggil semua isi dari tabel biodata
            'dosen' => DB::table('dosen')
            ->join('biodata_dosen', 'biodata_dosen.nip', '=', 'dosen.nip')
            ->select('biodata_dosen.nama_dosen', 'dosen.nip')
            ->get(),
            'mk_ditawarkan' => DB::table('mk_ditawarkan')
            ->join('mata_kuliah', 'mata_kuliah.id_mk', '=', 'mk_ditawarkan.matakuliah_id')
            ->select('mk_ditawarkan.id_mk_ditawarkan', 'mata_kuliah.nama_matkul')
            ->get(),
            'mk_diajar' => MKDiajar::all(),
        ];
      
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.krs-khs.input_dosen_mk.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        MKDiajar::create(
            [
            'dosen_id' => $request->input('dosen_pjmk'),
            'status'   => '0',
            'mk_ditawarkan_id' => $request->input('mk'),
            ]
            );
        $dospen=$request->input('dosen_pendamping');

        if ($dospen != "Pilih Dosen") {
            MKDiajar::create(
            [
            'dosen_id' => $request->input('dosen_pendamping'),
            'status'   => '1',
            'mk_ditawarkan_id' => $request->input('mk'),
            ]
            );
        }   

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Dosen berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/krs-khs/input-dosen-mk/view');
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $biodata_dosen = BiodataDosen::find($id);

        // Menghapus biodata yang dicari tadi
        $biodata_dosen->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Biodata berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'biodatadosen',
            // Mencari biodata berdasarkan id
            'biodatadosen' => BiodataDosen::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.biodata.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $biodata_dosen = BiodataDosen::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $biodata_dosen->nip_petugas = "08777777";
        $biodata_dosen->nama_dosen = $request->input('nama_dosen');
        $biodata_dosen->alamat_dosen = $request->input('alamat_dosen');
        $biodata_dosen->ttl = $request->input('ttl');
        $biodata_dosen->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Biodata berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/biodatadosen');
    }

}
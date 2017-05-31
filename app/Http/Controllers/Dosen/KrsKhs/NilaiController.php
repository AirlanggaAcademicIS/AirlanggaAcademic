<?php 

namespace App\Http\Controllers\Dosen\KrsKhs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Models\KrsKhs\MKDiajar;
use App\Models\KrsKhs\DetailNilai;
use Excel;
use App\Models\KrsKhs\MKDiambil;
use App\Models\KrsKhs\PersentasePenilaian;
//use App\MKDitawarkan;
//use App\Dosen;



class NilaiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index($id_mk_ditawarkan)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'nilai',
            // Memanggil semua isi dari tabel biodata
            'nilai' => MKDiajar::all(),
            'id_mk' => $id_mk_ditawarkan,
            // 'matkul' => MKDiajar::where('id_mk_ditawarkan',$id_mk_ditawarkan)->first(),
        ];
      
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.krs-khs.nilai.index',$data);
    }

    public function download()
    {
        $pathToFile=storage_path('app/download/Template Upload Nilai.xlsx');
        return response()->download($pathToFile);
    }

    public function upload($id_mk_ditawarkan,Request $request){
        $file = $request->file('excel')->store('upload');
        $file = storage_path('app/'.$file);
        $mk = MKDiajar::find($id_mk_ditawarkan);
        $persen = PersentasePenilaian::where('mk_ditawarkan_id',$id_mk_ditawarkan)->get();
        $detail = DetailNilai::all();
        if ($request->file('excel')->isValid()) {
          $nilai = Excel::load($file)->all()->toArray();
            foreach ($nilai as $na) {
                DetailNilai::create([
                    'mk_ditawarkan_id'      => $id_mk_ditawarkan,
                    'mhs_id'                => $na['nim'],
                    'jenis_penilaian_id'    => 1,
                    'detail_nilai'          => $na['uts']
                    ]);
                DetailNilai::create([
                    'mk_ditawarkan_id'      => $id_mk_ditawarkan,
                    'mhs_id'                => $na['nim'],
                    'jenis_penilaian_id'    => 2,
                    'detail_nilai'          => $na['uas']
                    ]);
                DetailNilai::create([
                    'mk_ditawarkan_id'      => $id_mk_ditawarkan,
                    'mhs_id'                => $na['nim'],
                    'jenis_penilaian_id'    => 3,
                    'detail_nilai'          => $na['softskill']
                    ]);
                DetailNilai::create([
                    'mk_ditawarkan_id'      => $id_mk_ditawarkan,
                    'mhs_id'                => $na['nim'],
                    'jenis_penilaian_id'    => 4,
                    'detail_nilai'          => $na['kuis']
                    ]);
                DetailNilai::create([
                    'mk_ditawarkan_id'      => $id_mk_ditawarkan,
                    'mhs_id'                => $na['nim'],
                    'jenis_penilaian_id'    => 5,
                    'detail_nilai'          => $na['tugas']
                    ]);
                $nilai_akhir=0;
                foreach ($persen as $p) {
                    if ($p->jenis_penilaian_id == 1) {
                        $nilai_akhir = $nilai_akhir + ($p->persentase/100)*($na['uts']);
                    }
                    elseif ($p->jenis_penilaian_id == 2) {
                        $nilai_akhir = $nilai_akhir + ($p->persentase/100)*($na['uas']);
                    }
                    elseif ($p->jenis_penilaian_id == 3) {
                        $nilai_akhir = $nilai_akhir + ($p->persentase/100)*($na['softskill']);
                    }
                    elseif ($p->jenis_penilaian_id == 4) {
                        $nilai_akhir = $nilai_akhir + ($p->persentase/100)*($na['kuis']);
                    }
                    else {
                        $nilai_akhir = $nilai_akhir + ($p->persentase/100)*($na['tugas']);
                    }
                }

                if ($nilai_akhir < 40) {
                    $konversi = "E";
                }
                elseif ($nilai_akhir < 55 && $nilai_akhir >= 40) {
                    $konversi = "D";
                }
                elseif ($nilai_akhir < 60 && $nilai_akhir >= 55) {
                    $konversi = "C";
                }
                elseif ($nilai_akhir < 65 && $nilai_akhir >= 60) {
                    $konversi = "BC";
                }
                elseif ($nilai_akhir < 70 && $nilai_akhir >= 65) {
                    $konversi = "B";
                }
                elseif ($nilai_akhir < 75 && $nilai_akhir >= 70) {
                    $konversi = "AB";
                }
                elseif ($nilai_akhir <= 100 && $nilai_akhir >= 75) {
                    $konversi = "A";
                }

                MKDiambil::where('mhs_id',$na['nim'])->update([
                    'nilai' => $konversi,
                    ]);
                // $detail->jenis_penilaian_id = $value->jenis_penilaian_id;
                // $detail->detail_nilai = round($excel->nilai_akhir*$value->persen/100);
        }
    }
        else{
            Session::put('alert-danger', 'Gagal upload');
        }
          return Redirect::back();
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'biodatadosen',
        ];

        // Memanggil tampilan form create
        return view('dosen.biodata.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        BiodataDosen::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Biodata berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/biodatadosen');
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
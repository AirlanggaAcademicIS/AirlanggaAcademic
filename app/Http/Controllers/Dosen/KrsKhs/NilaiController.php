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
use Auth;
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

    public function __construct()
    {
        $this->middleware('auth');
    }
    // Function untuk menampilkan tabel
    public function index($id_mk_ditawarkan)
    {
        $dosen_id  = Auth::user()->username;
        $data = [

            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'nilai',
            // Memanggil semua isi dari tabel biodata
            'nilai' => MKDiajar::where('dosen_id',$dosen_id)->get(),
            'id_mk' => $id_mk_ditawarkan,
            // 'matkul' => MKDiajar::where('id_mk_ditawarkan',$id_mk_ditawarkan)->first(),
        ];
      
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.krs-khs.nilai.index',$data);
    }

    public function upload($id_mk_ditawarkan,Request $request){
        $cek = $request->file('excel');
        if($cek == null){
           Session::put('alert-success', 'Pilih file yang ingin diupload');
          return Redirect::back(); 
        }

        else {
        $nama = time() .'.'.$request->file('excel')->getClientOriginalExtension();
        $file = $request->file('excel')->move('file_krskhs/upload',$nama);
        $file = public_path('file_krskhs/upload/'.$nama);
        $mk   = MKDiajar::where('mk_ditawarkan_id',$id_mk_ditawarkan)->first();
        $persen = PersentasePenilaian::where('mk_ditawarkan_id',$id_mk_ditawarkan)->get();
        $detail = DetailNilai::all();
        $nilai = Excel::load($file)->all()->toArray();
        //dd($mk);
        if($mk==null) {
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

                MKDiambil::where('mhs_id',$na['nim'])
                            ->where('mk_ditawarkan_id',$id_mk_ditawarkan)->update([
                    'nilai' => $konversi,
                    ]);
                // $detail->jenis_penilaian_id = $value->jenis_penilaian_id;
                // $detail->detail_nilai = round($excel->nilai_akhir*$value->persen/100);
            }
        }

        else {
            DetailNilai::where('mk_ditawarkan_id',$id_mk_ditawarkan)->delete();
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

                MKDiambil::where('mhs_id',$na['nim'])
                            ->where('mk_ditawarkan_id',$id_mk_ditawarkan)->update([
                    'nilai' => $konversi,
                    ]);
                // $detail->jenis_penilaian_id = $value->jenis_penilaian_id;
                // $detail->detail_nilai = round($excel->nilai_akhir*$value->persen/100);
            }
        }
        Session::put('alert-success', 'Nilai berhasil diupload');
          return Redirect::back();
      }
    }

}
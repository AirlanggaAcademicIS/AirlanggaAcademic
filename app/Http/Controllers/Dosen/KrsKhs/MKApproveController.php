<?php 

namespace App\Http\Controllers\Dosen\KrsKhs;
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
use App\Models\KrsKhs\PersentasePenilaian;
use App\Models\KrsKhs\JenisPenilaian;



class BobotNilaiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index($mk_ditawarkan_id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'bobot_nilai',
            // Memanggil semua isi dari tabel biodata
            'bobot_nilai' => PersentasePenilaian::where('mk_ditawarkan_id',$mk_ditawarkan_id)->get(),
            'mk_ditawarkan_id' => $mk_ditawarkan_id,
            'cek' =>PersentasePenilaian::where('mk_ditawarkan_id',$mk_ditawarkan_id)->first()
            
        ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.krs-khs.bobot_nilai.index',$data);
    }

    public function create($mk_ditawarkan_id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'bobot_nilai',
            'mk_ditawarkan_id' => $mk_ditawarkan_id,
            // Memanggil semua isi dari tabel biodata
            
        ];

        // Memanggil tampilan form create
        return view('dosen.krs-khs.bobot_nilai.create',$data);
    }

    public function createAction($mk_ditawarkan_id,Request $request)
    {
        PersentasePenilaian::create(
            [
            'persentase' => $request->input('persentase_uts'),
            'jenis_penilaian_id'   => '1',
            'mk_ditawarkan_id' => $mk_ditawarkan_id,
            ]
            );
        PersentasePenilaian::create(
            [
            'persentase' => $request->input('persentase_uas'),
            'jenis_penilaian_id'   => '2',
            'mk_ditawarkan_id' => $mk_ditawarkan_id,
            ]
            );
        PersentasePenilaian::create(
            [
            'persentase' => $request->input('persentase_tugas'),
            'jenis_penilaian_id'   => '3',
            'mk_ditawarkan_id' => $mk_ditawarkan_id,
            ]
            );
        PersentasePenilaian::create(
            [
            'persentase' => $request->input('persentase_kuis'),
            'jenis_penilaian_id'   => '4',
            'mk_ditawarkan_id' => $mk_ditawarkan_id,
            ]
            );
        PersentasePenilaian::create(
            [
            'persentase' => $request->input('persentase_softskill'),
            'jenis_penilaian_id'   => '5',
            'mk_ditawarkan_id' => $mk_ditawarkan_id,
            ]
            );
        
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Persentase Bobot Berhasil Ditambah');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/krs-khs/mk_diajar');
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

   public function edit($mk_ditawarkan_id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'bobot_nilai',
            'bobot_nilai1' => PersentasePenilaian::where('jenis_penilaian_id',1)
                            ->where('mk_ditawarkan_id',$mk_ditawarkan_id)->first(),
            'bobot_nilai2' => PersentasePenilaian::where('jenis_penilaian_id',2)
                            ->where('mk_ditawarkan_id',$mk_ditawarkan_id)->first(),
            'bobot_nilai3' => PersentasePenilaian::where('jenis_penilaian_id',3)
                            ->where('mk_ditawarkan_id',$mk_ditawarkan_id)->first(),
            'bobot_nilai4' => PersentasePenilaian::where('jenis_penilaian_id',4)
                            ->where('mk_ditawarkan_id',$mk_ditawarkan_id)->first(),
            'bobot_nilai5' => PersentasePenilaian::where('jenis_penilaian_id',5)
                            ->where('mk_ditawarkan_id',$mk_ditawarkan_id)->first(),
            'mk_ditawarkan_id' => $mk_ditawarkan_id,
            // Memanggil semua isi dari tabel biodata
            
        ];
      
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.krs-khs.bobot_nilai.edit',$data);
    }
    public function editAction($mk_ditawarkan_id, Request $request)
    {
        $mk = PersentasePenilaian::where('mk_ditawarkan_id',$mk_ditawarkan_id)->get();
        $id = PersentasePenilaian::where('mk_ditawarkan_id',$mk_ditawarkan_id)->first();


        foreach ($mk as $value) {
            if($request->input('persentase_uts')){
                $value->persentase =$request->input('persentase_uts');
            }
            elseif($request->input('persentase_uts')){
                $value->persentase =$request->input('persentase_uas');

            } 
            elseif($request->input('persentase_uts')){
                $value->persentase =$request->input('persentase_kuis');

            }
            elseif($request->input('persentase_uts')){
                $value->persentase =$request->input('persentase_tugas');
            }
            else{
                $value->persentase =$request->input('persentase_softskill');
            }
            $value->save();
        }
        
        // $data = [
        //     // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
        //     'page' => 'bobot_nilai',
        //     'bobot_nilai' => PersentasePenilaian::where('mk_ditawarkan_id',$mk_ditawarkan_id)->get(),
        //     'mk_ditawarkan_id' => $mk_ditawarkan_id,
        //     // Memanggil semua isi dari tabel biodata
            
        // ];
        // Notifikasi sukses
        Session::put('alert-success', 'Biodata berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('dosen/krs-khs/mk_diajar');
    }

}
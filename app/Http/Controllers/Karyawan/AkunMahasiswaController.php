<?php 

namespace App\Http\Controllers\Karyawan;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
use Illuminate\Support\Facades\Hash;
// Tambahkan model yang ingin dipakai
use App\AkunMahasiswa;
use App\AkunBioMHS;
use App\AkunUser;
use App\BiodataDosen;


class AkunMahasiswaController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'akunmahasiswa',
            // Memanggil semua isi dari tabel biodata
            'akunmahasiswa' => DB::table('mahasiswa')
            ->join('biodata_mhs', 'biodata_mhs.nim_id', '=', 'mahasiswa.nim')
            ->join('users', 'users.username', '=', 'mahasiswa.nim')
            ->leftjoin('biodata_dosen','biodata_dosen.nip','=','mahasiswa.nip_id')
            ->select('*')
            ->get()
        
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.akun.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'akun',
            'akun' => BiodataDosen::all()
        ];

        // Memanggil tampilan form create
        return view('karyawan.akun.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        $mahasiswa = new AkunMahasiswa; 
        $mahasiswa->nip_id = $request->input("nlp_id");
        $mahasiswa->nim = $request->input("nim");
        $mahasiswa->save();

        $biodata = new AkunBioMHS;
        $biodata->nim_id = $request->input("nim");
        $biodata->nama_mhs = $request->input("nama_mhs");
        $biodata->angkatan = $request->input("angkatan");
        $biodata->email_mhs = $request->input("email");
        $biodata->foto_mhs= time() .'.'.$request->file('foto_mhs')->getClientOriginalExtension();

        $biodata->save();

        $gambar = $request->file('foto_mhs')->move("img/foto_mhs/",$biodata['foto_mhs']);
        // $akun = AkunUser::create($request->input()); 
        $user = new AkunUser;
        $user->username = $request->input("nim");
        $user->email = $request->input("email");
        $user->name = $request->input("nim");        
        $password  = $request->input("nim");
        $password = Hash::make($password);
        $user->role = "mahasiswa";
        $user->password = $password;
        $user->save();


        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Akun berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/akun
        return Redirect::to('karyawan/akun');
    }

    public function delete($nim)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $akunmahasiswa = AkunMahasiswa::find($nim);

        // Menghapus biodata yang dicari tadi
        $akunmahasiswa->delete();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Akun berhasil dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($nim)
    {   
        $akun = AkunMahasiswa::where('nim',$nim)->first();
        $biodata = AkunBioMHS::where('nim_id',$nim)->first();
        $users = AkunUser::where('username',$nim)->first();
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'akun',
            // Mencari biodata berdasarkan id
            'akun' => $akun,
            'biodata' => $biodata,
            'users' => $users,
            'dosen' => BiodataDosen::all()
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.akun.edit',$data);
    }

    public function editAction($nim, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $biodata = AkunBioMHS::where('nim_id', $nim)->first();
        $akunmahasiswa = AkunMahasiswa::find($nim);
        $user = AkunUser::where('username', $nim)->first();

        if ($akunmahasiswa->nim != $request->input('nim') || $akunmahasiswa->nip_id != $request->input('nlp_id')  || $biodata->nama_mhs!= $request->input("nama_mhs")  || $biodata->angkatan != $request->input("angkatan") || $biodata->email_mhs!= $request->input("email")  || $user->email != $request->input("email") ||$request->file('foto_mhs') != "")
        {
           
          // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $akunmahasiswa->nim = $request->input('nim');
        $akunmahasiswa->nip_id = $request->input('nlp_id');
        
        $biodata->nama_mhs = $request->input("nama_mhs");
        $biodata->angkatan = $request->input("angkatan");
        $biodata->email_mhs = $request->input("email");
        if ($request->file('foto_mhs') != ""){
        $biodata->foto_mhs= time() .'.'.$request->file('foto_mhs')->getClientOriginalExtension();
        $gambar = $request->file('foto_mhs')->move("img/foto_mhs/",$biodata['foto_mhs']);
        }
        
        
        // $akun = AkunUser::create($request->input()); 
        $user->username = $request->input("nim");
        $user->email = $request->input("email");
        
        $akunmahasiswa->save();
        $biodata->save();
        $user->save();
    
        // Notifikasi sukses
        Session::put('alert-success', 'Akun berhasil diedit');
    
        }       
        else
        {
        
              Session::put('alert-warning', 'Tidak ada perubahan data');

            
        }
        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/akun');
    
}
}
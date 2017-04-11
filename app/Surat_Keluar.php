<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat_Keluar extends Model
{
   protected $table = 'surat_keluar_mhs';    
   protected $primaryKey = 'id_surat_keluar';    
   protected $fillable = [
		'nip_petugas', 
		'nama_lembaga',
		'nama',
		'alamat',
		'tgl_upload',
		'nim_nip',	
   ];
}
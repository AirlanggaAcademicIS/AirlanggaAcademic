<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat_Keluar_Mhs extends Model
{
   protected $table = 'surat_keluar_mhs';    
   protected $primaryKey = 'id_surat_keluar';    
   protected $fillable = [
		'no_surat_masuk', 
		'nip_petugas_id',
		'nama_lembaga',
		'nama',
		'alamat',
		'tgl_upload',
		'status',	
   ];
}
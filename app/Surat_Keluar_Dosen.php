<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat_Keluar_Dosen extends Model
{
   protected $table = 'surat_keluar_dosen';    
   protected $primaryKey = 'id_surat_keluar';    
   protected $fillable = [
		'no_surat_masuk', 
		'nip_petugas_id',
		'nama',
		'tgl_upload',
		'status',	
   ];
}
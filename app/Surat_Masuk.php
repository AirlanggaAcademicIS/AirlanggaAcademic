<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat_Masuk extends Model
{
   protected $table = 'surat_masuk';    
   protected $primaryKey = 'id_surat_masuk';    
   protected $fillable = [
		'no_surat_masuk', 
		'nip_petugas',
		'nama_lembaga',
		'judul_surat_masuk',
		'nim_nip',
		'status',	
   ];
}
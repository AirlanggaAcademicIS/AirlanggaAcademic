<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat_Masuk extends Model
{
   protected $table = 'surat_masuk';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'no_surat_masuk', 
		'nip_petugas_id',
		'nama_lembaga',
		'judul_surat_masuk',
		'nim_nip',
		'status',	
   ];

   public function petugas()
   {
   		return $this->belongsTo('App\Petugas_Tu', 'nip_petugas_id');
   }
}
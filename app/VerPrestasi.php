<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerPrestasi extends Model
{
   protected $table = 'prestasi';    
   protected $primaryKey = 'id_prestasi';    
   protected $fillable = [
   		'nip_petugas_id',
   		'skor',	
		'ps_is_verified',
		'alasan_verified',
   ];
}
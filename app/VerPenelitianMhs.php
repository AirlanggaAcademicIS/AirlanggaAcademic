<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerPenelitianMhs extends Model
{
   protected $table = 'penelitian_mhs';    
   protected $primaryKey = 'kode_penelitian'; 
   protected $fillable = [
   		'nip_petugas_id',
		'is_verified',
		'alasan_verified',
   ];
}
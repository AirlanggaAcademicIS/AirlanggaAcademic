<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalPermohonan extends Model
{
   protected $table = 'jadwal_permohonan';    
   protected $primaryKey = 'id';    
   protected $fillable = [
   		'id_permohonan_ruang',
   		'id_ruang',
		'id_hari', 
		'id_jam'
   ];
}		
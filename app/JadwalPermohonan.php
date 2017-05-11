<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalPermohonan extends Model
{
   protected $table = 'jadwal_permohonan';
   protected $fillable = [
   		'permohonan_ruang_id',
   		'ruang_id',
		'hari_id', 
		'jam_id'
   ];
}		
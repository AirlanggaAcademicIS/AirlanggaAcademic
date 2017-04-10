<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalKuliah extends Model
{
   protected $table = 'jadwal_kuliah';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'id_mk_ditawarkan', 
		'id_jam',
		'id_hari',	
		'id_ruang'	,
   ];
}
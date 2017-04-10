<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPenilaian extends Model
{
   protected $table = 'jenispenilaian';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'id_jenis_penilaian', 
		'nama_jenis',
   ];
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPenilaian extends Model
{
   protected $table = 'jenispenilaian';    
   protected $primaryKey = 'id_jenis_penilaian';    
   protected $fillable = [
		'nama_jenis',
   ];
}
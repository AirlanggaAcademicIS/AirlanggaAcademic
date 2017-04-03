<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JurnalDosen extends Model
{
   protected $table = 'jurnal_dosen';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'judul', 
		'tahun',
		'deskripsi',		
   ];
}
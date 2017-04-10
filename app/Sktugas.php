<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sktugas extends Model
{
   protected $table = 'sktugas';    
   protected $primaryKey = 'id_surat';    
   protected $fillable = [
		'no_surat', 
		'tanggal_surat',
		'tanggal_upload',
		'keterangan_surat',	
   ];
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
   protected $table = 'biodata';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'nim', 
		'nama',
		'alamat',
		'provinsi',
		'tanggal_masuk',	
   ];
}
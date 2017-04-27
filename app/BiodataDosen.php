<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiodataDosen extends Model
{
   protected $table = 'biodata_dosen';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'id', 
		'nama',
		'alamat',
		'ttl',	
   ];
}
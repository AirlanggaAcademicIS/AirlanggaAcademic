<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rundown extends Model
{
   protected $table = 'rundown';    
   protected $primaryKey = 'kode_rundown';    
   protected $fillable = [
		'durasi_rundown', 
		'deskripsi_rundown',	
   ];
}
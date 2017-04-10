<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
   protected $table = 'konsultasi';    
   protected $primaryKey = 'id_konsultasi';    
   protected $fillable = [
   		'id_skripsi',
		'tgl_konsul', 
		'catatan_konsul',	
   ];
}
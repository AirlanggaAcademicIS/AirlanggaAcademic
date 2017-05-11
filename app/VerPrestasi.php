<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerPrestasi extends Model
{
   protected $table = 'prestasi';    
   protected $primaryKey = 'id_prestasi';    
   public $incrementing = false;
   protected $fillable = [
   		'skor',	
		'ps_is_verified'
   ];
}
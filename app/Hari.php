<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
   protected $table = 'hari';
   protected $primaryKey = 'id_hari';  
   protected $fillable = [ 
  	 'nama_hari'
   ];
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jam extends Model
{
   protected $table = 'jam';
   protected $primaryKey = 'id_jam';  
   protected $fillable = [ 
  	 'waktu'
   ];
}
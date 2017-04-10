<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenRapat extends Model
{
   protected $table = 'dosen_rapat';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'nip', 
		'id_notulen',	
   ];
}
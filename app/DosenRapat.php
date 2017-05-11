<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenRapat extends Model
{
   protected $table = 'dosen_rapat';    
   protected $primaryKey = 'nip';    
   protected $fillable = [
		'nip', 
		'notulen_id',	
   ];
}
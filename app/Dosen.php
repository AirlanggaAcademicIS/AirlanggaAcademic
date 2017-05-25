<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
   protected $table = 'dosen';    
   protected $primaryKey = 'nip';    
   protected $fillable = [
		'nip'
			
   ];

}
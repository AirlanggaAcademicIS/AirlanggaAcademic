<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{

	public $incrementing = false;
   protected $table = 'dosen';    
   protected $primaryKey = 'nip';    
   protected $fillable = [
		'nip'
			
   ];
}
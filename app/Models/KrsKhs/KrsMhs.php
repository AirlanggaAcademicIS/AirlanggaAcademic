<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KrsMhs extends Model
{
   protected $table = 'biodata';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		
		'nama',
		'sks',		
   ];
}
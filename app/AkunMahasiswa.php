<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AkunMahasiswa extends Model
{
   protected $table = 'akunmahasiswa';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'nim', 
		'nama',
		'password',
		
   ];
}
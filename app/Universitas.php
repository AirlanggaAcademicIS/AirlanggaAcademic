<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universitas extends Model
{
   protected $table = 'universitas';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'kode_universitas', 
		'nama_universitas',
   ];
}
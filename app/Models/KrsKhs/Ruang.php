<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
   protected $table = 'RUANG';    
   protected $primaryKey = 'ID_RUANG';    
   protected $fillable = [
		'KAPASITAS'
   ];
}
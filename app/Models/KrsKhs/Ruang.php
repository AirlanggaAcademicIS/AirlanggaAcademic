<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ruang extends Model
{
   
   protected $table = 'ruang';    
   protected $primaryKey = 'id_ruang';   
    
   protected $fillable = [
         'nama_ruang',
         'kapasitas',

         
   		
   ];
}
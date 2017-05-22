<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class 	Hari extends Model
{
   
   protected $table = 'hari';    
   protected $primaryKey = 'id_hari';   
    
   protected $fillable = [
         'nama_hari',
         
   		
   ];
}
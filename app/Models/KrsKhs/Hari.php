<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
   
   protected $table = 'hari';    
   protected $primaryKey = 'id';   
   protected $fillable = [
   		'nama_hari',
   ];
}
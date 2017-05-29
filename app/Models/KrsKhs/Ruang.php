<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ruang extends Model
{

	use SoftDeletes;
   protected $table = 'ruang';    
   protected $primaryKey = 'id_ruang';   
   protected $dates = ['deleted_at']; 
   protected $fillable = [
         'nama_ruang',
         'kapasitas',
   ];
}
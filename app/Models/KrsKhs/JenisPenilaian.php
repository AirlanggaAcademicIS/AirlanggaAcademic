<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisPenilaian extends Model
{
   use SoftDeletes;
   protected $table = 'jenis_penilaian';    
   protected $primaryKey = 'id_jenis_penilaian';   
   protected $dates = ['deleted_at']; 
   protected $fillable = [
   'nama_jenis',
   	];
   
}
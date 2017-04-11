<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailNilai extends Model
{
   use SoftDeletes;
   protected $table = 'detail_nilai';    
   protected $primaryKey = 'id_detail_nilai';   
   protected $dates = ['deleted_at']; 
   protected $fillable = [
   		'id_mk_ditawarkan',
   		'NIM',
   		'id_jenis_nilai',
   		'detail_nilai',
   ];
}
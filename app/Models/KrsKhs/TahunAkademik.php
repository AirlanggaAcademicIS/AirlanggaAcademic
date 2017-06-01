<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TahunAkademik extends Model
{
   protected $table = 'thn_akademik';    
   protected $primaryKey = 'id_thn_akademik';   
   protected $fillable = [
   		'id_thn_akademik',
   		'semester_periode',
   ];
}
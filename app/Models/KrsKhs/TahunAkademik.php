<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TahunAkademik extends Model
{
   protected $table = 'thn_akademik';    
   protected $primaryKey = 'id_tahun';   
   protected $fillable = [
   		'semester_periode'
   ];
}
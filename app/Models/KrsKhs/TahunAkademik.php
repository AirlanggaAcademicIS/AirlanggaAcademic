<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TahunAkademik extends Model
{
   use SoftDeletes;
   protected $table = 'thn_ajaran';    
   protected $primaryKey = 'id_tahun';   
   protected $dates = ['deleted_at']; 
   protected $fillable = [
   		'semester_periode'
   ];
}
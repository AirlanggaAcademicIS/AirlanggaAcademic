<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MKDiajar extends Model
{
   use SoftDeletes;
   protected $table = 'mk_diajar';    
   protected $primaryKey = 'dosen_id';
   public $incrementing = false;  
   protected $dates = ['deleted_at']; 
   protected $fillable = [
   'dosen_id',
   		'mk_ditawarkan_id',
		'status',
   ];
   public function dosen()
   {
      return $this->belongsTo('App\Models\KrsKhs\BiodataDosen','dosen_id');
   }
   public function mkDitawarkan()
   {
      return $this->belongsTo('App\Models\KrsKhs\MKDitawarkan','mk_ditawarkan_id');
   }
}
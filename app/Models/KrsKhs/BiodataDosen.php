<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BiodataDosen extends Model
{
   use SoftDeletes;
   protected $table = 'biodata_dosen';    
   protected $primaryKey = 'biodata_id';   
   protected $dates = ['deleted_at']; 
   public $incrementing = false;
   protected $fillable = [
   	];
   
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerPenelitianMhs extends Model
{
   protected $table = 'penelitian_mhs';    
   protected $primaryKey = 'kode_penelitian';    
   public $incrementing = false;
   protected $fillable = [
		'is_verified',
   ];
}
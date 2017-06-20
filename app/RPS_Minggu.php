<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RPS_Minggu extends Model
{
   use SoftDeletes;
   protected $table = 'rps_minggu';    
   protected $primaryKey = 'rps_id';    
   protected $fillable = [
		'rps_id',
      'minggu_id', 
   ];
   protected $dates = [
	'deleted_at'
	];
}
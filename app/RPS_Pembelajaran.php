<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RPS_Pembelajaran extends Model
{
	use SoftDeletes;
   	protected $table = 'pembelajaran_rps';    
   	protected $primaryKey = 'sistem_pembelajaran_id';    
   	protected $fillable = [
		'sistem_pembelajaran_id', 
		'rps_id',
   ];
   protected $dates = [
	'deleted_at'
	];
}
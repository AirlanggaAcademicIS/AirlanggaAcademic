<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusAsset extends Model
{
	use SoftDeletes;
   protected $table = 'status_asset';
   protected $primaryKey = 'id_status'; 
   protected $fillable = [ 
		'status',
   ];
}
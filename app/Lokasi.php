<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lokasi extends Model
{
	use SoftDeletes;
   protected $table = 'lokasi';
   protected $primaryKey = 'id'; 
   protected $fillable = [
		'nama_lokasi',
   ];
}
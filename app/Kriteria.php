<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kriteria extends Model
{
   use SoftDeletes;
   protected $table = 'kriteria';    
   protected $primaryKey = 'id_kriteria';    
   protected $fillable = [
		'id_kriteria', 
		'kriteria',
   ];
	protected $dates = [
	'deleted_at'
	];
}
<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Histori extends Model
{
	use SoftDeletes;
   	protected $table = 'mk_diambil';    
   	protected $primaryKey = 'mk_ditawarkan_id';
   	protected $fillable = [
   		'mhs_id',
		'nilai',		
   	];  
   	   	public function MKDitawarkan()
   {
   	return $this->belongsTo('App\Models\KrsKhs\MKDitawarkan','mk_ditawarkan_id');
   }
}
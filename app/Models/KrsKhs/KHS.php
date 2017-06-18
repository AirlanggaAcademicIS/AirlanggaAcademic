<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KHS extends Model
{
	use SoftDeletes;
   	protected $table = 'mk_diambil';    
   	protected $primaryKey = 'mk_ditawarkan_id';
   	protected $fillable = [
       'mk_ditawarkan_id',
   		'mhs_id',
		'nilai',	
      'is_approve',	
   	];
   	public function MKDitawarkan()
   {
   	return $this->belongsTo('App\Models\KrsKhs\MKDitawarkan','mk_ditawarkan_id');
   }
}
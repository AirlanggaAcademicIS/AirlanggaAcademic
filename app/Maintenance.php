<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Maintenance extends Model
{
	use SoftDeletes;
	
   protected $table = 'maintenance';    
   protected $primaryKey = 'id_maintenance';    
   protected $fillable = [
		'nip_petugas_id', 
		'asset_id',
		'asset_yang_dimaintenance',
		'nama_pemaintenance',
		'problem',
		'solution',
		'waktu_maintenance',

   ];
}
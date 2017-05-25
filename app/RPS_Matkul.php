<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RPS_Matkul extends Model
{
   use SoftDeletes;
   protected $table = 'mata_kuliah';    
   protected $primaryKey = 'id_mk';    
   protected $fillable = [
		'kode_matkul', 
		'nama_matkul',
		'sks',
		'deskripsi_matkul',
		'pokok_pembahasan',
		'pustaka_utama',
		'pustaka_pendukung',
   ];
	protected $dates = [
	'deleted_at'
	];
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Silabus_Matkul extends Model
{
   protected $table = 'mata_kuliah';    
   protected $primaryKey = 'id_mk';    
   protected $fillable = [
		'kode_matkul',
		'nama_matkul',
		'sks',
		'deskripsi_mata_ajar',
		'deskripsi_matkul',
		'kode_matkul',
		'penilaian_matkul',
		'pustaka_utama',
		'status_silabus',			
		'jenis_mk_id'
   ];
   protected $dates = [
   'deleted_at'
   ];

   public function jenisMk()
   {
	   return $this->belongsTo('App\JenisMataKuliah', 'jenis_mk_id', 'id');
   }

}
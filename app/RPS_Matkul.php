<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RPS_Matkul extends Model
{
   protected $table = 'mata_kuliah';    
   protected $primaryKey = 'id_mk';    
   protected $fillable = [
   		'jenis_mk_id',
		'kode_matkul', 
		'nama_matkul',
		'sks',
		'deskripsi_matkul',
		'pokok_pembahasan',
		'pustaka_utama',
		'pustaka_pendukung',
   ];

   public function RPS_Matkul_Prasyarat()
   {
   	return $this->belongsTo('App/RPS_Matkul_Prasyarat');
   }

   public function RPS_CPL_Prodi()
   {
   	return $this->belongsTo('App/RPS_CPL_Prodi');
   }

   public function RPS_CP_Matkul()
   {
   	return $this->belongsTo('App/RPS_CP_Matkul');
   }

   public function RPS_Koor_Matkul()
   {
   	return $this->belongsTo('App/RPS_Kode_Matkul');
   }
}
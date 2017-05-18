<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RPS_Matkul extends Model
{
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

}
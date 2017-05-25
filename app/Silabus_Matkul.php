<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Silabus_Matkul extends Model
{
   protected $table = 'mata_kuliah';    
   protected $primaryKey = 'id_mk';    
   protected $fillable = [
		'kode_matkul',
		'nama_matkul',
		'sks',
		'deskripsi_matkul',
		'kode_matkul',
		'penilaian_matkul',
		'pustaka_utama'				
   ];


}
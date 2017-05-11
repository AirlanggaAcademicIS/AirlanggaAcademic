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

   public function Silabus_Matkul_Prasyarat()
   {
   	return $this->belongsTo('App/Silabus_Matkul_Prasyarat');
   }

   public function Silabus_Capaian_Pembelajaran()
   {
   	return $this->belongsTo('App/Silabus_Capaian_Pembelajaran');
   }

    public function Silabus_Atribut_Softskills()
   {
   	return $this->belongsTo('App/Silabus_Atribut_Softskills');
   }

    public function Silabus_Sistem_Pembelajaran()
   {
   	return $this->belongsTo('App/Silabus_Sistem_Pembelajaran');
   }

    public function Silabus_Media_Pembelajaran()
   {
   	return $this->belongsTo('App/Silabus_Media_Pembelajaran'); 
   }

    public function Silabus_Koor_Matkul()
   {
   	return $this->belongsTo('App/Silabus_Koor_Matkul'); 
   }

}
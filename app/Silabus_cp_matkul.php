<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Silabus_cp_matkul extends Model
{
   protected $table = 'cp_mata_kuliah';    
   protected $primaryKey = 'id_cpmk';    
   protected $fillable = [
   'matakuliah_id',
   'kode_cpmk',
<<<<<<< HEAD
   'deskripsi_cpmk',
=======
   'deskripsi_cpmk'
>>>>>>> cb89a76fe2b762f6a2c5f46b83efdd524bb32608
   ];

   public function detail()
   {
   		return $this->belongsTo('App\Silabus_detail_media');
   }
<<<<<<< HEAD
=======

>>>>>>> cb89a76fe2b762f6a2c5f46b83efdd524bb32608
}
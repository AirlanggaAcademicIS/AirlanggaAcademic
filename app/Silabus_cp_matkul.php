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
   'deskripsi_cpmk'
   ];

   public function detail()
   {
   		return $this->belongsTo('App\Silabus_detail_media');
   }
}
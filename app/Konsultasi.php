<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
   protected $table = 'konsultasi';    
   protected $primaryKey = 'id_konsultasi';    
   protected $fillable = [
         'skripsi_id',
      'tgl_konsul', 
      'catatan_konsul', 
   ];

   public function Mahasiswa(){
       return $this->belongsTo('App\Skripsi', 'skripsi_id');
   }
    public function Skripsi(){
       return $this->belongsTo('App\Skripsi', 'skripsi_id');
   }
}
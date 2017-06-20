<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JadwalKuliah extends Model
{
   //use SoftDeletes;
   protected $table = 'jadwal_kuliah';    
   protected $primaryKey = 'mk_ditawarkan_id';   
   //protected $dates = ['deleted_at'];
   public $incrementing = false;
   protected $fillable = [
         'mk_ditawarkan_id',
         'jam_id',
   		'hari_id',
   		'ruang_id',
   		
   ];
   public function jam()
   {
      return $this->belongsTo('App\Models\KrsKhs\Jam','jam_id');
   }
   public function mkDitawarkan()
   {
      return $this->belongsTo('App\Models\KrsKhs\MKDitawarkan','mk_ditawarkan_id');
   }
   public function hari()
   {
      return $this->belongsTo('App\Models\KrsKhs\Hari','hari_id');
   }
    public function ruang()
   {
      return $this->belongsTo('App\Models\KrsKhs\Ruang','ruang_id');
   }
}
<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

<<<<<<< HEAD
class MKDiambil extends Model
{
   use SoftDeletes;
   protected $table = 'mk_diambil';   
   protected $fillable = [
         'mhs_id',
         'mk_ditawarkan_id',
         'nilai',
   ];
=======

class MKDiambil extends Model
{
   use SoftDeletes;
   protected $table = 'mk_diambil';    
   protected $primaryKey = '';   
   protected $dates = ['deleted_at'];
   protected $fillable = [
   'mk_ditawarkan_id',
		'mhs_id',
		'nilai',
		'is_approve',		
   ];
   public function mahasiswa()
   {
      return $this->belongsTo('App\Models\BiodataMahasiswa','mhs_id');
   }
   public function MKDitawarkan()
   {
      return $this->belongsTo('App\Models\KrsKhs\MataKuliah','mk_ditawarkan_id');
   }
   protected $primaryKey = 'mk_ditawarkan_id';   
   protected $dates = ['deleted_at']; 
   protected $fillable = [
   'mk_ditawarkan_id',
   'mhs_id',
   'nilai',
   'is_approve',
   	];

   public function mkDitawarkan()
   {
      return $this->belongsTo('App\Models\KrsKhs\MKDitawarkan','mk_ditawarkan_id');
   }

   public function mahasiswa()
   {
      return $this->belongsTo('App\Models\KrsKhs\Mahasiswa','mhs_id');
   }

>>>>>>> d5cedd8cf454a5a105be42446006a04237629111
}
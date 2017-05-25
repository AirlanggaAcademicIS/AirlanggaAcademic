<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Petugas_TU extends Model
{
   use SoftDeletes;
   protected $table = 'petugas_tu';    
   protected $primaryKey = 'nip_petugas';
   public $incrementing = false;
   protected $fillable = [
   	'nip_petugas',
		'nama_petugas',
		'no_telp_petugas',
		'email_petugas',
		'prodi_id',
   ];
   public function prodi(){
      return $this->belongsTo('App\Prodi','prodi_id');
   }

}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RPS_Koor_Matkul extends Model
{
   protected $table = 'koor_mk';    
   protected $primaryKey = 'id_koor_mk';    
   protected $fillable = [
   		'nip_id',
  		'mk_id', 
	  	'status_tt_id',
   ];

  public function matkul()
  {
    return $this->belongsTo('App\RPS_CPL_Prodi','mk_id');
  }
  public function status()
  {
    return $this->belongsTo('App\Status_Team_Teaching','status_tt_id');
  }
  public function dosen()
  {
    return $this->belongsTo('App\BiodataDosen', 'nip_id');
  }
}
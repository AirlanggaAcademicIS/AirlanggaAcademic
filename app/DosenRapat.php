<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenRapat extends Model
{
  protected $table = 'dosen_rapat';
  protected $primaryKey = 'nip'; 
  protected $fillable = [
      'notulen_id',
      'status',
   		'created_at',
      'status',
		  'updated_at',
		  'deleted_at',	
   ];
  public function dosen()
   {
    return $this->belongsTo('App\BiodataDosen');
   }
}
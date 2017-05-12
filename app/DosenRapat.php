<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenRapat extends Model
{
  //protected $table = 'dosen_rapat';    
  //protected $primaryKey = 'nip';    
  //protected $fillable = [
	//	'nip', 
	//	'notulen_id',	

  protected $primaryKey = 'nip';
      public $incrementing = false;  
  protected $fillable = [
      'notulen_id',
   		'created_at',
		  'updated_at',
		  'deleted_at',	

   ];
}
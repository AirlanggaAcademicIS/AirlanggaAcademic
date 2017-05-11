<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RPS_CPL_Prodi extends Model
{
   protected $table = 'cp_prodi';    
   protected $primaryKey = 'cpem_id';    
   protected $fillable = [
   		'mk_id',
   ];
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RPS_CPL_Prodi extends Model
{
   protected $table = 'cp_prodi';    
   protected $primaryKey = 'cpem_id';    
   protected $fillable = [
        'cpem_id',
        'mk_id',
   ];

    public function cpem()
    {
   	    return $this->belongsTo('App\CapaianPembelajaran','cpem_id');
    }
}
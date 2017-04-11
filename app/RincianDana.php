<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RincianDana extends Model
{

   protected $table = 'rincian_dana';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'kode_rincian', 
		'nama_barang',
		'quantity',			
   ];

}
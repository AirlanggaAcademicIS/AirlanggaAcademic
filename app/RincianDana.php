<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RincianDana extends Model
{
<<<<<<< HEAD
   protected $table = 'rincian_dana';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'kode_rincian', 
		'nama_barang',
		'quantity',			
   ];
=======
	protected $table = 'rincian_dana';
	protected $primaryKey = 'kode_rincian';
	protected $fillable = [
			'kode_rincian',
			'nama_barang',
			'qty',
			'harga',
	];
>>>>>>> e70533c973b5d483bf0cfa9919751e4a9bbb5ee5
}
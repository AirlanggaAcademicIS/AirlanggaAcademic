<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class KategoriDana extends Model
{	
	protected $table = 'kategori_dana';	
	protected $primaryKey ='id_sumber';
	protected $fillable = [
		'jenis_dana',
		];


}

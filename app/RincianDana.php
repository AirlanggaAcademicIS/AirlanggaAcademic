<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class RincianDana extends Model
{	
	protected $table = 'rincian_dana';	
	protected $primaryKey ='id_rdana';
	protected $fillable = [
		'id_rdana',
		'kegiatan_id',
		'nama',
		'kuantitas',
		'harga',
		'kategori',
		'kategori_dana',
		'created_at',
		'updated_at',
		'deleted_at',
	];	


public function rincianDana()
{
	# code...
<<<<<<< HEAD
	return $this->belongsTo('App\PengajuanKegiatan','kegiatan_id');
=======
	return $this->belongsTo('App\KonfirmasiKegiatan','kegiatan_id');
>>>>>>> 8ab999b6463730213402bf5657d64e0b812f08f2
}
public function kategoriDana()
{
	# code...
	return $this->belongsTo('App\kategoriDana','sumber_id');
}

}
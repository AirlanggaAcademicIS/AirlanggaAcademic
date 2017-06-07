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
		'kegiatan_id',
		'nama',
		'kuantitas',
		'harga',
		'sumber_id',
		'kategori_dana',
		'created_at',
		'updated_at',
		'deleted_at',
	];	


public function rincianDana()
{
	# code...
	return $this->belongsTo('App\PengajuanKegiatan','kegiatan_id');

}
public function kategoriDana()
{
	# code...
	return $this->belongsTo('App\kategoriDana','sumber_id');
}

}
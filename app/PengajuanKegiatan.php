<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class PengajuanKegiatan extends Model
{	
	protected $table = 'pengajuan_kegiatan';	
	protected $primaryKey ='id_kegiatan';
	protected $fillable = [
		'id_kegiatan',
		'kategori',
		'konfirmasi',
		'nama',
		'tglpengajuan',
		'tglpelaksanaan',
		'revisi',
	];	
}
<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class PengajuanKegiatan extends Model
<<<<<<< HEAD
{ 
  protected $table = 'pengajuan_kegiatan';  
  protected $primaryKey ='id_kegiatan';
  protected $fillable = [
    'konfirmasi_proposal',
    'konfirmasi_lpj',
    'revisi',
    'nama',
    'nama',
    'kategori',
    'konfirmasi',
    'history',
    'tujuan',
    'mekanisme',
    'tglpengajuan',
    'tglpelaksanaan',
    'rpengajuan',
    'rpelaksanaan',
    'url_poster',
    'sumber_id',
    'created_at',
    'updated_at',
    'deleted_at',
  ];



}
=======
{	
	protected $table = 'pengajuan_kegiatan';	
	protected $primaryKey ='id_kegiatan';
	protected $fillable = [
		'nama',
		'history',
		'tujuan',
		'mekanisme',
		'tglpengajuan',
		'tglpelaksanaan',
		'url_poster',
		'sumber_id',
		
	];	
}

>>>>>>> 3b902d6768f94e947d17cb31d0bc4b724c65a6c0

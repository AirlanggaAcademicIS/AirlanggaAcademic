<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class KonfirmasiKegiatan extends Model
{	
	protected $table = 'pengajuan_kegiatan';	
	protected $primaryKey ='id_kegiatan';
	protected $fillable = [
<<<<<<< HEAD
=======
		'id_kegiatan',
>>>>>>> 5a734d94f7e78fe35eeff1f606d98a6cdcf84e2d
		'konfirmasi_proposal',
		'konfirmasi_lpj',
		'revisi',
		'nama',
<<<<<<< HEAD
=======
		'nama',
		'kategori',
		'konfirmasi',
>>>>>>> 5a734d94f7e78fe35eeff1f606d98a6cdcf84e2d
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



<<<<<<< HEAD
}
=======
}
>>>>>>> 5a734d94f7e78fe35eeff1f606d98a6cdcf84e2d

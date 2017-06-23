<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RPS extends Model
{
   use SoftDeletes;
   protected $table = 'rps';    
   protected $primaryKey = 'id_rps';    
   protected $fillable = [
		'mk_id', 
		'kemampuan_akhir',
		'indikator',
		'kriteria',
		'kriteria_non_test',
		'waktu_pembelajaran',
		'materi_pembelajaran',
		'bobot_penilaian',
<<<<<<< HEAD
		'tugas'
=======
		'tugas',
>>>>>>> 51d35c1ddb4c47bc69e19accb81cb22e04df7d5e
   ];
	protected $dates = [
	'deleted_at'
	];
}
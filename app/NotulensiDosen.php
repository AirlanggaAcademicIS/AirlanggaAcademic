<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotulensiDosen extends Model
{
   protected $table = 'notulen_rapat';    
   protected $primaryKey = 'id_notulen';    
   protected $fillable = [
		'permohonan_ruang_id',
		'nip_petugas_id',
		'nip_id',
		'nama_rapat',
		'agenda_rapat',
		'waktu_pelaksanaan',
		'id_verifikasi',
   ];
}
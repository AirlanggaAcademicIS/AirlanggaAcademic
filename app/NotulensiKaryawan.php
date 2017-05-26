<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotulensiKaryawan extends Model
{
   protected $table = 'notulen_rapat';    
   protected $primaryKey = 'id_notulen';    
   protected $fillable = [
   	'id_notulen',
   	'permohonan_ruang_id',
   	'nip_petugas_id',
   	'nip_id',
		'nama_rapat',
		'agenda_rapat',
		'waktu_pelaksanaan',
		'hasil_pembahasan',
		'id_verifikasi',
		'deskripsi_rapat',
   ];

}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notulensi extends Model
{
   protected $table = 'notulensi';    
   protected $primaryKey = 'id_notulen';    
   protected $fillable = [
		'id_permohonan_ruang',
		'nip_petugas',
		'nip',
		'nama_rapat',
		'agenda_rapat',
		'waktu_pelaksanaan',
		'hasil_pembahasan',
		'id_verifikasi',
		'deskripsi_rapat',	
   ];
}
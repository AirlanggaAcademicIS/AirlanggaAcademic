<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotulensiKaryawan extends Model
{
   protected $table = 'notulen_rapat';    
   protected $primaryKey = 'id_notulen';    
   protected $fillable = [
<<<<<<< HEAD
   		'id_notulen',
   		'permohonan_ruang_id',
   		'nip_petugas_id',
   		'nip_id',
		'nama_rapat',
		'agenda_rapat',
=======
		'permohonan_ruang_id',
		'nip_petugas_id',
		'nip_id',
		'nama_rapat',
		'agenda_rapat',
		'waktu_pelaksanaan',
>>>>>>> dbb61662f9561b24d6d03ab77b8352a896db4069
		'hasil_pembahasan',
		'id_verifikasi',
		'deskripsi_rapat',	
   ];
<<<<<<< HEAD

=======
>>>>>>> dbb61662f9561b24d6d03ab77b8352a896db4069
}
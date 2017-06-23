<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UndanganDosen extends Model
{
  protected $table = 'notulen_rapat';
  protected $primaryKey = 'id_notulen';
  protected $fillable = [
      'id_notulen',
      'nama_rapat',
      'waktu_pelaksanaan',
      'permohonan_ruang_id',
      'agenda_rapat'
   ];
}
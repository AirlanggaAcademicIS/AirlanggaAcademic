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
    'nama',
    'konfirmasi_lpj',
    'konfirmasi_proposal',
    'history',
    'tujuan',
    'mekanisme',
    'tglpengajuan',
    'tglpelaksanaan',
    'url_poster',
    'created_at',
    'updated_at',
    'deleted_at',
  ];



}
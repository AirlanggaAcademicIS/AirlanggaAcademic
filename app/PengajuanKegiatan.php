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
<<<<<<< HEAD
  'id_kegiatan',
    'nama',
    'konfirmasi_lpj',
=======
>>>>>>> 378515ecca7607e425ec8d3fdac83a5e95c08394
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

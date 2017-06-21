<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalKuliah extends Model
{
   protected $table = 'jadwal_kuliah';
   protected $fillable = [
     'mk_ditawarkan_id',
     'ruang_id',
  'hari_id', 
  'jam_id'
   ];

}
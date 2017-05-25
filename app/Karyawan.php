<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Karyawan extends Model
{
   use SoftDeletes;
   protected $table = 'karyawan';    
   protected $primaryKey = 'nip_petugas';
   public $incrementing = false;
   protected $fillable = [
   		'nip_petugas',
		'nama_petugas',
		'no_telp_petugas',
		'email_petugas',
		'prodi',
   ];
}
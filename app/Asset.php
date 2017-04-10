<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
<<<<<<< HEAD
	protected $table = 'asset';
	protected $primaryKey = 'id_asset';
	protected $fillable = [
		'nip_petugas',
=======
   protected $table = 'peminjaman';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'nip_petugas', 
		'nim_nip_peminjam',
>>>>>>> 0fb901520af6cfcf518ac53dc66592c40b1bde38
		'serial_barcode',
		'nama_asset',
		'lokasi',
		'expired_date',
		'nama_supplier',
		'harga_satuan',
		'jumlah_barang',
		'total_harga',
<<<<<<< HEAD
	];
=======
		'created_at',
		'updated_at',
   ];
>>>>>>> 0fb901520af6cfcf518ac53dc66592c40b1bde38
}
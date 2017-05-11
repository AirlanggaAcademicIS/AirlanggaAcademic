<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{

	protected $table = 'asset';
	protected $primaryKey = 'id_asset';
	protected $fillable = [
		'kategori_id',
   		'nip_petugas_id',
   		'status_id',
		'serial_barcode',
		'nama_asset',
		'lokasi',
		'expired_date',
		'nama_supplier',
		'harga_satuan',
		'jumlah_barang',
		'total_harga',
		'created_at',
		'updated_at',
		'deleted_at',
   ];
}
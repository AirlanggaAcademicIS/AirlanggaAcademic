<?php

namespace App ;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MkProdi extends Model
{
   	protected $table = 'mk_prodi';
   	protected $fillable = [
  		'mk_id',
  		'created_at',
  		'updated_at'
   	];	
    protected $dates = ['deleted_at'];
    protected $guarded = [];
}
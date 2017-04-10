<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DosenPembimbing extends Model
{
    //

    use SoftDeletes;

    protected $table = 'dosen_pembimbing';
    protected $dates = ['deleted_at'];

    
}

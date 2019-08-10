<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MPembelian extends Model
{
    //
    protected $table ="tb_pembeli";
    public $timestamps = false;
    protected $guarded = ['id'];
}

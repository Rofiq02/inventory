<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MPenjualan extends Model
{
    //
    protected $table ="tb_penjualan";
    public $timestamps = false;
    protected $guarded = ['kode_penjualan'];
}

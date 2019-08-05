<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MBarang extends Model
{
    //
    protected $table ="tb_master_barang";
    public $timestamps = false;
    protected $guarded = ['id'];
}

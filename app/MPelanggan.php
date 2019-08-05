<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MPelanggan extends Model
{
    //
    protected $table ="tb_master_pelanggan";
    public $timestamps = false;
    protected $guarded = ['id'];
}

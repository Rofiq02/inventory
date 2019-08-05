<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MSupllier extends Model
{
    //
    protected $table ="tb_master_supplier";
    public $timestamps = false;
    protected $guarded = ['id'];
}

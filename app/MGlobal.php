<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MGlobal extends Model
{
    public static function Get_Row_Empty($table){
        $columns = DB::select('show columns from '.$table);
        foreach($columns as $col){
            $column[$col->Field]="";
        }
        return $column;
    }

    
    public static function Get_Item($kd_item){
        $barang = DB::table('tb_item')->where('kd_item',$kd_item)->first();
        if($barang!=""){
            $nama = $barang->nama_item;
        } else{
            $nama = "-";
        }

        return $nama;
    }

}

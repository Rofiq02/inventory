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

    public static function Get_Barang($kode_barang){
        $barang = DB::table('tb_master_barang')->where('kode_barang',$kode_barang)->first();
        if($barang!=""){
            $nama = $barang->nama_barang;
        } else{
            $nama = "-";
        }

        return $nama;
    }

    public static function Get_Pelanggan($kode_pelanggan){
        $pelanggan = DB::table('tb_master_pelanggan')->where('kode_pelanggan',$kode_pelanggan)->first();
        if($pelanggan!=""){
            $nama = $pelanggan->nama_pelanggan;
        } else{
            $nama = "-";
        }

        return $nama;
    }

}

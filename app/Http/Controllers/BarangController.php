<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MGlobal;
use App\MBarang;

class BarangController extends Controller
{
    function index(){
        $barang = MBarang::all();
        return view('data.data_barang',compact('barang'));

    }

    function add(){
        $barang = MGlobal::Get_Row_Empty('tb_item');
        return view('form.frm_barang',compact('barang'));
    }

    function save(Request $req){


        if($req->get('kd_item')==""){
        //menciptakan kode anggota
        $newid = DB::select('SHOW TABLE STATUS LIKE "tb_item"');
        $kd_item = "A".sprintf('%04d',$newid[0]->Auto_increment).date('mY');

        $barang = new MBarang([
            'kd_item' => $req->get('kd_item'),
            'nama_item' => $req->get('nama_item'),
            'harga' => $req->get('harga'),
        ]);
        $barang->save();
        } else {
            $barang = MBarang::where("kd_item",$req->get('kd_item'));
            $barang->update([
                'nama_item' => $req->get('nama_item'),
                'harga' => $req->get('harga'),
                ]);
        }
       
        return redirect('barang');

    }

   function edit($id){
    $barang = MBarang::where("kd_item",$id)->first();
    return view('form.frm_barang',compact('barang'));
   }

    function hapus($id){
        $barang = MBarang::where("kd_item",$id);        
        $barang->delete();
        return redirect('barang');

    }
}

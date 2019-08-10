<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MGlobal;
use App\MPembelian;
use App\MSupllier;

class PembelianController extends Controller
{
   

    function index(){
        $pembelian = MPembelian::all();
        $supplier = MSupllier::all();
        return view('data.data_pembelian',compact('pembelian','supplier'));

    }

    function add(){
        $pembelian = MGlobal::Get_Row_Empty('tb_pembeli');
        $supplier = MSupllier::all();
        return view('form.frm_pembelian',compact('pembelian','supplier'));
    }

    function save(Request $req){


        if($req->get('tb_pembeli')==""){
        //menciptakan kode anggota
        $newid = DB::select('SHOW TABLE STATUS LIKE "tb_pembeli"');
        $id = "A".sprintf('%04d',$newid[0]->Auto_increment).date('mY');

        $pembelian = new MPembelian([
            'id' => $req->get('id'),
            'kd_item' => $req->get('kd_item'),
            'nama' => $req->get('nama'),
            'jumlah' => $req->get('jumlah'),
            'total_harga' => $req->get('total_harga'),
        ]);
        $pembelian->save();
        } else {
            $pembelian = MPembelian::where("id",$req->get('id'));
            $barang->update([
                'kd_item' => $req->get('kd_item'),
                'nama' => $req->get('nama'),
                'jumlah' => $req->get('jumlah'),
                'total_harga' => $req->get('total_harga'),
                ]);
        }
       
        return redirect('pembelian');

    }

   function edit($id){
    $pembelian = MPembelian::where("id",$id)->first();
    $supplier = MSupllier::all();
    return view('form.frm_pembelian',compact('pembelian','supplier'));
   }

    function hapus($id){
        $pembelian = MPembelian::where("id",$id);        
        $pembelian->delete();
        return redirect('pembelian');

    }
}

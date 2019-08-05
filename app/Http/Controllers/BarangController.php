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
        $barang = MGlobal::Get_Row_Empty('tb_master_barang');
        return view('form.frm_barang',compact('barang'));
    }

    function save(Request $req){


        if($req->get('id')==""){
        //menciptakan kode anggota
        $newid = DB::select('SHOW TABLE STATUS LIKE "tb_master_barang"');
        $kodebarang = "B".sprintf('%03d',$newid[0]->Auto_increment);

        $barang = new MBarang([
            'kode_barang' => $kodebarang,
            'nama_barang' => $req->get('nama_barang'),
            'deskripsi_barang' => $req->get('deskripsi_barang'),
            'harga_satuan' => $req->get('harga_satuan'),
            'stok' => $req->get('stok'),
        ]);
        $barang->save();
        } else {
            $barang = MBarang::where("id",$req->get('id'));
            $barang->update([
                'nama_barang' => $req->get('nama_barang'),
                'deskripsi_barang' => $req->get('deskripsi_barang'),
                'harga_satuan' => $req->get('harga_satuan'),
                'stok' => $req->get('stok'),
                ]);
        }
       
        return redirect('barang');

    }

   function edit($id){
    $barang = MBarang::where("id",$id)->first();
    return view('form.frm_barang',compact('barang'));
   }

    function hapus($id){
        $barang = MBarang::where("id",$id);        
        $barang->delete();
        return redirect('barang');

    }
}

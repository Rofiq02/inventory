<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MGlobal;
use App\MSupllier;

class SupllierController extends Controller
{
    function index(){
        $supplier = MSupllier::all();
        return view('data.data_supllier',compact('supplier'));

    }

    function add(){
        $supplier = MGlobal::Get_Row_Empty('tb_master_supplier');
        return view('form.frm_supplier',compact('supplier'));
    }

    function save(Request $req){


        if($req->get('id')==""){
        //menciptakan kode anggota
        $newid = DB::select('SHOW TABLE STATUS LIKE "tb_master_supplier"');
        $kodesupplier = "S".sprintf('%03d',$newid[0]->Auto_increment);

        $supplier = new MSupllier([
            'kode_supplier' => $kodesupplier,
            'nama_supplier' => $req->get('nama_supplier'),
            'no_telp_supplier' => $req->get('no_telp_supplier'),
            'alamat_pelanggan' => $req->get('alamat_pelanggan'),
        ]);
        $supplier->save();
        } else {
            $supplier = MSupllier::where("id",$req->get('id'));
            $supplier->update([
                'nama_supplier' => $req->get('nama_supplier'),
                'no_telp_supplier' => $req->get('no_telp_supplier'),
                'alamat_pelanggan' => $req->get('alamat_pelanggan'),
                ]);
        }
       
        return redirect('supplier');

    }

   function edit($id){
    $supplier = MSupllier::where("id",$id)->first();
    return view('form.frm_supplier',compact('supplier'));
   }

    function hapus($id){
        $supplier = MSupllier::where("id",$id);        
        $supplier->delete();
        return redirect('supplier');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MGlobal;
use App\MPelanggan;

class PelangganController extends Controller
{
    //
    function index(){
        $pelanggan = MPelanggan::all();
        return view('data.data_pelanggan',compact('pelanggan'));

    }

    function add(){
        $pelanggan = MGlobal::Get_Row_Empty('tb_master_pelanggan');
        return view('form.frm_pelanggan',compact('pelanggan'));
    }

    function save(Request $req){


        if($req->get('id')==""){
        //menciptakan kode anggota
        $newid = DB::select('SHOW TABLE STATUS LIKE "tb_master_pelanggan"');
        $kodepelanggan = "P".sprintf('%03d',$newid[0]->Auto_increment);

        $pelanggan = new MPelanggan([
            'kode_pelanggan' => $kodepelanggan,
            'nama_pelanggan' => $req->get('nama_pelanggan'),
            'no_telp_pelanggan' => $req->get('no_telp_pelanggan'),
            'alamat_pelanggan' => $req->get('alamat_pelanggan'),
        ]);
        $pelanggan->save();
        } else {
            $pelanggan = MPelanggan::where("id",$req->get('id'));
            $pelanggan->update([
                'nama_pelanggan' => $req->get('nama_pelanggan'),
                'no_telp_pelanggan' => $req->get('no_telp_pelanggan'),
                'alamat_pelanggan' => $req->get('alamat_pelanggan'),
                ]);
        }
       
        return redirect('pelanggan');

    }

   function edit($id){
    $pelanggan = MPelanggan::where("id",$id)->first();
    return view('form.frm_pelanggan',compact('pelanggan'));
   }

    function hapus($id){
        $pelanggan = MPelanggan::where("id",$id);        
        $pelanggan->delete();
        return redirect('pelanggan');

    }
}

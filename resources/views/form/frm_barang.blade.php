@extends('template')

@section('judul')
Form Barang
@stop

@section('content')

@if ($errors->any())
  <div class="alert alert-danger alert-dismissible" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><em>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</em>
</div>
@endif

<form id="frmBarang" class="form-horizontal" action="{{ url('barang/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="fForm col-md-12">
            <div class="box">
                <!-- Bidodata kategori -->
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama_barang" class="col-sm-2 control-label">Nama Barang</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="kd_kategori" value="{{ $barang['kode_barang'] }}">
                            <input type="text" class="form-control" id="nama_barang" placeholder="Nama Barang" name="nama_barang" value="{{ $barang['nama_barang'] }}">
                        </div>
                    </div>    
                
                <div class="form-group">
                        <label for="deskripsi_barang" class="col-sm-2 control-label">Deskripsi Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="deskripsi_barang" placeholder="Deskripsi Barang" name="deskripsi_barang" value="{{ $barang['deskripsi_barang'] }}">
                        </div>
                </div>
                    <div class="form-group">
                        <label for="harga_satuan" class="col-sm-2 control-label">Harga Satuan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="harga_satuan" placeholder="harga_satuan" name="harga_satuan" value="{{ $barang['harga_satuan'] }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="stok" class="col-sm-2 control-label">Stok</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="stok" placeholder="Stok" name="stok" value="{{ $barang['stok'] }}">
                        </div>
                    </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">SAVE</button>
                </div>                   
            </div>
            </div>
        </div>       
    </div>
</form>
@stop

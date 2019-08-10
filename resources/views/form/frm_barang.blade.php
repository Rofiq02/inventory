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
                        <label for="nama_item" class="col-sm-2 control-label">Nama Item</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="kd_item" value="{{ $barang['kd_item'] }}">
                            <input type="text" class="form-control" id="nama_item" placeholder="Nama Item" name="nama_item" value="{{ $barang['nama_item'] }}">
                        </div>
                    </div>    
                    <div class="form-group">
                        <label for="harga" class="col-sm-2 control-label">Harga Satuan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="harga" placeholder="harga" name="harga" value="{{ $barang['harga'] }}">
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

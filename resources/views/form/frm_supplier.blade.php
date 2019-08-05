@extends('template')

@section('judul')
Form Supplier
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

<form id="frmSupplier" class="form-horizontal" action="{{ url('supplier/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="fForm col-md-12">
            <div class="box">
                <!-- Bidodata kategori -->
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama_supplier" class="col-sm-2 control-label">Nama supplier</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="kd_kategori" value="{{ $supplier['kode_supplier'] }}">
                            <input type="text" class="form-control" id="nama_supplier" placeholder="Nama supplier" name="nama_supplier" value="{{ $supplier['nama_supplier'] }}">
                        </div>
                    </div>    
                
                <div class="form-group">
                        <label for="no_telp_supplier" class="col-sm-2 control-label">No Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_telp_supplier" placeholder="No Telepon" name="no_telp_supplier" value="{{ $supplier['no_telp_supplier'] }}">
                        </div>
                </div>
                <div class="form-group">
                        <label for="alamat_pelanggan" class="col-sm-2 control-label">Alamat Supplier</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" placeholder="Alamat Pelanggan" name="alamat_pelanggan">{{ $supplier['alamat_pelanggan'] }}</textarea>
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

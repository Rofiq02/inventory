@extends('template')

@section('judul')
Form pelanggan
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

<form id="frmpelanggan" class="form-horizontal" action="{{ url('pelanggan/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="fForm col-md-12">
            <div class="box">
                <!-- Bidodata kategori -->
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama_pelanggan" class="col-sm-2 control-label">Nama pelanggan</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="kd_kategori" value="{{ $pelanggan['kode_pelanggan'] }}">
                            <input type="text" class="form-control" id="nama_pelanggan" placeholder="Nama pelanggan" name="nama_pelanggan" value="{{ $pelanggan['nama_pelanggan'] }}">
                        </div>
                    </div>    
                
                <div class="form-group">
                        <label for="no_telp_pelanggan" class="col-sm-2 control-label">No Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_telp_pelanggan" placeholder="No Telepon" name="no_telp_pelanggan" value="{{ $pelanggan['no_telp_pelanggan'] }}">
                        </div>
                </div>
                <div class="form-group">
                        <label for="alamat_pelanggan" class="col-sm-2 control-label">Alamat Pelanggan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" placeholder="Alamat Pelanggan" name="alamat_pelanggan">{{ $pelanggan['alamat_pelanggan'] }}</textarea>
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

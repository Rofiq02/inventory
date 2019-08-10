@extends('template')

@section('judul')
Form Pembelian
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

<form id="frmPembelian" class="form-horizontal" action="{{ url('pembelian/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="fForm col-md-12">
            <div class="box">
                <!-- Bidodata kategori -->
                <div class="box-body">
                    <div class="form-group">
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" placeholder="Kode Pembelian"  name="id" id="id" value="{{ $pembelian['id'] }}">
                            </div>
                    </div>   
                    <div class="form-group">
                        <label for="kode_pembelian" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="Nama"  name="nama" id="nama" value="{{ $pembelian['nama'] }}">
                            </div>
                    </div>      
                    <div class="form-group">
                        <label for="kd_item" class="col-sm-2 control-label">Item</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="kd_item" onFocus="startCalc();" onBlur="stopCalc();" value="{{ $pembelian['kd_item'] }}">
                                    <option value="">- Pilih Item -</option>
                                    @foreach($supplier as $rsPeng)
                                    <option {{ $pembelian['kd_item']==$rsPeng['kd_item'] ? 'selected' : "" }} value="{{ $rsPeng['kd_item'] }}">{{ $rsPeng['nama_item'] }}</option>   
                                    @endforeach                             
                                </select>
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="pengarang" class="col-sm-2 control-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" onFocus="startCalc();" onBlur="stopCalc();" placeholder="Harga"  name="total_harga" id="total_harga" value="{{ $pembelian['harga'] }}">
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="pengarang" class="col-sm-2 control-label">Jumlah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  placeholder="Jumlah"  name="jumlah" id="jumlah" value="{{ $pembelian['jumlah'] }}">
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="pengarang" class="col-sm-2 control-label">Total Harga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  placeholder="Total Harga"  name="total_harga" id="total_harga" value="{{ $pembelian['total_harga'] }}">
                            </div>
                    </div>
               
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary pull-right">SAVE</button>
                        </div>                   
                </div>
            </div>
        </div>       
    </div>
</form>

@stop

@section('script')
<script>
    function startCalc(){
    		interval = setInterval("calc()",1);
    }
    function calc(){
	    valueharga = document.frmPembelian.harga.value;
	    valuejumlah = document.frmPembelian.jumlah.value;
	    document.frmPembelian.total_harga.value = (valueharga) * (valuejumlah);
	}
    function stopCalc(){
    	clearInterval(interval);
    }
</script>
@stop



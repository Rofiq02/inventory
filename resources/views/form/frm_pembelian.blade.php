@extends('template')

@section('judul')
    Form Peminjaman
@stop

@section('ac-transaksi')
active
@stop

@section('content')

<div class="box">
    <div class="box-body">
        <form id="frmPinjam" action="{{ url('trans/pembelian/save') }}" method="post">
            @csrf
            <div class="box-body">
                    <div class="form-group">
                        <label for="nama_supplier" class="col-sm-2 control-label">Kode</label>
                        <div class="col-sm-10">
                            <input type="readonly" name="kd_kategori" value="{{ $pembelian['kode_pembelian'] }}">
                        </div>
                    </div>    
                
                    <div class="form-group">
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>          
                                <input id="datepicker" type="text" class="form-control" id="tanggal_pembelian" placeholder="Tanggal Pembelian" name="tanggal_pembelian" value="{{ $pembelian['tanggal_pembelian'] }}">
                            </div>
                        </div>                        
                    </div>
                    <div class="form-group">
                        <label for="kode_pembelian" class="col-sm-2 control-label">Kode Supplier</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="kode_pembelian" value="{{ $pembelian['id'] }}">
                                <option value="">- Pilih Kode -</option>
                                @foreach($pembelian as $rsPeng)
                                <option {{ $pembelian['id']==$rsPeng['id'] ? 'selected' : "" }} value="{{ $rsPeng['id'] }}">{{ $rsPeng['kode_supplier'] }}</option>   
                                @endforeach                             
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pengarang" class="col-sm-2 control-label">Harga</label>
                        <div class="col-sm-10">
            
                        </div>
                    </div>
                </div>

    <div class="box">
        <div class="box-header">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                  <th>Kode Barang</th>
                  <th>Harga Satuan</th>
                  <th>Jumlah</th>
                  <th>Sub Total</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $rsBarang)
            <tr>
                  <td>{{ $rsBarang->kode_barang }}</td>
                  <td>{{ $rsBarang->harga_satuan }}
                  </td>
                  <td>{{ $rsBarang->jumlah }}</td>
                  <td>{{ $rsBarang->where('harga_satuan')->sum('jumlah') }}</td>

                  <td>
                        <a href="/barang/edit/{{ $rsBarang->id }}"><button type="button" class="btn bg-yellow btn-flat"><i class="fa fa-pencil"></i></button></a>
                        <a href="/barang/hapus/{{ $rsBarang->id }}"><button type="button" class="btn bg-red btn-flat"><i class="fa fa-trash"></i></button></a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@stop

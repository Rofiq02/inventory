@extends('template')

@section('judul')
Data Pembelian
@stop

@section('ac-pembelian')
active
@stop


@section('content')
    <div class="box">
        <div class="box-header">
            <a href="pembelian/add"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Item</th>
                  <th>Jumlah</th>
                  <th>Total Harga</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pembelian as $rspelanggan)
            <tr>
                <td>{{ $rspelanggan->id }}</td>
                  <td>{{ $rspelanggan->nama }}</td>
                  <td>{{ App\MGlobal::Get_Item($rspelanggan->kd_item) }}
                  </td>
                  <td>{{ $rspelanggan->jumlah }}</td>
                  <td>{{ $rspelanggan->total_harga}}</td>

                  <td>
                        <a href="/pembelian/edit/{{ $rspelanggan->id  }}"><button type="button" class="btn bg-yellow btn-flat"><i class="fa fa-pencil"></i></button></a>
                        <a href="/pembelian/hapus/{{ $rspelanggan->id  }}"><button type="button" class="btn bg-red btn-flat"><i class="fa fa-trash"></i></button></a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@stop
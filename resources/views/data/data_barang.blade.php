@extends('template')

@section('judul')
Data Barang
@stop

@section('ac-barang')
active
@stop


@section('content')
    <div class="box">
        <div class="box-header">
            <a href="barang/add"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Item</th>
                  <th>Harga</th>
                </tr>
            </thead>
            <tbody>
            @foreach($barang as $rsBarang)
                <tr>
                    <td>{{ $rsBarang->kd_item }}</td>
                    <td>{{ $rsBarang->nama_item }}</td>              
                    <td>Rp {{ $rsBarang->harga }}</td>
                    <td>
                        <a href="{{ url('barang/edit',$rsBarang->kd_item) }}"><button type="button" class="btn bg-yellow btn-flat"><i class="fa fa-pencil"></i></button></a>
                        <a href="/barang/hapus/{{ $rsBarang->kd_item }}"><button type="button" class="btn bg-red btn-flat"><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
        </div>
    </div>
@stop
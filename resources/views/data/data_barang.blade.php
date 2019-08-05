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
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Deskripsi</th>
                  <th>Harga Satuan</th>
                  <th>Stok</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $rsBarang)
            <tr>
                  <td>{{ $rsBarang->id }}
                  <td>{{ $rsBarang->kode_barang }}</td>
                  <td>{{ $rsBarang->nama_barang }}
                  </td>
                  <td>{{ $rsBarang->deskripsi_barang }}</td>
                  <td>{{ $rsBarang->harga_satuan }}</td>
                  <td>{{ $rsBarang->stok }}</td>

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
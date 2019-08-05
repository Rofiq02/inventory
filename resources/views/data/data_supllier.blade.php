@extends('template')

@section('judul')
Data Supplier
@stop

@section('ac-supplier')
active
@stop


@section('content')
    <div class="box">
        <div class="box-header">
            <a href="supplier/add"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                  <th>#</th>
                  <th>Kode Supplier</th>
                  <th>Nama Supplier</th>
                  <th>No Telepon</th>
                  <th>Alamat</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($supplier as $rsSupplier)
            <tr>
                <td>{{ $rsSupplier->id }}</td>
                  <td>{{ $rsSupplier->kode_supplier }}</td>
                  <td>{{ $rsSupplier->nama_supplier }}
                  </td>
                  <td>{{ $rsSupplier->no_telp_supplier }}</td>
                  <td>{{ $rsSupplier->alamat_pelanggan }}</td>

                  <td>
                        <a href="/supplier/edit/{{ $rsSupplier->id }}"><button type="button" class="btn bg-yellow btn-flat"><i class="fa fa-pencil"></i></button></a>
                        <a href="/supplier/hapus/{{ $rsSupplier->id  }}"><button type="button" class="btn bg-red btn-flat"><i class="fa fa-trash"></i></button></a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@stop
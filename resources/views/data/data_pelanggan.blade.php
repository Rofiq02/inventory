@extends('template')

@section('judul')
Data pelanggan
@stop

@section('ac-pelanggan')
active
@stop


@section('content')
    <div class="box">
        <div class="box-header">
            <a href="pelanggan/add"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                  <th>#</th>
                  <th>Kode Pelanggan</th>
                  <th>Nama pelanggan</th>
                  <th>No Telepon</th>
                  <th>Alamat</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pelanggan as $rspelanggan)
            <tr>
                <td>{{ $rspelanggan->id }}</td>
                  <td>{{ $rspelanggan->kode_pelanggan }}</td>
                  <td>{{ $rspelanggan->nama_pelanggan }}
                  </td>
                  <td>{{ $rspelanggan->no_telp_pelanggan }}</td>
                  <td>{{ $rspelanggan->alamat_pelanggan }}</td>

                  <td>
                        <a href="/pelanggan/edit/{{ $rspelanggan->id  }}"><button type="button" class="btn bg-yellow btn-flat"><i class="fa fa-pencil"></i></button></a>
                        <a href="/pelanggan/hapus/{{ $rspelanggan->id  }}"><button type="button" class="btn bg-red btn-flat"><i class="fa fa-trash"></i></button></a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@stop
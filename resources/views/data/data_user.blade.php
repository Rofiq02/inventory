@extends('template')

@section('judul')
Data User
@stop

@section('content')

<div class="box">
    <div class="box-header">
    <a href="{{ url('user/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div>
    <div class="box-body">
        <table id="data" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Menampilkan Data Anggota -->
                @foreach($user as $rsUser)
                <tr>
                    <td>{{ $rsUser->id }}</td>
                    <td>{{ $rsUser->name }}</td>              
                    <td>{{ $rsUser->email }}</td>
                    <td>{{ $rsUser->jabatan }} </td>
                    <td>
                        <a href="{{ url('user/edit',$rsUser->id) }}"><button type="button" class="btn bg-yellow btn-flat"><i class="fa fa-pencil"></i></button></a>
                        <a href="/user/hapus/{{ $rsUser->id }}"><button type="button" class="btn bg-red btn-flat"><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop

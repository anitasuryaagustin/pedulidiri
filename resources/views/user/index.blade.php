@extends('layouts.app')

@section('content')
 


    <!DOCTYPE html>
    <html>

    <head>
        <title></title>
    </head>

    <body>
        <center>
            <h1> Data User</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nik</td>
                        <td>Nama</td>
                        <td>Alamat</td>
                        <td>Foto</td>
                        <td>No telp</td>
                        <td>Email</td>
                        <td>Username</td>
                        <td>Aksi</td>

                    </tr>
                </thead>
                @foreach ($user as $key => $p)
                    <tbody>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $p->nik }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ Auth()->getImage }}</td>
                        <td>{{ $p->no_telp }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->username }}</td>
                         <td>{{ $p->aksi }}</td>


                        <td>
                            <a href="user/delete/{{ $p->id }}" class="btn btn-warning">Hapus</a>
                            <a href="user/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                        </td>
                    <tbody>
                @endforeach
            </table>
            <a href="/user/create" class="btn btn-info">Tambah Data</a>
        </center>
    </body>

    </html>
@stop

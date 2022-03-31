@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title></title>
    </head>

    <body>
        <center>
        <h1>Data Profile</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                         <th>Nama</th>
                          <th>Nik</th>
                          <th>Kota</th>
                        <th>Kecamatan</th>
                        <th>Provinsi</th>
                        <th>Kelurahan</th>
                       <th>Aksi</th>
                    </tr>
                </thead>
                @foreach ($kota as $key => $p)
                    <tbody>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->nik }}</td>
                        <td>{{ $p->kota }}</td>
                         <td>{{ $p->kecamatan }}</td>
                          <td>{{ $p->provinsi}}</td>
                          <td>{{ $p->kelurahan}}</td>
                           <td>{{ $p->aksi}}</td>
                           <td>
                            <a href="kota/delete/{{ $p->id }}" class="btn btn-warning">Hapus</a>
                              <a href="kota/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>

                            </td>
                        {{-- <td>
                            <a href="perjalanan/edit/{{ $p->id }}" class="btn-btn sm btn-warning">Edit</a>
                        </td> --}}
                    <tbody>
                @endforeach
            </table>
            <a href="/kota/create" class="btn btn-info">Tambah Data</a>

        </center>
    </body>

    </html>
@endsection

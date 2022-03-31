@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title></title>
    </head>

    <body>
        <center>
            <h1>Data Perjalanan</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Tanggal perjalanan</td>
                        <td>Jam</td>
                        <td>Lokasi</td>
                        <td>Suhu tubuh</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                @foreach ($perjalanan as $key => $p)
                    <tbody>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $p->tgl_perjalanan }}</td>
                        <td>{{ $p->jam }}</td>
                        <td>{{ $p->lokasi }}</td>
                        <td>{{ $p->suhu_tubuh }}</td>
                        <td>
                            <a href="perjalanan/delete/{{ $p->id }}" class="btn btn-warning">Hapus</a>

                        </td>
                        {{-- <td>
                            <a href="perjalanan/edit/{{ $p->id }}" class="btn-btn sm btn-warning">Edit</a>
                        </td> --}}
                    <tbody>
                @endforeach
            </table>
            <a href="/perjalanan/create" class="btn btn-info">Tambah Data</a>
        </center>
    </body>

    </html>
@endsection

@extends('layouts.app')

@section('content')

<div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ url('images') }}/{{ Auth::user()->foto }}" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ Auth::user()->nama }}</h4>
                      <p class="text-secondary mb-1">{{ Auth::user()->email }}</p>
                  </div>
                </div>
              </div>

               <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ Auth::user()->nama }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NIK</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ Auth::user()->nik }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Telepon</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ Auth::user()->no_telp }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ Auth::user()->alamat }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ Auth::user()->email }}
                    </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="user/edit/{{ Auth::user()->id }}">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

        {{-- <center>
            <h1> Data Profile</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>Nik</td>
                        <td>Nama</td>
                        <td>Alamat</td>
                        <td>No telp</td>
                        <td>Foto</td>
                        <td>Email</td>
                        <td>Username</td>
                         <td>Aksi</td>
                    </tr>
                </thead>
                    <tbody>
                        <td>{{ Auth::user()->nik }}</td>
                        <td>{{ Auth::user()->nama }}</td>
                        <td>{{ Auth::user()->alamat }}</td>
                        <td>{{ Auth::user()->no_telp }}</td>
                        <td>{{ Auth::user()->foto }}</td>
                        <td>{{ Auth::user()->email }}</td>
                        <td>{{ Auth::user()->username }}</td>
                        <td>
                            <a href="user/delete/{{ Auth::user()->id }}" class="btn btn-warning">Hapus</a>
                            <a href="user/edit/{{ Auth::user()->id }}" class="btn btn-warning">Edit</a>
                        </td>
                    <tbody>

            </table>
        </center> --}}
@stop

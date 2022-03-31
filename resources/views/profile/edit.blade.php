@extends('layouts.app')

@section('content')
    <form action="/user/update/{{ $table->id }}" method="post">
        @csrf
        @method('PUT')
        <center>
            <h3>Edit User
        </center>
        </h3>
        <div class="card-body">
            <h4 class="card-title"></h4>
            {{-- <form class="forms-sample"> --}}
            <div class="form-group">
                <label for="exampleInputName1">Nik</label>
                <input type="text" name="nik" class="form-control" id="exampleInputName1" value="{{ $table->nik }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail3" value="{{ $table->nama }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword4">username</label>
                <input type="text" name="username" class="form-control" id="exampleInputPassword4"
                    value="{{ $table->username }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword4">No Telpon</label>
                <input type="text" name="no_telp" class="form-control" id="exampleInputPassword4"
                    value="{{ $table->no_telp }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword4">email</label>
                <input type="text" name="email" class="form-control" id="exampleInputPassword4"
                    value="{{ $table->email }}">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword4">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="exampleInputPassword4"
                    value="{{ $table->alamat }}">
            </div>
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="foto" class="file-upload-default">
                <div class="input-group col-xs-12">
                    {{-- <input type="file" class="form-control" placeholder="Upload Image"> --}}
                    {{-- <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span> --}}
                </div>
            </div>
            {{-- <div class="form-group">
                    <label for="exampleInputPassword4">Password</label>
                    <input type="text" name="password" class="form-control" id="exampleInputPassword4" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Confirm Password</label>
                    <input type="text" name="confirm_password" class="form-control" id="exampleInputPassword4" >
                </div> --}}
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
    </form>
    </div>
   
@endsection

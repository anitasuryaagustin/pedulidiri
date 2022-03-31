@extends('layouts.app')

@section('content')
    <form action="/kota/update/{{ $table->id }}" method="post">
        @csrf
        @method('PUT')
    <center><h3>Edit Profile</h3></center>
        <div class="card-body">
            <h4 class="card-title"></h4>
            <form class="forms-sample">
                <div class="form-group">
                    <label for="exampleInputEmail3">nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail3" value="{{ $table->nama}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">nik</label>
                    <input type="text" name="nik" class="form-control" id="exampleInputEmail3" value="{{ $table->nik}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Kota</label>
                    <input type="text" name="kota" class="form-control" id="exampleInputName1" value="{{ $table->kota}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control" id="exampleInputEmail3" value="{{ $table->kecamatan}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Provinsi</label>
                    <input type="text" name="provinsi" class="form-control" id="exampleInputPassword4" value="{{ $table->provinsi}}">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
        </div>
    @endsection

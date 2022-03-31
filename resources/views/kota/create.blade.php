@extends('layouts.app')

@section('content')
    <form action="/kota/store" method="post">
        @csrf
        <div class="card-body">

            <center><h3 class="card-title">Form Profile</h3></center>
            {{-- <form class="forms-sample"> --}}
             <div class="form-group">
                    <label for="exampleInputUsername1">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputUsername1" >
                </div>
                 <div class="form-group">
                    <label for="exampleInputUsername1">Nik</label>
                    <input type="text" name="nik" class="form-control" id="exampleInputUsername1" >
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Kota</label>
                    <input type="text" name="kota" class="form-control" id="exampleInputUsername1" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Provinsi</label>
                    <input type="text" name="provinsi" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Kelurahan</label>
                    <input type="text" name="kelurahan" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>

        </div>
    @endsection

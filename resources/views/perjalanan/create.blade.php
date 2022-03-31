@extends('layouts.app')

@section('content')
    <form action="/perjalanan/store" method="post">
        @csrf
        <div class="card-body">

            <center><h3 class="card-title">Form Perjalanan</h3></center>
            <form class="forms-sample">
                <div class="form-group">
                    <label for="exampleInputUsername1">Tanggal Perjalanan</label>
                    <input type="date" name="tgl_perjalanan" class="form-control" id="exampleInputUsername1" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jam</label>
                    <input type="time" name="jam" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Suhu Tubuh</label>
                    <input type="text" name="suhu_tubuh" class="form-control" id="exampleInputConfirmPassword1">
                </div>
                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me <i class="input-helper"></i></label>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>

        </div>
    @endsection

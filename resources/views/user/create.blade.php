@extends('layouts.app')

@section('content')
    <form action="/user/store" method="post">
        @csrf
        {{-- <center>
<h1>Form User </h1>
    <table>
    <tr>
        <td>nik</td>
        <td> : <input type="text" name="nik"></td>
    </tr>
     <tr>
        <td>nama</td>
        <td> : <input type="text" name="nama"></td>
    </tr>
     <tr>
        <td>alamat</td>
        <td> : <input type="text" name="alamat"></td>
    </tr>
     <tr>
        <td>no_telp</td>
        <td> : <input type="text" name="no_telp"></td>
    </tr>
    <tr>
        <td>email</td>
        <td> : <input type="text" name="c"></td>
    </tr>
    <tr>
        <td>Username</td>
         <td> : <input type="text" name="username"></td>
    </tr>
    <td>password</td>
         <td> : <input type="text" name="password"></td>
         </tr>
         <tr>
          <td>confirm password</td>
         <td> : <input type="text" name="confirm_password"></td>
         </tr>
    </table>
    <button type ="submit">simpan</button>
</center>
</form> --}}


        <div class="card-body">

           <center><h3 class="card-title">Form User</h3></center>
            <form class="forms-sample">
                <div class="form-group">
                    <label for="exampleInputName1">Nik</label>
                    <input type="text" name="nik" class="form-control" id="exampleInputName1" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail3">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputPassword4" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">No Telpon</label>
                    <input type="text" name="no_telp" class="form-control" id="exampleInputPassword4" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword4" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputPassword4" >
                </div>
                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Password</label>
                    <input type="text" name="password" class="form-control" id="exampleInputPassword4" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Confirm Password</label>
                    <input type="text" name="confirm_password" class="form-control" id="exampleInputPassword4" >
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
        </div>
    @endsection

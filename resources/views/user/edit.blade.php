@extends('layouts.app')

@section('content')
    <form method="POST" action="/user/update/{{ Auth::user()->id }}" enctype="multipart/form-data">
                            @csrf
        <center><h3>Edit Profile</center></h3>
        <div class="card-body">
            <h4 class="card-title"></h4>
            {{-- <form class="forms-sample"> --}}
                <div class="form-group">
                    <label for="exampleInputName1">Nik</label>
                    <input type="text" name="nik" class="form-control" id="exampleInputName1" value="{{ Auth::user()->nik }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail3" value="{{ Auth::user()->nama }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputPassword4" value="{{ Auth::user()->username }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">No Telpon</label>
                    <input type="text" name="no_telp" class="form-control" id="exampleInputPassword4" value="{{ Auth::user()->no_telp }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword4" value="{{ Auth::user()->email }}">
                </div>
                <div>
                <div class="flex-grow-1">
                    <div class="form-group">
                        <label for="email" class="col-form-label text-md-right">Provinsi, Kota, Kecamatan, Kelurahan</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="selectProvinsi">Provinsi</label>
                            </div>
                            <select class="custom-select" id="selectProvinsi">
                                <option selected>Pilih Provinsi</option>
                            </select>
                        </div>

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="selectProvinsi">Kota</label>
                            </div>
                            <select class="custom-select" id="selectKota">

                            </select>
                        </div>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="selectKecamatan">Kecamatan</label>
                            </div>
                            <select class="custom-select" id="selectKecamatan">

                            </select>
                        </div>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="selectKelurahan">Kelurahan</label>
                            </div>
                            <select class="custom-select" id="selectKelurahan">

                            </select>
                        </div>
                    </div>
                </div>
            </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="{{ Auth::user()->alamat }}">
                </div>
                <div class="form-group">
                    <label>File upload</label>
                   <input type="file" name="foto"  value="{{ Auth::user()->foto }}">
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
         <script>
        let selectProvinsi = document.getElementById('selectProvinsi');
        let selectKota = document.getElementById('selectKota');
        let selectKecamatan = document.getElementById('selectKecamatan');
        let selectKelurahan = document.getElementById('selectKelurahan');
        let alamat = document.getElementById('alamat');
        document.addEventListener("DOMContentLoaded", function() {
            fetchProvinsi();
            selectKota.style.display = "none";
            selectKecamatan.style.display = "none";
            selectKelurahan.style.display = "none";
            // fetchKota();
            // fetchKecamatan();
            // fetchKelurahan();
            getValueToAlamat();
        });
        const config = {
            method: "GET"
        };
        async function fetchProvinsi() {
            const URL = 'http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json';
            await fetch(URL, config)
                .then(response => response.json())
                .then(provinsi => {
                    if (provinsi !== null || undefined) {
                        provinsi.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectProvinsi.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                }).catch(error => alert(`Data provinsi tidak ada`));
        }
        async function fetchKota(id) {
            const URL =
                `http://www.emsifa.com/api-wilayah-indonesia/api/regencies/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
                .then(response => response.json())
                .then(kota => {
                    if (kota !== null || undefined) {
                        kota.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKota.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                });
        }
        async function fetchKecamatan(id) {
            const URL =
                `http://www.emsifa.com/api-wilayah-indonesia/api/districts/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
                .then(response => response.json())
                .then(kecamatan => {
                    if (kecamatan !== null || undefined) {
                        kecamatan.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKecamatan.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                });
        }
        async function fetchKelurahan(id) {
            const URL =
                `http://www.emsifa.com/api-wilayah-indonesia/api/villages/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
                .then(response => response.json())
                .then(kelurahan => {
                    if (kelurahan !== null || undefined) {
                        kelurahan.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKelurahan.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                });
        }
        // selectProvinsi.addEventListener('change', () => {
        //     console.log(selectProvinsi.options[selectProvinsi.selectedIndex].text);
        // })
        selectProvinsi.addEventListener('change', () => {
            fetchKota(selectProvinsi.value);
            selectKota.style.display = "block";
            selectKota.innerHTML = '';
            selectKecamatan.innerHTML = '';
            selectKelurahan.innerHTML = '';
        });
        selectKota.addEventListener('change', () => {
            fetchKecamatan(selectKota.value);
            selectKecamatan.style.display = "block";
            selectKecamatan.innerHTML = '';
            selectKelurahan.innerHTML = '';
        });
        selectKecamatan.addEventListener('change', () => {
            fetchKelurahan(selectKecamatan.value);
            selectKelurahan.style.display = "block";
            selectKelurahan.innerHTML = '';
        });

        function getValueToAlamat() {
            alamat.addEventListener('change', () => {
                let alamatText = alamat.value;
                document.getElementById('alamat').value =
                    `${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKota.options[selectKota.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `;
                // console.log(`${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKota.options[selectKota.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `);
            });
        }
    </script>
    @endsection


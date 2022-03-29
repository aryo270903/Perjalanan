@extends('layout.App')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body {
                margin-top: 20px;
                background: #f8f8f8
            }

        </style>
    </head>

    <body>
        <div class="site-blocks-cover">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <div class="col-md-12 aos-init aos-animate" style="position: relative;" data-aos="fade-up">

                        <img src="{{ asset('assets/images/landing_1.png') }}" alt="Image" class="img-fluid img-absolute">

                        <div class="row mb-4">
                            <div class="col-lg-4 mr-auto">
                                <h1>Lihat Dan Edit Profil Anda</h1>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row flex-lg-nowrap">
                <div class="col">
                    <div class="row">
                        <div class="col mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="e-profile">
                                        <div class="row">
                                            <div class="col-12 col-sm-auto mb-3">
                                                <div class="mx-auto" style="width: 140px;">
                                                    <img 
                                                    @if (auth()->user()->gambar > 0) src="{{ url('image/') }}/{{ auth()->user()->gambar }}" 
                                                    @else src="{{ url('image/3.png') }}" 
                                                    @endif
                                                        alt="Admin" class="rounded-circle" width="300">
                                                </div>
                                            </div>
                                            <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                    <!-- <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"> {{ auth()->user()->name }}</h4>
                                    <p class="mb-0"> {{ auth()->user()->email }}</p> -->
                                                    <!-- <div class="text-muted"><small>Last seen 2 hours ago</small></div> -->
                                                </div>
                                                <!-- <div class="text-center text-sm-right">
                                                            <span class="badge badge-secondary">administrator</span>
                                                            <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                                                        </div> -->
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                                    role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact"
                                                    role="tab" aria-controls="contact" aria-selected="false">Profile
                                                    Edit</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade" id="profile" role="tabpanel"
                                                aria-labelledby="profile-tab">
                                                <form class="form" novalidate="">
                                                    <div class="row">
                                                        <div class="col">

                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>NIK Anda</label>
                                                                        <input type="text" class="form-control" name="nik"
                                                                            placeholder="NIK Anda"
                                                                            value="{{ auth()->user()->nik }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Nama Anda</label>
                                                                        <input type="text" class="form-control"
                                                                            name="notlp" placeholder="Phone Anda"
                                                                            value="{{ auth()->user()->name }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Phone Anda</label>
                                                                        <input type="text" class="form-control"
                                                                            name="notlp" placeholder="Phone Anda"
                                                                            value="{{ auth()->user()->notlp }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Email</label>
                                                                        <input type="email" class="form-control"
                                                                            name="email" placeholder="Email Anda"
                                                                            value="{{ auth()->user()->email }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mb-3">
                                                                    <div class="form-group">
                                                                        <label>Alamat</label>
                                                                        <textarea class="form-control" rows="5" placeholder="Alamat Anda" disabled>{{ auth()->user()->alamat }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="contact" role="tabpanel"
                                                aria-labelledby="contact-tab">
                                                <form action="/profil/update/{{ $edit->id }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="tab-content pt-3">
                                                        <div class="tab-pane active">
                                                            <form class="form" novalidate="">
                                                                <div class="row">
                                                                    <div class="col">

                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label>NIK Anda</label>
                                                                                    <input type="text"
                                                                                        class="form-control" name="nik"
                                                                                        placeholder="NIK Anda"
                                                                                        value="{{ $edit->nik }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label>Nama Anda</label>
                                                                                    <input type="text"
                                                                                        class="form-control" name="name"
                                                                                        value="{{ $edit->name }}"
                                                                                        placeholder="Nama Anda">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label>Phone Anda</label>
                                                                                    <input type="text"
                                                                                        class="form-control" name="notlp"
                                                                                        placeholder="Phone Anda"
                                                                                        value="{{ $edit->notlp }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label>Email</label>
                                                                                    <input type="email"
                                                                                        class="form-control" name="email"
                                                                                        placeholder="Email Anda"
                                                                                        value="{{ $edit->email }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="form-label">Provinsi</label>
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <label class="input-group-text"
                                                                                        for="selectProvinsi">Provinsi</label>
                                                                                </div>
                                                                                <select class="custom-select"
                                                                                    name="selectProvinsi"
                                                                                    id="selectProvinsi">
                                                                                    {{-- <option>Provinsi</option> --}}
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        {{-- kabupaten/kota --}}
                                                                        <div class="form-group">
                                                                            <label class="form-label">Kabupaten</label>
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <label class="input-group-text"
                                                                                        for="selectKabupaten">Kabupaten</label>
                                                                                </div>
                                                                                <select class="custom-select"
                                                                                    name="selectKabupaten"
                                                                                    id="selectKabupaten">
                                                                                    {{-- <option>Kabupaten</option> --}}
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        {{-- kecamatan --}}
                                                                        <div class="form-group">
                                                                            <label class="form-label">Kecamatan</label>
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <label class="input-group-text"
                                                                                        for="selectKecamatan">Kecamatan</label>
                                                                                </div>
                                                                                <select class="custom-select"
                                                                                    name="selectKecamatan"
                                                                                    id="selectKecamatan">
                                                                                    {{-- <option value="Kecamatan"></option> --}}
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        {{-- kelurahan --}}
                                                                        <div class="form-group">
                                                                            <label class="form-label">Kelurahan</label>
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <label class="input-group-text"
                                                                                        for="selectKelurahan">Kelurahan</label>
                                                                                </div>
                                                                                <select class="custom-select"
                                                                                    name="selectKelurahan"
                                                                                    id="selectKelurahan">
                                                                                    {{-- <option> Kelurahan </option> --}}
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        {{-- final alamat --}}
                                                                        <div class="form-group">
                                                                            <label class="form-label">Alamat</label>
                                                                            <textarea class="form-control" name="alamat" id="alamat">{{ $data->alamat ?? '' }}</textarea>
                                                                        </div>
                                                                        {{-- end alamat --}}

                                                                        <div class="row">
                                                                            <div class="col mb-3">
                                                                                <div class="form-group">
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="gambar">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col d-flex justify-content-end">
                                                                        <button type="submit" value="Submit"
                                                                            class="btn btn-primary">Simpan</button>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer py-5 border-top text-center">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <p class="mb-0">
                            <a href="#" class="p-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="p-3"><span class="icon-twitter"></span></a>
                            <a href="#" class="p-3"><span class="icon-instagram"></span></a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="mb-0">
                            PEDULI DIRI ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script> UJI KOMPETENSI KEAHLIAN    <i
                                class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Ariyo Pranoto</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>


        <script>
            let selectProvinsi = document.getElementById('selectProvinsi');
            let selectKabupaten = document.getElementById('selectKabupaten');
            let selectKecamatan = document.getElementById('selectKecamatan');
            let selectKelurahan = document.getElementById('selectKelurahan');
            let alamat = document.getElementById('alamat');
            document.addEventListener('DOMContentLoaded', function() {
                fetchProvinsi();
                selectKabupaten.style.display = "none";
                selectKecamatan.style.display = "none";
                selectKelurahan.style.display = "none";
                getValueToAlamat();
            });
            const config = {
                method: 'GET'
            }
            // fetch provinsi get data
            async function fetchProvinsi() {
                const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`;
                await fetch(URL, config)
                    .then(response => response.json())
                    // .then(provinsi => console.log(provinsi))
                    .then(provinsi => {
                        if (provinsi != null || undefined) {
                            provinsi.map(data => {
                                let opt = document.createElement('option');
                                opt.value = data.id;
                                opt.innerHTML = data.name;
                                selectProvinsi.appendChild(opt);
                                // console.log(selectProvinsi)
                            })
                        } else {
                            let opt = document.createElement('option');
                            opt.value = "";
                            opt.innerHTML = "Data tidak tersedia";
                            selectProvinsi.appendChild(opt);
                        }
                    }).catch(error => alert(`Data provinsi tidak ada`));
            }
            // fetch kabupaten/kota get data
            async function fetchKabupaten(id) {
                const URL =
                    `http://www.emsifa.com/api-wilayah-indonesia/api/regencies/${id === undefined || null ? "" : id}.json`;
                await fetch(URL, config)
                    .then(response => response.json())
                    .then(kabupaten => {
                        if (kabupaten !== null || undefined) {
                            kabupaten.map(data => {
                                let opt = document.createElement('option');
                                opt.value = data.id;
                                opt.innerHTML = data.name;
                                selectKabupaten.appendChild(opt);
                            })
                        } else {
                            let opt = document.createElement('option');
                            opt.value = "";
                            opt.innerHTML = "Data tidak tersedia";
                            selectKabupaten.appendChild(opt);
                        }
                    })
            }
            // fetch kecamatan get data
            async function fetchKecamatan(id) {
                const URL =
                    `http://www.emsifa.com/api-wilayah-indonesia/api/districts/${id === undefined || null ? ""  : id}.json`;
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
                            selectKecamatan.appendChild(opt);
                        }
                    })
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
                            opt.innerHTML = "Data Tidak Tersedia";
                            selectKelurahan.appendChild(opt);
                        }
                    })
            }
            selectProvinsi.addEventListener('change', () => {
                fetchKabupaten(selectProvinsi.value);
                selectKabupaten.style.display = "block";
                selectKabupaten.innerHTML = '';
                selectKecamatan.innerHTML = '';
                selectKelurahan.innerHTML = '';
            });

            selectKabupaten.addEventListener('change', () => {
                fetchKecamatan(selectKabupaten.value);
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
                        `${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKabupaten.options[selectKabupaten.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `;
                    // console.log(`${alamatText}, ${selectKelurahan.options[  selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKabupaten.options[selectKabupaten.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `);

                });
            }
        </script>
    </body>

    </html>
@endsection

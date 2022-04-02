@extends('layout.App')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <section id="portfolio" class="portfolio">
        <div class="row">
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img @if (auth()->user()->gambar > 0) src="{{ url('image/') }}/{{ auth()->user()->gambar }}"
                @else src="{{ url('image/3.png') }}"
                @endif
                alt="Admin" class="rounded-circle" width="300">
            </div>
            <div class="col-lg-8 col-md-6">
                <table class="table table-hover ">
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>{{ auth()->user()->nik }}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ auth()->user()->name }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ auth()->user()->alamat }}</td>
                    </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td>:</td>
                        <td>{{ auth()->user()->notlp}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{ auth()->user()->email }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <div>
        <form action="/profil/update/{{ $edit->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleFormControlInput1">NIK</label>
                <input type="text" class="form-control" name="nik" placeholder="NIK Anda" value="{{ $edit->nik }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Nama</label>
                <input type="text" class="form-control" name="name" value="{{ $edit->name }}" placeholder="Nama Anda">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput4">No Telepon</label>
                <input type="text" class="form-control" name="notlp" placeholder="Phone Anda" value="{{ $edit->notlp }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput5">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email Anda" value="{{ $edit->email }}">
            </div>
            <div class="form-group">
                <label class="form-label">Provinsi</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="selectProvinsi">Provinsi</label>
                    </div>
                    <select class="custom-select" name="selectProvinsi" id="selectProvinsi">
                        {{-- <option>Provinsi</option> --}}
                    </select>
                </div>
            </div>
            {{-- kabupaten/kota --}}
            <div class="form-group">
                <label class="form-label">Kabupaten</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="selectKabupaten">Kabupaten</label>
                    </div>
                    <select class="custom-select" name="selectKabupaten" id="selectKabupaten">
                        {{-- <option>Kabupaten</option> --}}
                    </select>
                </div>
            </div>
            {{-- kecamatan --}}
            <div class="form-group">
                <label class="form-label">Kecamatan</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="selectKecamatan">Kecamatan</label>
                    </div>
                    <select class="custom-select" name="selectKecamatan" id="selectKecamatan">
                        {{-- <option value="Kecamatan"></option> --}}
                    </select>
                </div>
            </div>
            {{-- kelurahan --}}
            <div class="form-group">
                <label class="form-label">Kelurahan</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="selectKelurahan">Kelurahan</label>
                    </div>
                    <select class="custom-select" name="selectKelurahan" id="selectKelurahan">
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
            <div class="form-group">
                <label for="exampleFormControlInput5">Upload Gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>
            <div class="row">
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="/perjalanan" class="btn btn-danger">Kembali</a>
                </div>
                <div class="col-md-6 ">
                    <button type="submit" class="btn btn-primary">
                        Edit
                    </button>
                </div>
            </div>
        </form>
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
                        </script> UJI KOMPETENSI KEAHLIAN <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Ariyo Pranoto</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
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



@endsection
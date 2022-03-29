<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Perjalanan - Ariyo Tamplate</title>

    <link rel="stylesheet" href="{{ asset('admin/assets/css/maicons.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/animate/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/css/theme.css') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    @include('layouts.navbar')

    <div class="container mt-3">

        @yield('content')
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Perjalanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form form-horizontal" action="{{ route('perjalanan.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="field">
                            <label>Tanggal *</label>
                            <div class="control has-icon @error('tgl_perjalanan') has-validation has-error @enderror">
                                <input class="input" type="date" name="tgl_perjalanan"
                                <span class="form-icon">
                                    <i data-feather="user"></i>
                                </span>
                            </div>
                            @error('tgl_perjalanan')
                                <p class="help danger-text">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <label>Jam *</label>
                            <div class="control has-icon @error('jam') has-validation has-error @enderror">
                                <input class="input" type="time" name="jam"
                                <span class="form-icon">
                                    <i data-feather="user"></i>
                                </span>
                            </div>
                            @error('jam')
                                <p class="help danger-text">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <label>Lokasi *</label>
                            <div class="control has-icon @error('lokasi') has-validation has-error @enderror">
                                <input class="input" type="text" name="lokasi" placeholder="Lokasi"
                                    value="{{ old('lokasi') }}">
                                <span class="form-icon">
                                    <i data-feather="map"></i>
                                </span>
                            </div>
                            @error('lokasi')
                                <p class="help danger-text">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <label>Suhu Tubuh *</label>
                            <div class="control has-icon @error('suhu_tubuh') has-validation has-error @enderror">
                                <input class="input" type="text" name="suhu_tubuh" placeholder="Suhu Tubuh"
                                    value="{{ old('suhu_tubuh') }}">
                                <span class="form-icon">
                                    <i data-feather="user"></i>
                                </span>
                            </div>
                            @error('suhu_tubuh')
                                <p class="help danger-text">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                        <button type="submit" value="Submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <script src="{{ asset('admin/assets/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/google-maps.js') }}"></script>

    <script src="{{ asset('admin/assets/vendor/wow/wow.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/theme.js') }}"></script>

</body>

</html>

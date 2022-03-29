<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <title>Landerz — Website by Colorlib</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >

    </head>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" data-aos-easing="slide"
    data-aos-duration="800" data-aos-delay="0">

    <div class="site-wrap" id="home-section">

        @include('layout.topbar')

        <div class="site-blocks-cover">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    @yield('content')
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
                                <div
                                    class="control has-icon @error('tgl_perjalanan') has-validation has-error @enderror">
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
        <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('assets/js/aos.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>


        <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>

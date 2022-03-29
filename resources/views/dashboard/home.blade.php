@extends('layout.App')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" data-aos-easing="slide"
        data-aos-duration="800" data-aos-delay="0">

        <div class="site-wrap" id="home-section">
            <div class="site-blocks-cover">
                <div class="container">
                    <div class="row align-items-center justify-content-center">

                        <div class="col-md-12 aos-init aos-animate" style="position: relative;" data-aos="fade-up">

                            <img src="{{ asset('assets/images/landing_1.png') }}" alt="Image"
                                class="img-fluid img-absolute">

                            <div class="row mb-4">
                                <div class="col-lg-4 mr-auto">
                                    <h1>Selamat Datang</h1>
                                    <span
                                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">{{ auth()->user()->name }}</span>
                                    <p class="mb-5"> Anda dapat melihat profil dan perjalanan anda selama ini</p>
                                    <div>
                                        <a href="#" class="btn btn-primary mr-2 mb-2">Get Started</a>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="site-section bg-light" id="features-section" style="width: 1349px">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <h2 class="section-title mb-3">Features</h2>
                        </div>
                    </div>
                    <div class="row align-items-stretch">
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 aos-init aos-animate" data-aos="fade-up">

                            <div class="unit-4 d-block">
                                <div class="unit-4-icon mb-3">
                                    <span class="icon-wrap"><span
                                            class="text-primary icon-directions_walk"></span></span>
                                </div>
                                <div>
                                    <h3>Perjalanan</h3>
                                    <p>Fitur ini untuk melihat perjalanan anda selama ini dan kemana anda pergi.</p>
                                    <div>
                                        <a href="/perjalanan" class="btn btn-primary mr-2 mb-2">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 aos-init aos-animate" data-aos="fade-up">  
                            <div class="unit-4 d-block">
                                <div class="unit-4-icon mb-3">
                                    <span class="icon-wrap"><span class="text-primary icon-home"></span></span>
                                </div>
                                <div>
                                    <h3>Dashboard</h3>
                                    <p>Untuk Kembali ketampilan awal atau melihat fitur lain.</p>
                                    <div>
                                        <a href="/dashboard" class="btn btn-primary mr-2 mb-2">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 aos-init aos-animate" data-aos="fade-up">
                            <div class="unit-4 d-block">
                                <div class="unit-4-icon mb-3">
                                    <span class="icon-wrap"><span
                                            class="text-primary icon-account_circle"></span></span>
                                </div>
                                <div>
                                    <h3>Profil</h3>
                                    <p>Untuk melihat data diri anda dan bisa mengubah data diri anda jika tidak sesuai</p>
                                    <div>
                                        <a href="/profil/edit/{{ auth()->user()->id }}"
                                            class="btn btn-primary mr-2 mb-2">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 aos-init aos-animate" data-aos="fade-up">
                            <div class="unit-4 d-block">
                                <div class="unit-4-icon mb-3">
                                    <span class="icon-wrap"><span
                                            class="text-primary icon-import_contacts"></span></span>
                                </div>
                                <div>
                                    <h3>Data User</h3>
                                    <p>Untuk Melihat user yang login dan Hanya admin yang bisa lihat</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 aos-init aos-animate" data-aos="fade-up">
                            <div class="unit-4 d-block">
                                <div class="unit-4-icon mb-3">
                                    <span class="icon-wrap"><span
                                            class="text-primary icon-print"></span></span>
                                </div>
                                <div>
                                    <h3>Print</h3>
                                    <p>Untuk Print user yang login dan hanya admin yang bisa print data user</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 aos-init aos-animate" data-aos="fade-up">
                            <div class="unit-4 d-block">
                                <div class="unit-4-icon mb-3">
                                    <span class="icon-wrap"><span
                                            class="text-primary icon-power_settings_new"></span></span>
                                </div>
                                <div>
                                    <h3>Keluar</h3>
                                    <p>Untuk Keluar Dari aplikasi atau websiite ini</p>
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
        </div> <!-- .site-wrap -->
    </body>

    </html>
@stop

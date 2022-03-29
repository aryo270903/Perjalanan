@extends('layout.App')
@section('content')
<div class="site-blocks-cover">
    <div class="container">
        <div class="row align-items-center justify-content-center">

            <div class="col-md-12 aos-init aos-animate" style="position: relative;" data-aos="fade-up">

                <img src="{{ asset('assets/images/landing_1.png') }}" alt="Image" class="img-fluid img-absolute">

                <div class="row mb-4">
                    <div class="col-lg-4 mr-auto">
                        <h1>Tambah Perjalanan Anda</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">My Profile</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-auto mb-2">
                                    <img @if (auth()->user()->gambar > 0) src="{{ url('image/') }}/{{ auth()->user()->gambar }}"
                                    @else src="{{ url('image/3.png') }}"
                                    @endif
                                    alt="Admin" class="rounded-circle" width="300">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Perjalanan</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover card-table table-vcenter text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Jam</th>
                                        <th scope="col">Lokasi</th>
                                        <th scope="col">Suhu Tubuh</th>
                                        <th scope="col">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Tambah
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $id => $jalan)
                                    <tr>
                                        <td>{{ $id + 1 }}</td>
                                        <td>{{ $jalan['tgl_perjalanan'] }}</td>
                                        <td>{{ $jalan['jam'] }}</td>
                                        <td>{{ $jalan['lokasi'] }}</td>
                                        <td>{{ $jalan['suhu_tubuh'] }}°</td>
                                        <td>
                                            <form action="{{ route('perjalanan.destroy', $jalan->id) }}" method="post">
                                                @csrf
                                                @method ('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                {{ $data->links() }}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section bg-light" id="features-section" style="width: 1349px">
        <div id="cc">

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
                        </script> UJI KOMPETENSI KEAHLIAN <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Ariyo Pranoto</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart('cc', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Table Pergi Tahunan'
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Berapa Tempat Berpergian'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:5px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 1
                }
            },
            series: [{
                name: 'Perjalanan Selama Ini',
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

            }]
        });
    </script>
    @endsection
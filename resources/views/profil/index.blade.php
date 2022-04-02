@extends('layout.App')
@section('content')
<div class="site-blocks-cover">
  <div class="container">
      <div class="row align-items-center justify-content-center">

          <div class="col-md-12 aos-init aos-animate" style="position: relative;" data-aos="fade-up">

              <img src="{{ asset('assets/images/landing_1.png') }}" alt="Image" class="img-fluid img-absolute">

              <div class="row mb-4">
                  <div class="col-lg-4 mr-auto">
                      <h1>Data User</h1>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nik</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Telpon</th>
        <th scope="col">Role</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $id => $datauser)
      <tr>
        <td>{{ $id + 1 }}</td>
        <td>{{ $datauser['nik'] }}</td>
        <td>{{ $datauser['name'] }}</td>
        <td>{{ $datauser['email'] }}</td>
        <td>{{ $datauser['notlp'] }}</td>
        <td>{{ $datauser['role'] }}</td>
      </tr>
  @endforeach
    </tbody>
    <div class="row">
      <a href="{{ route('print')}}" class="btn btn-sm btn-danger"> Print</a>
  </div>
  </table>
  </nav>
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
@endsection
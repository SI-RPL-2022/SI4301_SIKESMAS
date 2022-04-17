<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="{{asset('image/logo.png')}}">
    <title>
        SIKESMAS
    </title>
</head>

<body>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <img src="{{asset('image/logo.png')}}" alt="" width="70" height="70" class="d-inline-block align-text-top"
                href="#">
            <a class="navbar-brand" href="#"
                style="font-family:Poppins; font-size:25px; font-weight:bold; color:#DA2871;">
                Sikesmas
            </a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto me-5" style="font-family:Poppins; font-size:17px;">
                    @if (session('login'))
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link" href="#">Layanan</a>
                    <a class="nav-link" href="#">Tentang Kami</a>
                    <a class="nav-link" href="#">Tanya Dokter</a>
                    <a class="nav-link" href="/regis">{{ $user -> nama_pasien }}</a>
                    @else
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link" href="#">Layanan</a>
                    <a class="nav-link" href="#">Tentang Kami</a>
                    <a class="nav-link" href="#">Tanya Dokter</a>
                    <a class="nav-link" href="/regis">Daftar</a>
                    <a class="nav-link" href="/login">Login</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <div class="container sm">
        <div class="card layout5" style="width: 100%; background:#F4F3EE;">
            <div class="card-body">
                <h5 class="card-title poppins">Home > Profil Pasien</h5>
                <h5 class="card-title poppins fw-bold" style="color:#5BD5CF;margin:20px 0 0 15px">{{ $user -> nama_pasien }}</h5>
                <div class="row">
                    <div class="col-6" style="margin:20px 0 0 15px">
                        <img class="rounded-profil" src="{{asset('image/profil.jpg')}}">
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-5">
                                <input type="text" readonly class="form-control-plaintext" id="nik"
                                    value="{{ $user -> nik }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="bpjs" class="col-sm-2 col-form-label">No BPJS</label>
                            <div class="col-5">
                                <input type="text" readonly class="form-control-plaintext" id="bpjs"
                                    value="{{ $user -> no_bpjs }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-5">
                                <input type="text" readonly class="form-control-plaintext" id="nama"
                                    value="{{ $user -> nama_pasien }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-5">
                                <input type="text" readonly class="form-control-plaintext" id="jeniskelamin"
                                    value="{{ $user -> jenis_kelamin }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="noHP" class="col-sm-2 col-form-label">No. HP</label>
                            <div class="col-5">
                                <input type="text" readonly class="form-control-plaintext" id="noHP"
                                    value="{{ $user -> no_hp }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pass" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-5">
                                <input type="password" readonly class="form-control-plaintext" id="pass"
                                    value="{{ $user -> password }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-2 poppins fw-bold" style="margin-right:40px;"
                        href="/pasien/{{session('id')}}/edit">Edit</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="image/logo.png">
    <title>
        Sikesmas | Home
    </title>
</head>

<body>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/Chart.js"></script>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <img src="{{asset('image/logo.png')}}" alt="" width="70" height="70" class="d-inline-block align-text-top" href="#">
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
                    <a class="nav-link" href="/home">Home</a>
                    <a class="nav-link" href="/admin">Daftar Admin</a>
                    <a class="nav-link" href="{{ route('indexDokter') }}">Daftar Dokter</a>
                    <a class="nav-link" href="/daftarKamar">Daftar Kamar</a>
                    <a class="nav-link" href="{{ route('logoutAdmin') }}">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <div class="container-fluid bawah text-center">
        <p>Copyright © 2022 - Website SIKESMAS</p>
    </div>

</body>
</hmtl>
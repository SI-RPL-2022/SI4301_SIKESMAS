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
            <img src="{{asset('image/logo.png')}}" alt="" width="70" height="70" class="d-inline-block align-text-top" href="#">
            <a class="navbar-brand" href="#"
                style="font-family:century gothic; font-size:25px; font-weight:bold; color:#DA2871;">
                Sikesmas
            </a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto me-5" style="font-family:century gothic; font-size:17px;">
                    @if (session('login'))
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link" href="#">Layanan</a>
                    <a class="nav-link" href="#">Tentang Kami</a>
                    <a class="nav-link" href="#">Tanya Dokter</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $user -> nama_pasien }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/pasien/{{session('id')}}">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>
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

    @yield('content')

</body>
</hmtl>
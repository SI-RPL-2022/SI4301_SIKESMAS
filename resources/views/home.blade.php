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
        SIKESMAS
    </title>
</head>

<body>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <img src="image/logo.png" alt="" width="70" height="70" class="d-inline-block align-text-top" href="#">
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

    @if (session('berhasil_login'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('berhasil_login') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session('logout'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('logout') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    <div class="container-fluid bg">
    </div>

    <div class="container-fluid" style="background:#F4F3EE">
        <div class="d-flex justify-content-center">
            <img src="image/lokasi.png" alt="" width="150" height="150" href="#">
            <div class="col-2">
                <p class="century gothic fw-bold text" style="color:#5BD5CF;font-size:20px">Alamat Puskesmas</p>
                <p class="century gothic">Jl. Raya Bojongsoang No.232, Cipagalo Kec. Bojongsoang, Kabupaten Bandung Jawa Barat
                    40287</p>
            </div>
            <img src="image/waktu.png" alt="" width="145" height="145" href="#">
            <div class="col-2">
                <p class="century gothic text" style="font-size:20px"><span id="tanggalwaktu"></p>
                <p class="century gothic fw-bold" style="color:#5BD5CF;font-size:35px">07.00 - 22.00</p>
            </div>
            <img src="image/telepon.png" alt="" width="150" height="150" href="#">
            <div class="col-2">
                <p class="century gothic fw-bold text" style="color:#5BD5CF;font-size:20px">Hubungi Kami</p>
                <p class="century gothic text1">(021) 67328304</p>
                <p class="century gothic text1">puskesmas@gmail.com</p>
                <p class="century gothic fw-bold text1">Unit Gawat Darurat 24jam</p>
            </div>
        </div>
    </div>

    <div class="container layout1 sm">
        <div class="d-flex justify-content-center">
            <div class="col-sm-5">
                <img src="image/logo.png" alt="" width="300" height="300" href="#">
            </div>
            <div class="col-sm-5">
                <p class="century gothic text2">Website ini dibuat untuk mengenalkan Puskesmas Kecamatan kepada masyarakat
                    luas.
                    Berisi berbagai macam informasi terkait baik pelayanan maupun kegiatan yang ada di Puskesmas
                    Kecamatan Senen. Pengunjung website ini juga dapat menggunakan fitur Tanya Dokter untuk mengetahui
                    informasi terkait dengan penyakit, tindakan dan pengobatan tanpa perlu bertemu dokter secara
                    langsung. Kami akan usahakan membalas pertanyaan anda secepat mungkin.
                    Kami harapkan anda bersedia menghubungi kami baik melalui telepon, email, maupun formulir kontak
                    pada halaman Hubungi Kami untuk memberikan masukan-masukan demi pengembangan pada pelayanan kami.
                </p>
            </div>
        </div>
    </div>

    <div class="container1 layout1 sm">
        <div class="row">
            <div class="col-sm-8"
                style="background-color:#5BD5CF;padding: 1rem 0 1rem 2rem;border-radius: 10px 0 0 10px;">
                <p class="century gothic fw-bold" style="color:#DA2871;font-size:20px;">Dokter Jaga</p>
                <p style="font-size:12px;color:white;"><span id="tanggalwaktu2"></span></p>
                <div class="row">
                    <div class="col-8">
                        <p class="century gothic fw-bold text-light">Dr. Heny Marta (Gigi)</p>
                        <p class="century gothic fw-bold text-light">Dr. Suryono (Mata)</p>
                        <p class="century gothic fw-bold text-light">Dr. Neni Salim (Kandungan)</p>
                        <p class="century gothic fw-bold text-light">Dr. Reza Ahmad (Umum)</p>
                    </div>
                    <div class="col-4">
                        <p class="century gothic fw-bold text-light">08.30 - 11.00</p>
                        <p class="century gothic fw-bold text-light">10.30 - 13.00</p>
                        <p class="century gothic fw-bold text-light">12.30 - 15.00</p>
                        <p class="century gothic fw-bold text-light">14.30 - 17.00</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="background-color:#DA2871;padding: 2rem 0 0 0; border-radius: 0 10px 10px 0;">
                <div class="d-flex justify-content-center">
                    <img src="image/calendar.png" alt="" width="70" height="70" href="#">
                </div>
                <p class="century gothic fw-bold text-center" style="color:white;font-size:20px;">Booking Antrian Periksa</p>
                <p class="century gothic text-center" style="color:white;font-size:18px;text-align:justify;">Daftar periksa
                    dengan mudah
                    tanpa ribet dengan sekali klik.</p>
                <div class="d-flex justify-content-center">
                    <a href="/booking" class="btn btn-1">Booking</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container2">
        <div class="row">
            <div class="col-sm-7 bg2" style="padding: 5rem 0 0 5rem;">
                <p class="century gothic fw-bold text1" style="color:white;font-size:40px;">Puskesmas Sejahtera</p>
                <p class="century gothic fw-light" style="color:white;font-size:20px;"><i>Memberikan layanan yang unggul dan
                        terbaik</i></p>
            </div>
            <div class="col-sm-5" style="background-color:#333333;padding: 2rem 0 0 2rem;">
                <p class="century gothic fw-bold" style="color:#5BD5CF;font-size:25px">Kapasitas Puskesmas</p>
                <div class="container sm">
                    <div class="row">
                        <div class="col-8">
                            <p class="century gothic fw-bold" style="color:white;font-size:18px">Tenaga Dokter</p>
                            <p class="century gothic fw-bold" style="color:white;font-size:18px">Tenaga Medis</p>
                            <p class="century gothic fw-bold" style="color:white;font-size:18px">Fasilitas Kamar</p>
                            <p class="century gothic" style="color:white;font-size:15px;margin-left:7px;"><i>Ruang Anturium /
                                    V1</i></p>
                            <p class="century gothic" style="color:white;font-size:15px;margin-left:7px;"><i>Ruang Andraeanum /
                                    V2</i></p>
                            <p class="century gothic" style="color:white;font-size:15px;margin-left:7px;"><i>Ruang Alocasia /
                                    V3</i></p>
                            <p class="century gothic fw-bold" style="color:white;font-size:18px">Tempat Tidur</p>
                            <p class="century gothic fw-bold" style="color:white;font-size:18px">Unit Layanan</p>
                        </div>
                        <div class="col">
                            <p class="century gothic" style="color:white;font-size:18px">12 Orang</p>
                            <p class="century gothic" style="color:white;font-size:18px">20 Orang</p>
                            <p class="century gothic" style="color:#333333;font-size:18px">20 Orang</p>
                            <p class="century gothic" style="color:white;font-size:18px">8 Kamar</p>
                            <p class="century gothic" style="color:white;font-size:18px">11 Kamar</p>
                            <p class="century gothic" style="color:white;font-size:18px">7 Kamar</p>
                            <p class="century gothic" style="color:white;font-size:18px">97 Bed</p>
                            <p class="century gothic" style="color:white;font-size:18px">7 Poli</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-outline-light"><i>Baca Selengkapnya</i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container sm layout1">
        <h3 class="text-center">Unit Layanan Puskesmas</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="image/gigi.jpg" class="card-img-top h-100 bw" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body" style="background: #5BD5CF;">
                                <h5 class="card-title century gothic fw-bold text-light">Poli Gigi</h5>
                                <p class="card-text century gothic text-light">Ini adalah contoh laman. Ini berbeda dengan
                                    posting
                                    blog karena akan
                                    tetap berada di satu tempat dan akan muncul di website.</p>
                                <a href="#" class="btn btn-outline-light">Booking Antrian</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="image/anak.jpg" class="card-img-top h-100 bw" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body" style="background: #5BD5CF;">
                                <h5 class="card-title century gothic fw-bold text-light">Poli Anak</h5>
                                <p class="card-text century gothic text-light">Ini adalah contoh laman. Ini berbeda dengan
                                    posting
                                    blog karena akan
                                    tetap berada di satu tempat dan akan muncul di website.</p>
                                <a href="#" class="btn btn-outline-light">Booking Antrian</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="image/mata.jpg" class="card-img-top h-100 bw" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body" style="background: #5BD5CF;">
                                <h5 class="card-title century gothic fw-bold text-light">Poli Mata</h5>
                                <p class="card-text century gothic text-light">Ini adalah contoh laman. Ini berbeda dengan
                                    posting
                                    blog karena akan
                                    tetap berada di satu tempat dan akan muncul di website.</p>
                                <a href="#" class="btn btn-outline-light">Booking Antrian</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="image/umum.jpg" class="card-img-top h-100 bw" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body" style="background: #5BD5CF;">
                                <h5 class="card-title century gothic fw-bold text-light">Poli Umum</h5>
                                <p class="card-text century gothic text-light">Ini adalah contoh laman. Ini berbeda dengan
                                    posting
                                    blog karena akan
                                    tetap berada di satu tempat dan akan muncul di website.</p>
                                <a href="#" class="btn btn-outline-light">Booking Antrian</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="image/kandungan.jpg" class="card-img-top h-100 bw" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body" style="background: #5BD5CF;">
                                <h5 class="card-title century gothic fw-bold text-light">Poli Kandungan</h5>
                                <p class="card-text century gothic text-light">Ini adalah contoh laman. Ini berbeda dengan
                                    posting
                                    blog karena akan
                                    tetap berada di satu tempat dan akan muncul di website.</p>
                                <a href="#" class="btn btn-outline-light">Booking Antrian</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="image/tht.jpg" class="card-img-top h-100 bw" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body" style="background: #5BD5CF;">
                                <h5 class="card-title century gothic fw-bold text-light">Poli THT</h5>
                                <p class="card-text century gothic text-light">Ini adalah contoh laman. Ini berbeda dengan
                                    posting
                                    blog karena akan
                                    tetap berada di satu tempat dan akan muncul di website.</p>
                                <a href="#" class="btn btn-outline-light">Booking Antrian</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container sm layout4" style="background: #333333;">
        <h3 class="century gothic fw-bold text-light text-center">Antrian Poli</h3>
        <div class="row" style="padding-left:1%;">
            <div class="col-2">
                <h1 class="century gothic text-light fw-bold text-center" style="font-size:60px">15</h1>
            </div>
            <div class="col-2">
                <h1 class="century gothic text-light fw-bold text-center" style="font-size:60px">15</h1>
            </div>
            <div class="col-2">
                <h1 class="century gothic text-light fw-bold text-center" style="font-size:60px">15</h1>
            </div>
            <div class="col-2">
                <h1 class="century gothic text-light fw-bold text-center" style="font-size:60px">15</h1>
            </div>
            <div class="col-2">
                <h1 class="century gothic text-light fw-bold text-center" style="font-size:60px">15</h1>
            </div>
            <div class="col-2">
                <h1 class="century gothic text-light fw-bold text-center" style="font-size:60px">15</h1>
            </div>
        </div>
    </div>
    <div class="container sm layout3" style="background:#DA2871;">
        <div class="row" style="padding-left:1%;">
            <div class="col-2">
                <h1 class="century gothic text-light fw-bold text-center" style="font-size:18px">Poli Gigi</h1>
            </div>
            <div class="col-2">
                <h1 class="century gothic text-light fw-bold text-center" style="font-size:18px">Poli Anak</h1>
            </div>
            <div class="col-2">
                <h1 class="century gothic text-light fw-bold text-center" style="font-size:18px">Poli Mata</h1>
            </div>
            <div class="col-2">
                <h1 class="century gothic text-light fw-bold text-center" style="font-size:18px">Poli Umum</h1>
            </div>
            <div class="col-2">
                <h1 class="century gothic text-light fw-bold text-center" style="font-size:18px">Poli Kandungan</h1>
            </div>
            <div class="col-2">
                <h1 class="century gothic text-light fw-bold text-center" style="font-size:18px">Medical Check-up</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid sm layout5" style="background:#5BD5CF;">
        <div class="row">
            <div class="col-5">
                <h5 class="century gothic fw-bold">LAYANAN SIKESMAS</h5>
                <ul style="list-style-type:none;">
                    <li><a href=" " class="century gothic text4">Booking Antrian Online</a></li>
                    <li><a href=" " class="century gothic text4">Konsultasi Dokter</a></li>
                    <li><a href=" " class="century gothic text4">Hasil Pemeriksaan Terintegrasi</a></li>
                    <li><a href=" " class="century gothic text4">Booking Ruang Rawat Inap </a></li>
                    <li><a href=" " class="century gothic text4">Checkout Resep Dokter</a></li>
                </ul>
            </div>
            <div class="col-4">
                <h5 class="century gothic fw-bold">REVIEW PELAYANAN</h5>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Anda</label>
                                <input type="text" class="form-control" id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="feedback" class="form-label">Feedback</label>
                                <textarea class="form-control" id="feedback" rows="3"></textarea>
                            </div>
                            <div class="center">
                                <a href=" " class="btn btn-2">Kirim</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <p class="century gothic text-center layout6">Copyright © 2022 - Website SIKESMAS</p>
    </div>
    <script>
    var tw = new Date();
    if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
    else(a = tw.getTime());
    tw.setTime(a);
    var tahun = tw.getFullYear();
    var hari = tw.getDay();
    var bulan = tw.getMonth();
    var tanggal = tw.getDate();
    var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
    var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus",
        "September",
        "Oktober", "Nopember", "Desember");
    document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] +
        " " +
        tahun;
    </script>

    <script>
    var tw = new Date();
    if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
    else(a = tw.getTime());
    tw.setTime(a);
    var tahun = tw.getFullYear();
    var hari = tw.getDay();
    var bulan = tw.getMonth();
    var tanggal = tw.getDate();
    var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
    var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus",
        "September",
        "Oktober", "Nopember", "Desember");
    document.getElementById("tanggalwaktu2").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] +
        " " +
        tahun;
    </script>
</body>

</html>
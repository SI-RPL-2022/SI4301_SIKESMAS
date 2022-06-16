@extends('template.template')
@section('content')
    
    <div class="container-fluid bg">
    </div>

    <div class="container-fluid" style="background:#F4F3EE">
        <div class="d-flex justify-content-center">
            <img src="image/lokasi.png" alt="" width="150" height="150" href="#">
            <div class="col-2">
                <p class="poppins fw-bold text" style="color:#5BD5CF;font-size:20px">Alamat Puskesmas</p>
                <p class="poppins">Jl. Raya Bojongsoang No.232, Cipagalo Kec. Bojongsoang, Kabupaten Bandung Jawa Barat
                    40287</p>
            </div>
            <img src="image/waktu.png" alt="" width="145" height="145" href="#">
            <div class="col-2">
                <p class="poppins text" style="font-size:20px"><span id="tanggalwaktu"></p>
                <p class="poppins fw-bold" style="color:#5BD5CF;font-size:35px">07.00 - 22.00</p>
            </div>
            <img src="image/telepon.png" alt="" width="150" height="150" href="#">
            <div class="col-2">
                <p class="poppins fw-bold text" style="color:#5BD5CF;font-size:20px">Hubungi Kami</p>
                <p class="poppins text1">(021) 67328304</p>
                <p class="poppins text1">puskesmas@gmail.com</p>
                <p class="poppins fw-bold text1">Unit Gawat Darurat 24jam</p>
            </div>
        </div>
    </div>

    <div class="container layout1 sm">
        <div class="d-flex justify-content-center">
            <div class="col-sm-5">
                <img src="image/logo.png" alt="" width="300" height="300" href="#">
            </div>
            <div class="col-sm-5">
                <p class="poppins text2">Website ini dibuat untuk mengenalkan Puskesmas Kecamatan kepada masyarakat
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
                <p class="poppins fw-bold" style="color:#DA2871;font-size:20px;">Dokter Jaga</p>
                <p style="font-size:12px;color:white;"><span id="tanggalwaktu2"></span></p>
                <div class="row">
                    <div class="col-8">
                        <p class="poppins fw-bold text-light">Dr. Heny Marta (Gigi)</p>
                        <p class="poppins fw-bold text-light">Dr. Suryono (Mata)</p>
                        <p class="poppins fw-bold text-light">Dr. Neni Salim (Kandungan)</p>
                        <p class="poppins fw-bold text-light">Dr. Reza Ahmad (Umum)</p>
                    </div>
                    <div class="col-4">
                        <p class="poppins fw-bold text-light">08.30 - 11.00</p>
                        <p class="poppins fw-bold text-light">10.30 - 13.00</p>
                        <p class="poppins fw-bold text-light">12.30 - 15.00</p>
                        <p class="poppins fw-bold text-light">14.30 - 17.00</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="background-color:#DA2871;padding: 2rem 0 0 0; border-radius: 0 10px 10px 0;">
                <div class="d-flex justify-content-center">
                    <img src="image/calendar.png" alt="" width="70" height="70" href="#">
                </div>
                <p class="poppins fw-bold text-center" style="color:white;font-size:20px;">Booking Antrian Periksa</p>
                <p class="poppins text-center" style="color:white;font-size:18px;text-align:justify;">Daftar periksa
                    dengan mudah
                    tanpa ribet dengan sekali klik.</p>
                <div class="d-flex justify-content-center">
                    <a href="/layanan" class="btn btn-1">Booking</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container2">
        <div class="row">
            <div class="col-sm-7 bg2" style="padding: 5rem 0 0 5rem;">
                <p class="poppins fw-bold text1" style="color:white;font-size:40px;">Puskesmas Sejahtera</p>
                <p class="poppins fw-light" style="color:white;font-size:20px;"><i>Memberikan layanan yang unggul dan
                        terbaik</i></p>
            </div>
            <div class="col-sm-5" style="background-color:#333333;padding: 2rem 0 0 2rem;">
                <p class="poppins fw-bold" style="color:#5BD5CF;font-size:25px">Kapasitas Puskesmas</p>
                <div class="container sm">
                    <div class="row">
                        <div class="col-8">
                            <p class="poppins fw-bold" style="color:white;font-size:18px">Tenaga Dokter</p>
                            <p class="poppins fw-bold" style="color:white;font-size:18px">Tenaga Medis</p>
                            <p class="poppins fw-bold" style="color:white;font-size:18px">Fasilitas Kamar</p>
                            <p class="poppins" style="color:white;font-size:15px;margin-left:7px;"><i>Ruang Anturium /
                                    V1</i></p>
                            <p class="poppins" style="color:white;font-size:15px;margin-left:7px;"><i>Ruang Andraeanum /
                                    V2</i></p>
                            <p class="poppins" style="color:white;font-size:15px;margin-left:7px;"><i>Ruang Alocasia /
                                    V3</i></p>
                            <p class="poppins fw-bold" style="color:white;font-size:18px">Tempat Tidur</p>
                            <p class="poppins fw-bold" style="color:white;font-size:18px">Unit Layanan</p>
                        </div>
                        <div class="col">
                            <p class="poppins" style="color:white;font-size:18px">12 Orang</p>
                            <p class="poppins" style="color:white;font-size:18px">20 Orang</p>
                            <p class="poppins" style="color:#333333;font-size:18px">20 Orang</p>
                            <p class="poppins" style="color:white;font-size:18px">8 Kamar</p>
                            <p class="poppins" style="color:white;font-size:18px">11 Kamar</p>
                            <p class="poppins" style="color:white;font-size:18px">7 Kamar</p>
                            <p class="poppins" style="color:white;font-size:18px">97 Bed</p>
                            <p class="poppins" style="color:white;font-size:18px">7 Poli</p>
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
            @foreach ($poli as $p)
            <div class="col">
                <div class="card" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="image/{{$p -> foto}}" class="card-img-top h-100 bw" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body" style="background: #5BD5CF;">
                                <h5 class="card-title poppins fw-bold text-light">{{$p->nama_poli}}</h5>
                                <p class="card-text poppins text-light">Ini adalah contoh laman. Ini berbeda dengan
                                    posting
                                    blog karena akan
                                    tetap berada di satu tempat dan akan muncul di website.</p>
                                <a href="layanan/{{$p -> id}}" class="btn btn-outline-light">Booking Antrian</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container sm layout4" style="background: #333333;">
        <h3 class="poppins fw-bold text-light text-center">Antrian Poli</h3>
        <div class="row" style="padding-left:1%;">
            <div class="col-2">
                <h1 class="poppins text-light fw-bold text-center" style="font-size:60px">{{ $antrian1 -> count() }}</h1>
            </div>
            <div class="col-2">
                <h1 class="poppins text-light fw-bold text-center" style="font-size:60px">{{ $antrian2 -> count() }}</h1>
            </div>
            <div class="col-2">
                <h1 class="poppins text-light fw-bold text-center" style="font-size:60px">{{ $antrian3 -> count() }}</h1>
            </div>
            <div class="col-2">
                <h1 class="poppins text-light fw-bold text-center" style="font-size:60px">{{ $antrian4 -> count() }}</h1>
            </div>
            <div class="col-2">
                <h1 class="poppins text-light fw-bold text-center" style="font-size:60px">{{ $antrian5 -> count() }}</h1>
            </div>
            <div class="col-2">
                <h1 class="poppins text-light fw-bold text-center" style="font-size:60px">{{ $antrian6 -> count() }}</h1>
            </div>
        </div>
    </div>
    <div class="container sm layout3" style="background:#DA2871;">
        <div class="row" style="padding-left:1%;">
            <div class="col-2">
                <h1 class="poppins text-light fw-bold text-center" style="font-size:18px">Poli Gigi</h1>
            </div>
            <div class="col-2">
                <h1 class="poppins text-light fw-bold text-center" style="font-size:18px">Poli Anak</h1>
            </div>
            <div class="col-2">
                <h1 class="poppins text-light fw-bold text-center" style="font-size:18px">Poli Mata</h1>
            </div>
            <div class="col-2">
                <h1 class="poppins text-light fw-bold text-center" style="font-size:18px">Poli Umum</h1>
            </div>
            <div class="col-2">
                <h1 class="poppins text-light fw-bold text-center" style="font-size:18px">Poli Kandungan</h1>
            </div>
            <div class="col-2">
                <h1 class="poppins text-light fw-bold text-center" style="font-size:18px">Medical Check-up</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid sm layout5" style="background:#5BD5CF;">
        <div class="row">
            <div class="col-5">
                <h5 class="poppins fw-bold">LAYANAN SIKESMAS</h5>
                <ul style="list-style-type:none;">
                    <li><a href=" " class="poppins text4">Booking Antrian Online</a></li>
                    <li><a href=" " class="poppins text4">Konsultasi Dokter</a></li>
                    <li><a href=" " class="poppins text4">Hasil Pemeriksaan Terintegrasi</a></li>
                    <li><a href=" " class="poppins text4">Booking Ruang Rawat Inap </a></li>
                    <li><a href=" " class="poppins text4">Checkout Resep Dokter</a></li>
                </ul>
            </div>
            <div class="col-4">
                <h5 class="poppins fw-bold">REVIEW PELAYANAN</h5>
                <div class="card">
                    <div class="card-body">
                        @if (session('login'))
                        <form action="/review/{{$user->id}}" method="POST">
                        @endif
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Anda</label>
                                <input type="text" class="form-control" id="nama" name="nama"> 
                            </div>
                            <div class="mb-3">
                                <label for="feedback" class="form-label">Feedback</label>
                                <textarea class="form-control" id="feedback" rows="3" name="review"></textarea>
                            </div>
                            <div class="center">
                                @if (session('login'))
                                <button type="submit" class="btn btn-2">Kirim</button>
                                @else
                                <a href="/login" class="btn btn-2">kirim</a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <p class="poppins text-center layout6">Copyright © 2022 - Website SIKESMAS</p>
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
    
@endsection
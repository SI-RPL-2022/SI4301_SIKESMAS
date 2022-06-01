@extends('template.template')
@section('content')
<section id='layanan' class="vh-80 py-5">
    <div class="container sm">
        <h3 class="text-center fw-bold">Unit Layanan Puskesmas</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($poli as $p)
            <div class="col">
                <div class="card" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="image/{{$p -> foto}}" class="card-img-top h-100 bw" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body" style="background: #DA2871;">
                                <h5 class="card-title poppins fw-bold text-light">{{ $p ->nama_poli}}</h5>
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

    <div class="container sm margin" style="background: #333333;">
        <h3 class="poppins fw-bold text-light text-center">Antrian Poli</h3>
        <div class="row" style="padding-left:1%;">
            <div class="col-2">
                <h1 class="poppins text-light fw-bold text-center" style="font-size:60px">{{ $antrian1 -> count() }}
                </h1>
            </div>
            <div class="col-2">
                <h1 class="poppins text-light fw-bold text-center" style="font-size:60px">{{ $antrian2 -> count() }}
                </h1>
            </div>
            <div class="col-2">
                <h1 class="poppins text-light fw-bold text-center" style="font-size:60px">{{ $antrian3 -> count() }}
                </h1>
            </div>
            <div class="col-2">
                <h1 class="poppins text-light fw-bold text-center" style="font-size:60px">{{ $antrian4 -> count() }}
                </h1>
            </div>
            <div class="col-2">
                <h1 class="poppins text-light fw-bold text-center" style="font-size:60px">{{ $antrian5 -> count() }}
                </h1>
            </div>
            <div class="col-2">
                <h1 class="poppins text-light fw-bold text-center" style="font-size:60px">{{ $antrian6 -> count() }}
                </h1>
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
</section>

@endsection
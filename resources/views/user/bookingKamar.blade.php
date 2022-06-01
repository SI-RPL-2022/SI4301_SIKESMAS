@extends('template.template')
@section('content')
<section id="bookKamar" class="py-5">
    <div class="container">
        <h3 class="text-center fw-bold">Booking Ruang Rawat Inap</h3>
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('/image/kamar.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kamar Anturium / V1</h5>
                        <p class="card-text">Rp. 350.000 / malam</p>
                        <a href="#" class="btn btn-1">BOOKING KAMAR</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('/image/kamar.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kamar Andraeanum / V2</h5>
                        <p class="card-text">Rp. 350.000 / malam</p>
                        <a href="#" class="btn btn-1">BOOKING KAMAR</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('/image/kamar.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kamar Alocasia / V3</h5>
                        <p class="card-text">Rp. 350.000 / malam</p>
                        <a href="#" class="btn btn-1">BOOKING KAMAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
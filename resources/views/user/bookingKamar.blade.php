@extends('template.template')
@section('content')
<section id="bookKamar" class="py-5">
    <div class="container">
        <h3 class="text-center fw-bold">Booking Ruang Rawat Inap</h3>
        <div class="row">
            @if ($kamar->count() > 0)
            @foreach ($kamar as $k)
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('/image_kamar/'.$k->foto)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$k->nama_kamar}} / {{$k->tipe_kamar}}</h5>
                        <p class="card-text">Rp. {{$k->harga}}/ malam</p>
                        <form action="booking/{{$id_antrian}}/{{$k->id}}" method="POST">
                            @csrf
                            @METHOD('PUT')
                            <button type="submit" class="btn btn-1">BOOKING KAMAR</button>
                        </form>
                        <p class="card-text">{{$k->jumlah_kamar}} Kamar Tersedia</p>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endsection
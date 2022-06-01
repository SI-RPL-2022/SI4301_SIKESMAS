@extends('template.template')
@section('content')
<section id="antrian" class="py-5">
    <div class="container text-center">
        <h3 class="fw-bold">Nomor Antrian Booking</h3>
        <form action="input" method="POST" enctype="multipart/form-data">
            @csrf
            <h3 class="fw-bold" style="font-size:125px;color:#DA2871;" name="nomer">{{ $antrian -> count() + 1 }}</h3>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text fw-bold" name="nama">{{ $user ->nama}}</p>
                    <p class="card-text" name="poli">{{$poli -> nama_poli}} | {{$dokter->nama}}</p>
                    <p class="card-text fw-bold"><span id="tanggalwaktu"></p>
                    <p class="card-text">Waktu Booking : <span id="jam"></p>
                </div>
            </div>
            <button type="submit" class="btn btn-2">BOOKING ANTRIAN</button>
        </form>
    </div>
</section>
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
var dt = new Date();
document.getElementById("jam").innerHTML = (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
</script>
@endsection
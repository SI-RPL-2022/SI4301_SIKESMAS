@extends('template.template')
@section('content')
<section id="AntrianPasien" class="py-5">
    <h3 class="text-center fw-bold">Hasil Periksa</h3>
    <div class="container">
        <div class="container">
            @if ($antrian->count() > 0)
            @foreach ($antrian as $a)
            @if ($a->status == "Menunggu Input Keluhan")
            <p class="nama"><b>{{$a->pasien->nama}} |</b> {{$a->no_antrian}}</p>
            <p class="waktu">Jadwal Periksa : Belum Di Input</p>
            <p class="dokter"><b>{{$a->dokter->nama}} |</b> {{$a->poli->nama_poli}}</p>
            <p class="title fw-bold">Keluhan</p>
            <p class="isi">Belum Di Input</p>
            <p class="title fw-bold">Lama Keluhan</p>
            <p class="isi">Belum Di Input</p>
            <p class="title fw-bold">Hasil Periksa</p>
            <p class="isi">Belum Di Input</p>
            <p class="title fw-bold">Tindakan</p>
            <p class="isi">Belum Di Input</p>
            @elseif ($a->status == "Menunggu Hasil Periksa")
            <p class="nama"><b>{{$a->pasien->nama}} |</b> {{$a->no_antrian}}</p>
            <p class="waktu">Jadwal Periksa : {{$a->waktu_periksa}}</p>
            <p class="dokter"><b>{{$a->dokter->nama}} |</b> {{$a->poli->nama_poli}}</p>
            <p class="title fw-bold">Keluhan</p>
            <p class="isi">{{$a->keluhan}}</p>
            <p class="title fw-bold">Lama Keluhan</p>
            <p class="isi">{{$a->lama_keluhan}} Hari</p>
            <p class="title fw-bold">Hasil Periksa</p>
            <p class="isi">Belum Di Input</p>
            <p class="title fw-bold">Tindakan</p>
            <p class="isi">Belum Di Input</p>
            @elseif ($a->status == "Menunggu Respon Pasien")
            <p class="nama"><b>{{$a->pasien->nama}} |</b> {{$a->no_antrian}}</p>
            <p class="waktu">Jadwal Periksa : {{$a->waktu_periksa}}</p>
            <p class="dokter"><b>{{$a->dokter->nama}} |</b> {{$a->poli->nama_poli}}</p>
            <p class="title fw-bold">Keluhan</p>
            <p class="isi">{{$a->keluhan}}</p>
            <p class="title fw-bold">Lama Keluhan</p>
            <p class="isi">{{$a->lama_keluhan}} Hari</p>
            <p class="title fw-bold">Hasil Periksa</p>
            <p class="isi">{{$a->hasil_periksa}}</p>
            <p class="title fw-bold">Tindakan</p>
            <p class="isi">{{$a->tindakan}}</p>
            @if ($a->tindakan == "Rawat Jalan")
            <a href="/ResepObat" class="btn btn-2">CHECKOUT RESEP OBAT</a>
            @elseif ($a->tindakan == "Rawat Inap")
            <a href="/BookingKamar" class="btn btn-2">BOOKING KAMAR</a>
            @endif
            @endif
            @endforeach
            @else
            <h3 class="text-center fw-bold">Anda Belum Mengambil Antrian</h3>
            <h5 class="text-center fw-bold"><a class="ambil" href="/layanan">Ambil Antrian</a></h5>
            @endif
        </div>
    </div>
</section>
@endsection
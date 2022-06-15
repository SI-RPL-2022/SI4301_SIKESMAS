@extends('template.template')
@section('content')
<section id="AntrianPasien" class="py-5">
    <h3 class="text-center fw-bold">Hasil Periksa</h3>
    <div class="container">
        @if ($antrian->count() > 0)
            @if ($antrian->status == "Menunggu Input Keluhan")
            <p class="nama"><b>{{$antrian->pasien->nama}} |</b> {{$antrian->no_antrian}}</p>
            <p class="waktu">Jadwal Periksa : Belum Di Input</p>
            <p class="dokter"><b>{{$antrian->dokter->nama}} |</b> {{$antrian->poli->nama_poli}}</p>
            <p class="title fw-bold">Keluhan</p>
            <p class="isi">Belum Di Input</p>
            <p class="title fw-bold">Lama Keluhan</p>
            <p class="isi">Belum Di Input</p>
            <p class="title fw-bold">Hasil Periksa</p>
            <p class="isi">Belum Di Input</p>
            <p class="title fw-bold">Tindakan</p>
            <p class="isi">Belum Di Input</p>
            @elseif ($antrian->status == "Menunggu Hasil Periksa")
            <p class="nama"><b>{{$antrian->pasien->nama}} |</b> {{$antrian->no_antrian}}</p>
            <p class="waktu">Jadwal Periksa : {{$antrian->waktu_periksa}}</p>
            <p class="dokter"><b>{{$antrian->dokter->nama}} |</b> {{$antrian->poli->nama_poli}}</p>
            <p class="title fw-bold">Keluhan</p>
            <p class="isi">{{$antrian->keluhan}}</p>
            <p class="title fw-bold">Lama Keluhan</p>
            <p class="isi">{{$antrian->lama_keluhan}} Hari</p>
            <p class="title fw-bold">Hasil Periksa</p>
            <p class="isi">Belum Di Input</p>
            <p class="title fw-bold">Tindakan</p>
            <p class="isi">Belum Di Input</p>
            @elseif ($antrian->status == "Menunggu Respon Pasien")
            <p class="nama"><b>{{$antrian->pasien->nama}} |</b> {{$antrian->no_antrian}}</p>
            <p class="waktu">Jadwal Periksa : {{$antrian->waktu_periksa}}</p>
            <p class="dokter"><b>{{$antrian->dokter->nama}} |</b> {{$antrian->poli->nama_poli}}</p>
            <p class="title fw-bold">Keluhan</p>
            <p class="isi">{{$antrian->keluhan}}</p>
            <p class="title fw-bold">Lama Keluhan</p>
            <p class="isi">{{$antrian->lama_keluhan}} Hari</p>
            <p class="title fw-bold">Hasil Periksa</p>
            <p class="isi">{{$antrian->hasil_periksa}}</p>
            <p class="title fw-bold">Tindakan</p>
            <p class="isi">{{$antrian->tindakan}}</p>
                @if ($antrian->tindakan == "Rawat Jalan")
                <a href="/ResepObat" class="btn btn-2">CHECKOUT RESEP OBAT</a>
                @elseif ($antrian->tindakan == "Rawat Inap")
                <a href="/BookingKamar/{{$antrian->id}}" class="btn btn-2">BOOKING KAMAR</a>
                @endif
            @elseif ($antrian->status == "Pasien Di Rawat")
            <div class="row">
                <div class="col">
                    <p class="nama"><b>{{$antrian->pasien->nama}} |</b> {{$antrian->no_antrian}}</p>
                    <p class="waktu">Jadwal Periksa : {{$antrian->waktu_periksa}}</p>
                    <p class="dokter"><b>{{$antrian->dokter->nama}} |</b> {{$antrian->poli->nama_poli}}</p>
                    <p class="title fw-bold">Keluhan</p>
                    <p class="isi">{{$antrian->keluhan}}</p>
                    <p class="title fw-bold">Lama Keluhan</p>
                    <p class="isi">{{$antrian->lama_keluhan}} Hari</p>
                    <p class="title fw-bold">Hasil Periksa</p>
                    <p class="isi">{{$antrian->hasil_periksa}}</p>
                    <p class="title fw-bold">Tindakan</p>
                    <p class="isi">{{$antrian->tindakan}}</p>
                </div>
                <div class="col">
                    <p class="nama fw-bold" style="margin-bottom:2rem;">Ruang Rawat</p>
                    <p class="title fw-bold">Nama Kamar</p>
                    <img src="{{asset('/image_kamar/'.$antrian->kamar->foto)}}" class="foto">
                    <p class="isi">{{$antrian->kamar->nama_kamar}} | {{$antrian->kamar->tipe_kamar}}</p>
                </div>
            </div>
            @endif
        @else
        <h3 class="text-center fw-bold">Anda Belum Mengambil Antrian</h3>
        <h5 class="text-center fw-bold"><a class="ambil" href="/layanan">Ambil Antrian</a></h5>
        @endif
    </div>
</section>
@endsection
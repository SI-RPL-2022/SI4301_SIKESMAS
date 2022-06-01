@extends('template.template')
@section('content')
<section id="daftarAntrian" class="py-5">
    <div class="container">
        <h3 class="text-center fw-bold title">Daftar Nomor Antrian Pasien</h3>
        <table class="table table-borderless">
            <thead>
                <tr class="text-center">
                    <th scope="col">No. Antrian</th>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col">Poli</th>
                    <th scope="col">Dokter</th>
                    <th scope="col">Waktu Periksa</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($antrian->count() > 0)
                @foreach ($antrian as $a)
                <tr class="baris text-center">
                    <td>{{$a->no_antrian}}</td>
                    <td>{{$a->pasien->nama}}</td>
                    <td>{{$a->poli->nama_poli}}</td>
                    <td>{{$user->nama}}</td>
                    <td>{{$a->waktu_periksa}}</td>
                    @if ($a->status == "Menunggu Input Keluhan")
                    <td><a href="/dokter/hasilPeriksa/{{$a->id}}" class="btn btn-2 disabled" >INPUT</a></td>
                    @elseif ($a->status == "Menunggu Hasil Periksa")
                    <td><a href="/dokter/hasilPeriksa/{{$a->id}}" class="btn btn-2">INPUT</a></td>
                    @elseif ($a->status == "Menunggu Respon Pasien")
                    <td><a href="/dokter/hasilPeriksa/{{$a->id}}" class="btn btn-warning">EDIT</a></td>
                    @endif
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</section>
@endsection
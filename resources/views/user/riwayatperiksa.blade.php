@extends('template.template')
@section('content')
<section id="daftarAntrian" class="py-5">
    <div class="container">
        <h3 class="text-center fw-bold title">Riwayat Periksa</h3>
        @if ($antrian->count() > 0)
        <table class="table table-borderless">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">No. Antrian</th>
                    <th scope="col">Nama Dokter</th>
                    <th scope="col">Poli Layanan</th>
                    <th scope="col">Waktu Periksa</th>
                    <th scope="col">Hasil Periksa Periksa</th>
                    <th scope="col">Tindakan</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($antrian as $a)
                <tr class="baris text-center">
                    @if ($a->status == "Menunggu Input Keluhan")
                    <td>{{$loop->iteration}}</td>
                    <td>{{$a->no_antrian}}</td>
                    <td>{{$a->dokter->nama}}</td>
                    <td>{{$a->poli->nama_poli}}</td>
                    <td>Belum Di Input</td>
                    <td><a href="hasilPeriksa/{{$a->id}}" class="btn btn-2">LIHAT</a></td>
                    <td>Belum Di Input</td>
                    <td><b>{{$a->status_antrian}}</b></td>
                    @elseif ($a->status == "Menunggu Hasil Periksa")
                    <td>{{$loop->iteration}}</td>
                    <td>{{$a->no_antrian}}</td>
                    <td>{{$a->dokter->nama}}</td>
                    <td>{{$a->poli->nama_poli}}</td>
                    <td>{{$a->waktu_periksa}}</td>
                    <td><a href="hasilPeriksa/{{$a->id}}" class="btn btn-2">LIHAT</a></td>
                    <td>Belum Di Input</td>
                    <td><b>{{$a->status_antrian}}</b></td>
                    @elseif ($a->status == "Menunggu Respon Pasien")
                    <td>{{$loop->iteration}}</td>
                    <td>{{$a->no_antrian}}</td>
                    <td>{{$a->dokter->nama}}</td>
                    <td>{{$a->poli->nama_poli}}</td>
                    <td>{{$a->waktu_periksa}}</td>
                    <td><a href="hasilPeriksa/{{$a->id}}" class="btn btn-2">LIHAT</a></td>
                    <td>{{$a->tindakan}}</td>
                    <td><b>{{$a->status_antrian}}</b></td>
                    @elseif ($a->status == "Pasien Di Rawat")
                    <td>{{$loop->iteration}}</td>
                    <td>{{$a->no_antrian}}</td>
                    <td>{{$a->dokter->nama}}</td>
                    <td>{{$a->poli->nama_poli}}</td>
                    <td>{{$a->waktu_periksa}}</td>
                    <td><a href="hasilPeriksa/{{$a->id}}" class="btn btn-2">LIHAT</a></td>
                    <td>{{$a->tindakan}}</td>
                    <td><b>{{$a->status_antrian}}</b></td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <h3 class="text-center fw-bold">Anda Belum Memiliki Riwayat Periksa</h3>
        <h5 class="text-center fw-bold"><a class="ambil" href="/layanan">Ambil Antrian</a></h5>
        @endif
    </div>
</section>

@endsection
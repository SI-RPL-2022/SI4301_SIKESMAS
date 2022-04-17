@extends('template.templateadmin')
@section('content')
<div class="container-fluid sm layout10">
    <h5 class="poppins fw-bold" style="color:#DA2871">Daftar Dokter</h5>
    <div class="container sm">
        <table class="table table-borderless">
            <thead style="background:#5BD5CF">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Username</th>
                    <th scope="col">Poli Layanan</th>
                    <th scope="col">Jam Praktik</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody style="background:#F4F3EE">
                @foreach ($dokter as $i)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $i -> nama_dokter }}</td>
                    <td>{{ $i -> username }}</td>
                    <td>{{ $i -> poli_layanan }}</td>
                    <td>{{ $i -> jam_praktik_awal }} - {{ $i -> jam_praktik_akhir }}</td>
                    <td>{{ $i -> password }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
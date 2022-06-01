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
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody style="background:#F4F3EE">
                @foreach ($dokter as $i)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $i -> nama }}</td>
                    <td>{{ $i -> username }}</td>
                    <td>{{$i -> poli -> nama_poli}}</td>
                    <td>{{ $i -> jam_praktik_awal }} - {{ $i -> jam_praktik_akhir }}</td>
                    <td>{{ $i -> password }}</td>
                    <form action="/delete/dokter/{{$i -> id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <td><a class="btn btn-warning" href="" type="button">Edit</a> <button class="btn btn-danger">Delete</button></td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
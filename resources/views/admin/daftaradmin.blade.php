@extends('template.templateadmin')
@section('content')
<div class="container-fluid sm layout10">
    <h5 class="poppins fw-bold" style="color:#DA2871">Daftar Admin</h5>
    <div class="container sm">
        <table class="table table-borderless">
            <thead style="background:#5BD5CF">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Username</th>
                    <th scope="col">No. HP</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody style="background:#F4F3EE">
                @foreach ($admin as $i)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $i -> nama_admin }}</td>
                    <td>{{ $i -> username}}</td>
                    <td>{{ $i -> no_hp }}</td>
                    <td>{{ $i -> password }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@extends('template.templateadmin')
@section('content')
<div class="container-fluid sm layout10">
    <h5 class="poppins fw-bold" style="color:#DA2871">Daftar Kamar</h5>
    <div class="container sm">
        <table class="table table-borderless">
            <thead style="background:#5BD5CF">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Ruangan</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga Per Malam</th>
                    <th scope="col">Kuota</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody style="background:#F4F3EE">
                @foreach ($kamar as $i)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $i -> nama_kamar}}</td>
                    <td>{{ $i -> tipe_kamar}}</td>
                    <td>{{$i -> harga}}</td>
                    <td>{{ $i -> jumlah_kamar}}</td>
                    <form action="/delete/dokter/{{$i -> id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <td><a class="btn btn-warning" href="/updatekamar/{{$i->id}}" type="button">Edit</a> <button class="btn btn-danger">Delete</button></td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
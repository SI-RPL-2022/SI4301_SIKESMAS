@extends('template.template')
@section('content')
<section id="daftarAntrian" class="py-5">
    <div class="container">
        <h3 class="text-center fw-bold title">Daftar Kamar</h3>
        <a href="/tambahkamar" class="btn btn-2" style="margin-bottom:1rem;">Tambah Kamar</a>
        <table class="table table-borderless">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama Ruangan</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga Per Malam</th>
                    <th scope="col">Kuota</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kamar as $i)
                <tr class="baris text-center">
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
</section>
@endsection
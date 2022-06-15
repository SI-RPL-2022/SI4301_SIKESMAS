@extends('template.template')
@section('content')
<div class="container-fluid sm layout8">
    <div class="container sm" style="margin-top:50px;">
        <h5 class="poppins fw-bold" style="color:#DA2871">Update Kamar</h5>
        <div class="container sm" style="">
            <img src="{{asset('image_kamar/'.$kamar->foto)}}" style="margin-bottom:1rem;">
            <form action="/updatekamar/{{$kamar->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @METHOD('PUT')
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label fw-bold">Nama Ruangan</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nama" name="nama" value="{{$kamar->nama_kamar}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tipe" class="col-sm-2 col-form-label fw-bold">Tipe Kamar</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="tipe" name="tipe" value="{{$kamar->tipe_kamar}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="harga" class="col-sm-2 col-form-label fw-bold">Harga Per Malam</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="harga" name="harga" value="{{$kamar->harga}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kuota" class="col-sm-2 col-form-label fw-bold">Kuota</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="kuota" name="kuota" value="{{$kamar->jumlah_kamar}}">
                    </div>
                </div>
                <button class="btn btn-2 poppins fw-bold" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
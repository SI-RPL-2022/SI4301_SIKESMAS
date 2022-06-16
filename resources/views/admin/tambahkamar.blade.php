@extends('template.templateadmin')
@section('content')
<div class="container-fluid sm layout8">
    <div class="container sm" style="margin-top:50px;">
        <h5 class="poppins fw-bold" style="color:#DA2871">Tambah Kamar</h5>
        <div class="container sm" style="">
            <form action="/tambahkamar" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label fw-bold">Nama Ruangan</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tipe" class="col-sm-2 col-form-label fw-bold">Tipe Kamar</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="tipe" name="tipe">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="harga" class="col-sm-2 col-form-label fw-bold">Harga Per Malam</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kuota" class="col-sm-2 col-form-label fw-bold">Kuota</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="kuota" name="kuota">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="formFile" class="col-sm-2 col-form-label fw-bold">Gambar Kamar</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="file" id="formFile" name="img_path">
                    </div>
                </div>
                <button class="btn btn-2 poppins fw-bold" type="submit">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection
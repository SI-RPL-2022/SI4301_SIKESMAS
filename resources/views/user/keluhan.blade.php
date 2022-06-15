@extends('template.template')
@section('content')
<section id="keluhan" class="py-5">
    <div class="container margin">
        <h5 class="judul">Home > Keluhan Pasien</h5>
        <div class="kotak">
            <h4 class="text-center fw-bold" style="color:#5BD5CF;">Form Keluhan Pasien</h4>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-3 col-form-label fw-bold">Nama</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-3 col-form-label fw-bold">Alamat</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="alamat" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="keluhan" class="col-sm-3 col-form-label fw-bold">Keluhan</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="keluhan" rows="5"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="lamaKeluhan" class="col-sm-3 col-form-label fw-bold">Lama Keluhan</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="lamaKeluhan" >
                </div>
            </div>
            <div class="mb-3 row">
                <a href="/tambahdokter" class="btn btn-2 fw-bold">Selanjutnya</a>
            </div>
        </div>
    </div>
</section>
@endsection
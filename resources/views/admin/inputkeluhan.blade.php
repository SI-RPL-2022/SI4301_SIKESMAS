@extends('template.template')
@section('content')
<section id="inputkeluhan" class="py-5">
    <div class="container">
        <h5>Home > <b>Keluhan Pasien</b></h5>
        <h3 class="text-center fw-bold title">Form Keluhan Pasien</h3>
        <div class="kotak">
            <form action="/admin/KeluhanPasien/inputkeluhan/{{$antrian->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-3 col-form-label fw-bold">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama" value="{{$antrian->pasien->nama}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="antrian" class="col-sm-3 col-form-label fw-bold">No Antrian</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" id="antrian" name="antrian"
                            value="{{$antrian->no_antrian}}" readonly>
                    </div>
                </div>
                @if ($antrian->status == "Menunggu Input Keluhan")
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-3 col-form-label fw-bold">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="keluhan" class="col-sm-3 col-form-label fw-bold">Keluhan</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="keluhan" name="keluhan" rows="3"></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lama" class="col-sm-3 col-form-label fw-bold">Lama Keluhan</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" id="lama" name="lama">
                    </div>
                    <div class="col-sm-3">
                        <label for="lama" class="col-sm-6 col-form-label fw-bold">Hari</label>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="waktu" class="col-sm-3 col-form-label fw-bold">Waktu Periksa</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="waktu" name="waktu[]">
                    </div>
                    <div class="col-sm-4">
                        <input type="time" class="form-control" id="waktu" name="waktu[]">
                    </div>
                </div>
                @elseif ($antrian->status == "Menunggu Hasil Periksa")
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-3 col-form-label fw-bold">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{$antrian->alamat}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="keluhan" class="col-sm-3 col-form-label fw-bold">Keluhan</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="keluhan" name="keluhan" rows="3">{{$antrian->keluhan}}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lama" class="col-sm-3 col-form-label fw-bold">Lama Keluhan</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" id="lama" name="lama" value="{{$antrian->lama_keluhan}}">
                    </div>
                    <div class="col-sm-3">
                        <label for="lama" class="col-sm-6 col-form-label fw-bold">Hari</label>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="waktu" class="col-sm-3 col-form-label fw-bold">Waktu Periksa</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="waktu" name="waktu[]">
                    </div>
                    <div class="col-sm-4">
                        <input type="time" class="form-control" id="waktu" name="waktu[]">
                    </div>
                </div>
                @elseif ($antrian->status == "Menunggu Respon Pasien")
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-3 col-form-label fw-bold">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{$antrian->alamat}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="keluhan" class="col-sm-3 col-form-label fw-bold">Keluhan</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="keluhan" name="keluhan" rows="3">{{$antrian->keluhan}}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lama" class="col-sm-3 col-form-label fw-bold">Lama Keluhan</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" id="lama" name="lama" value="{{$antrian->lama_keluhan}}">
                    </div>
                    <div class="col-sm-3">
                        <label for="lama" class="col-sm-6 col-form-label fw-bold">Hari</label>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="waktu" class="col-sm-3 col-form-label fw-bold">Waktu Periksa</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="waktu" name="waktu[]">
                    </div>
                    <div class="col-sm-4">
                        <input type="time" class="form-control" id="waktu" name="waktu[]">
                    </div>
                </div>
                @endif
                <div class="mb-3 row">
                    <button class="btn btn-2" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
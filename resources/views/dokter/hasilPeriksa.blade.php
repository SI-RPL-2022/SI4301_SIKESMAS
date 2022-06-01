@extends('template.template')
@section('content')
<section id="inputkeluhan" class="py-5">
    <div class="container">
        <h5>Home > <b>Hasil Periksa Pasien</b></h5>
        <h3 class="text-center fw-bold title">Form Keluhan Pasien</h3>
        <div class="kotak">
            <form action="/dokter/inputhasilPeriksa/{{$antrian->id}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-3 col-form-label fw-bold">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" id="nama" name="nama"
                            value="{{$antrian->pasien->nama}}" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="antrian" class="col-sm-3 col-form-label fw-bold">No Antrian</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" id="antrian" name="antrian"
                            value="{{$antrian->no_antrian}}" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-3 col-form-label fw-bold">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" id="alamat" name="alamat"
                            value="{{$antrian->alamat}}" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="keluhan" class="col-sm-3 col-form-label fw-bold">Keluhan</label>
                    <div class="col-sm-9">
                        <textarea class="form-control-plaintext" id="keluhan" name="keluhan" rows="3"
                            readonly>{{$antrian->keluhan}}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lama" class="col-sm-3 col-form-label fw-bold">Lama Keluhan</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control-plaintext" id="lama" name="lama"
                            value="{{$antrian->lama_keluhan}}" readonly>
                    </div>
                    <div class="col-sm-3">
                        <label for="lama" class="col-sm-6 col-form-label fw-bold">Hari</label>
                    </div>
                </div>
                @if ($antrian->status == "Menunggu Hasil Periksa")
                <div class="mb-3 row">
                    <label for="hasil" class="col-sm-3 col-form-label fw-bold">Hasil Periksa</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="hasil" name="hasil" rows="3"></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="hasil" class="col-sm-3 col-form-label fw-bold">Tindakan</label>
                    <div class="col-sm-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tindakan" id="inlineRadio1"
                                value="Rawat Inap" onclick="c()">
                            <label class="form-check-label" for="inlineRadio1">Rawat Inap</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tindakan" id="inlineRadio2"
                                value="Rawat Jalan" onclick="c()">
                            <label class="form-check-label" for="inlineRadio2">Rawat Jalan</label>
                        </div>
                    </div>
                </div>
                @elseif ($antrian->status == "Menunggu Respon Pasien")
                <div class="mb-3 row">
                    <label for="hasil" class="col-sm-3 col-form-label fw-bold">Hasil Periksa</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="hasil" name="hasil" rows="3">{{$antrian->hasil_periksa}}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="hasil" class="col-sm-3 col-form-label fw-bold">Tindakan</label>
                    <div class="col-sm-9">
                        @if ($antrian->tindakan == "Rawat Inap")
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tindakan" id="inlineRadio1"
                                value="Rawat Inap" onclick="c()" checked>
                            <label class="form-check-label" for="inlineRadio1">Rawat Inap</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tindakan" id="inlineRadio2"
                                value="Rawat Jalan" onclick="c()">
                            <label class="form-check-label" for="inlineRadio2">Rawat Jalan</label>
                        </div>
                        @elseif ($antrian->tindakan == "Rawat Jalan")
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tindakan" id="inlineRadio1"
                                value="Rawat Inap" onclick="c()" checked>
                            <label class="form-check-label" for="inlineRadio1">Rawat Inap</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tindakan" id="inlineRadio2"
                                value="Rawat Jalan" onclick="c()" checked>
                            <label class="form-check-label" for="inlineRadio2">Rawat Jalan</label>
                        </div>
                        @endif
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
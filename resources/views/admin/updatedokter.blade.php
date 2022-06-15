@extends('template.templateadmin')
@section('content')
<div class="container-fluid sm layout8">
    <h3 class="poppins">Welcome, <b>Super Admin</b></h3>
    <div class="container sm" style="margin-top:50px;">
        <h5 class="poppins fw-bold" style="color:#DA2871">Update Dokter</h5>
        <div class="container sm translate-middle-x start-50 position-absolute">
            <form method="POST" action="/updatedokter/{{$dokter->id}}" enctype="multipart/form-data">
                @csrf
                @METHOD('PUT')
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label fw-bold">Nama Lengkap</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nama" name="nama" value="{{$dokter->nama}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="username" class="col-sm-2 col-form-label fw-bold">Username</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="username" name="username" value="{{$dokter->username}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="noHP" class="col-sm-2 col-form-label fw-bold">Poli</label>
                    <div class="col-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poli" id="poli1" value="1" {{$dokter->id_poli == 1 ? 'checked' : ''}}>
                            <label class="form-check-label" for="poli1">
                                Poli Gigi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poli" id="poli2" value="2" {{$dokter->id_poli == 2 ? 'checked' : ''}}>
                            <label class="form-check-label" for="poli2">
                                Poli Umum
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poli" id="poli3" value="3" {{$dokter->id_poli == 3 ? 'checked' : ''}}>
                            <label class="form-check-label" for="poli3">
                                Poli Anak
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poli" id="poli4" value="4" {{$dokter->id_poli == 4 ? 'checked' : ''}}>
                            <label class="form-check-label" for="poli4">
                                Poli Kandungan
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poli" id="poli5" value="5" {{$dokter->id_poli == 5 ? 'checked' : ''}}>
                            <label class="form-check-label" for="poli5">
                                Poli Mata
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poli" id="poli6" value="6" {{$dokter->id_poli == 6 ? 'checked' : ''}}>
                            <label class="form-check-label" for="poli6">
                                Poli Medical Check-up
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jam" class="col-sm-2 col-form-label fw-bold">Jam Praktik</label>
                    <div class="col-sm-2">
                        <input type="time" class="form-control" id="jam1" name="jam1" value="{{$dokter->jam_praktik_awal}}">
                    </div>
                    <div class="col-sm-2">
                        <input type="time" class="form-control" id="jam2" name="jam2" value="{{$dokter->jam_praktik_akhir}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pass" class="col-sm-2 col-form-label fw-bold">Password</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" id="pass" name="pass">
                    </div>
                </div>
                <button class="btn btn-2 poppins fw-bold" type="submit">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection
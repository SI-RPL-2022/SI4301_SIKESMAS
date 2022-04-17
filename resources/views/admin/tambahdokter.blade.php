@extends('template.templateadmin')
@section('content')
<div class="container-fluid sm layout8">
    <h3 class="poppins">Welcome, <b>Super Admin</b></h3>
    <div class="container sm" style="margin-top:50px;">
        <h5 class="poppins fw-bold" style="color:#DA2871">Tambah Dokter</h5>
        <div class="container sm translate-middle-x start-50 position-absolute">
            <form method="POST" action="{{ route('tambahdokter') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label fw-bold">Nama Lengkap</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="username" class="col-sm-2 col-form-label fw-bold">Username</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="noHP" class="col-sm-2 col-form-label fw-bold">Poli</label>
                    <div class="col-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poli" id="poli1" value="Poli Gigi">
                            <label class="form-check-label" for="poli1">
                                Poli Gigi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poli" id="poli2" value="Poli Umum">
                            <label class="form-check-label" for="poli2">
                                Poli Umum
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poli" id="poli3" value="Poli Anak">
                            <label class="form-check-label" for="poli3">
                                Poli Anak
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poli" id="poli4" value="Poli Kandungan">
                            <label class="form-check-label" for="poli4">
                                Poli Kandungan
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poli" id="poli5" value="Poli Mata">
                            <label class="form-check-label" for="poli5">
                                Poli Mata
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poli" id="poli6" value="Poli Medical Check-up">
                            <label class="form-check-label" for="poli6">
                                Poli Medical Check-up
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jam" class="col-sm-2 col-form-label fw-bold">Jam Praktik</label>
                    <div class="col-sm-2">
                        <input type="time" class="form-control" id="jam1" name="jam1">
                    </div>
                    <div class="col-sm-2">
                        <input type="time" class="form-control" id="jam2" name="jam2">
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
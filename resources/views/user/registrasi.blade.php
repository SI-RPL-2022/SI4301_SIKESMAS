@extends('template.template')
@section('content')
<div class="bg3">
    <div class="card text-center layreg" style="width: 50rem;">
        <div class="card-body">
            <h3 class="card-title century gothic">Daftar</h3>
            <form action="/pasien" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nik" placeholder="NIK" name="nik">
                    <label for="nik">NIK</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="bpjs" placeholder="No BPJS" name="bpjs">
                    <label for="bpjs">No BPJS</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama">
                    <label for="nama">Nama Lengkap</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="jeniskelamin" placeholder="Jenis Kelamin" name="jenis_kelamin">
                    <label for="jeniskelamin">Jenis Kelamin</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="phone" class="form-control" id="noHP" placeholder="No. HP" name="noHP">
                    <label for="noHP">No. HP</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="pass" placeholder="password" name="pass">
                    <label for="pass">Password</label>
                </div>
                <div class="layreg1">
                    <button type="submit" class="btn btn-2 century gothic fw-bold">Daftar</button>
                </div>
            </form>
            <p class="century gothic">Website | Copyright Sikesmas 2021</p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
</div>

@endsection
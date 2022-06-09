@extends('template.template')
@section('content')
<div class="bg3">
    <div class="card layreg" style="width: 50rem;">
        <div class="card-body">
            <h3 class="card-title text-center">Daftar</h3>
            <form action="/pasien" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="nik" placeholder="NIK" name="nik" min="16">
                    <label for="nik">NIK</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="bpjs" placeholder="No BPJS" name="bpjs" min="13">
                    <label for="bpjs">No BPJS</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama">
                    <label for="nama">Nama Lengkap</label>
                </div>
                <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1"
                            value="Laki - Laki">
                        <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2"
                            value="Perempuan">
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="noHP" placeholder="No. HP" name="noHP" min="10" >
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
                <div class="layreg1 text-center">
                    <button type="submit" class="btn btn-2 poppins fw-bold">Daftar</button>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
</div>

@endsection
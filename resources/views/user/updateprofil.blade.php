@extends('template.template')
@section('content')
<div class="container sm">
    <div class="card layout5" style="width: 100%; background:#F4F3EE;">
        <form action="/pasien/{{session('id')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <h5 class="card-title poppins">Home > Update Profil Pasien</h5>
                <h5 class="card-title poppins fw-bold" style="color:#5BD5CF;margin:20px 0 0 15px">
                    {{ $user -> nama_pasien }}
                </h5>
                <div class="row">
                    <div class="col-6" style="margin:20px 0 0 15px">
                        @if ( $user -> foto_profil == null)
                        <img class="rounded-profil" src="{{asset('image/profil.jpg')}}">
                        @else
                        <img class="rounded-profil" src="{{ asset('/foto_profil/'.$user->foto_profil) }}">
                        @endif
                        <div class="row">
                            <label>
                                <input type="file" style="display: none;" name="img_path">
                                <p style="margin-left:30px; color:rgba(0, 0, 0, 0.5);"><u>Upload Foto</u></p>
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-5">
                                <input type="text" class="form-control" id="nik" value="{{ $user -> nik }}" name="nik">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="bpjs" class="col-sm-2 col-form-label">No BPJS</label>
                            <div class="col-5">
                                <input type="text" class="form-control" id="bpjs" value="{{ $user -> no_bpjs }}"
                                    name="bpjs">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-5">
                                <input type="text" class="form-control" id="nama" value="{{ $user -> nama_pasien }}"
                                    name="nama">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-5">
                                <input type="text" class="form-control" id="jeniskelamin"
                                    value="{{ $user -> jenis_kelamin }}" name="jenis_kelamin">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="noHP" class="col-sm-2 col-form-label">No. HP</label>
                            <div class="col-5">
                                <input type="text" class="form-control" id="noHP" value="{{ $user -> no_hp }}"
                                    name="noHP">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pass" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-5">
                                <input type="password" class="form-control" id="pass" value="{{ $user -> password }}"
                                    name="pass">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-2 poppins fw-bold" style="margin-right:40px;" type="submit">Save
                        Edit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
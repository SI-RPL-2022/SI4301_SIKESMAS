@extends('template.templateadmin')
@section('content')
<div class="container-fluid sm layout8">
    <h3 class="poppins">Welcome, <b>{{ $superadmin -> username }}</b></h3>
    <div class="container sm" style="margin-top:50px;">
        <div class="row row-cols-1 row-cols-md-2 g-5">
            <div class="col">
                <div class="card layout9 text-center">
                    <img src="image/admin.png" height="150px" style="display:block; margin:auto;" width="150px:"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text">Disini anda bisa menambahkan akses untuk,
                            Admin Sikesmas.</p>
                        <a href="/tambahadmin" class="btn btn-2 poppins fw-bold">Tambah Admin</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card layout9 text-center">
                    <img src="image/doctor.png" style="display:block; margin:auto;" height="150px" width="150px:"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text">Disini anda bisa menambahkan akses untuk,
                            Dokter Sikesmas.</p>
                        <a href="/tambahdokter" class="btn btn-2 poppins fw-bold">Tambah Dokter</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card layout9 text-center">
                    <img src="image/bed.png" style="display:block; margin:auto;" height="150px" width="150px:"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text">Disini anda bisa menambahkan kamar untuk,
                            daftar kamar Sikesmas.</p>
                        <a href="/tambahkamar" class="btn btn-2 poppins fw-bold">Tambah Kamar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
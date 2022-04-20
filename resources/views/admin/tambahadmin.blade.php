@extends('template.templateadmin')
@section('content')
<div class="container-fluid sm layout8">
    <h3 class="century gothic">Welcome, <b>{{ $superadmin -> username }}</b></h3>
    <div class="container sm" style="margin-top:50px;">
        <h5 class="century gothic fw-bold" style="color:#DA2871">Tambah Admin</h5>
        <div class="container sm" style="">
            <form action="/admin" method="POST" enctype="multipart/form-data">
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
                    <label for="noHP" class="col-sm-2 col-form-label fw-bold">No. HP</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="noHP" name="noHP">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pass" class="col-sm-2 col-form-label fw-bold">Password</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" id="pass" name="pass">
                    </div>
                </div>
                <button class="btn btn-2 century gothic fw-bold" type="submit">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection
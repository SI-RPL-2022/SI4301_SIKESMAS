@extends('template.template')
@section('content')
<div class="container-fluid sm">
    <div class="row">
        <div class="col-6 bg4">
            <p class="poppins fw-bold text-light" style="font-size:30px;margin:50% 0 0 50px">Selamat Datang di</p>
            <h3 class="poppins fw-bold text-light" style="font-size:50px;margin:0 0 0 50px">Puskesmas Balaraja</h3>
        </div>
        <div class="col-6 bg7">
            <div class="card text-center layreg" style="width: 50%;">
                <div class="card-body">
                    <img src="image/logo.png" alt="" width="100" height="100" href="#">
                    <h3 class="card-title poppins">Masuk</h3>
                    <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="username" placeholder="Username"
                                name="username">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
                            <label for="pass">Password</label>
                        </div>
                        <div class="layreg1">
                            <button type="submit" class="btn btn-2 poppins fw-bold">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
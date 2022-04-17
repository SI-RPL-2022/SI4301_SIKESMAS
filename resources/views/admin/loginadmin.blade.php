<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="image/logo.png">
    <title>
        SIKESMAS
    </title>
</head>

<body>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>

    <div class="container-fluid sm">
        <div class="row">
            <div class="col-6 bg6">
                <p class="poppins fw-bold text-light" style="font-size:30px;margin:50% 0 0 50px">Selamat Datang di</p>
                <h3 class="poppins fw-bold text-light" style="font-size:50px;margin:0 0 0 50px">Puskesmas Balaraja</h3>
            </div>
            <div class="col-6 bg5">
                <img src="image/logo.png" style="display:block; margin:auto;" alt="" width="100" height="100" href="#">
                <div class="card text-center layreg" style="width: 50%;">
                    <div class="card-body">
                        <h3 class="card-title poppins">Login Super Admin</h3>
                        <form method="POST" action="{{ route('loginAdmin') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nik" placeholder="Username" name="username">
                                <label for="nik">Username</label>
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
</body>
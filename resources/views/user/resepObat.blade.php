@extends('template.template')
@section('content')
<section id="resepObat" class="py-5">
    <div class="container">
        <h3 class="text-center fw-bold">Resep Dokter</h3>
        <div class="row">
            <div class="col-sm-6">
                <h5 class="fw-bold text-center">Tebus Obat</h5>
                <div class="card" style="width: 22rem;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <p><b>Paracetamol</b><br>2 x 3 sehari</p>
                            </div>
                            <div class="col-5">
                                <p>1 Tablet</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <p><b>Decomxil</b><br>2 x 3 sehari</p>
                            </div>
                            <div class="col-5">
                                <p>1 Tablet</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <p><b>Decolgen</b><br>2 x 3 sehari</p>
                            </div>
                            <div class="col-5">
                                <p>1 Tablet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h5 class="fw-bold text-center">Pantangan</h5>
                <div class="card" style="width: 22rem;">
                    <div class="card-body">
                        <li>Garam</li>
                        <li>Makanan Asin</li>
                        <li>Minuman Bersoda</li>
                        <li>Nanas</li>
                        <li>Cumi - Cumi</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
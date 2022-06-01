@extends('template.template')
@section('content')
<section id="homeDokter" class="py-5">
    <div class="container">
        <h3>Welcome, <b>{{$user->nama}}</b></h3>
        <div class="kotak">
            <div class="row">
                <div class="col-5" style="margin:20px 0 0 15px">
                    @if ( $user -> foto_profil == null)
                    <img class="rounded-profil" src="{{asset('image/profil.jpg')}}">
                    @else
                    <img class="rounded-profil" src="{{ asset('/foto_profil/'.$user->foto_profil) }}">
                    @endif
                </div>
                <div class="col profil">
                    <div class="mb-3 row">
                        <label for="nik" class="col-sm-3 col-form-label fw-bold">Nama</label>
                        <div class="col-5">
                            <input type="text" readonly class="form-control-plaintext" id="nama"
                                value="{{$user->nama}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="poli" class="col-sm-3 col-form-label fw-bold">Poli Layanan</label>
                        <div class="col-5">
                            <input type="text" readonly class="form-control-plaintext" id="poli"
                                value="{{$user->poli->nama_poli}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="poli" class="col-sm-3 col-form-label fw-bold">Jam Praktik</label>
                        <div class="col-5">
                            <input type="text" readonly class="form-control-plaintext" id="poli"
                                value="{{$user->jam_praktik_awal}} - {{$user->jam_praktik_akhir}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @endsection
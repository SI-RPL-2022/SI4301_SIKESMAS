@extends('template.template')
@section('content')
<section id="jadwal" class="py-5">
    <h3 class="text-center fw-bold">Jadwal Dokter Puskesmas</h3>
    <h5 class="text-center fw-bold" style="color:#5BD5CF"><span id="tanggalwaktu"></h5>
    <div class="container margin-top">
        <div class="card mb-3 drop" style="width:100%;">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="image/gigi.jpg" class="img-fluid rounded-start w-100 bw" alt="...">
                </div>
                <div class="col-md-6">
                    <div class="card-body padding">
                        <h5 class="card-title">Poli Gigi</h5>
                        <p class="card-text">Ini adalah contoh laman. Ini berbeda dengan
                            posting
                            blog karena akan
                            tetap berada di satu tempat dan akan muncul di website.</p>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="card text-dark" style="width: 15rem;">
                                    <img src="image/gigi2.jpg" class="card-img-top" height="150px" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">Drg. Albert Akbar</h5>
                                        <p>08.30 - 11.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="card text-dark" style="width: 15rem;">
                                    <img src="image/gigi1.jpg" class="card-img-top" height="150px" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">Drg. Heny Marta</h5>
                                        <p>10.30 - 13.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="/tambahdokter" class="btn btn-2 fw-bold">Edit Jadwal</a>
    </div>
    

</section>
<script>
var tw = new Date();
if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
else(a = tw.getTime());
tw.setTime(a);
var tahun = tw.getFullYear();
var hari = tw.getDay();
var bulan = tw.getMonth();
var tanggal = tw.getDate();
var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus",
    "September",
    "Oktober", "Nopember", "Desember");
document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] +
    " " +
    tahun;
</script>
@endsection
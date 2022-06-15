@extends('template.template')
@section('content')
<section id="daftarPasien" class="py-5">
    <h3 class="title2"><b>Daftar Pasien</b> Puskesmas Balareja</h3>
    <div class="container">
        <h3 class="text-center fw-bold title">Daftar Pasien</h3>
        <div id="grafik"></div>
    </div>
    <div class="container" style="margin-top:1rem;">
        <h3 class="text-center fw-bold title">Review Pasien</h3>
        <table class="table table-borderless">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($review->count() > 0)
                @foreach ($review as $r)
                <tr class="baris text-center">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$r->nama_pasien}}</td>
                    <td><a data-bs-toggle="modal" data-bs-target="#exampleModal{{$r->id}}" class="btn btn-2">LIHAT</a></td>
                </tr>
                <div class="modal fade" id="exampleModal{{$r->id}}" tabindex="-1" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Review Pasien</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><b>Nama :</b> {{$r->nama_pasien}}</p>
                            <p class=""><b>Review :</b> {{$r->review}}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</section>

<script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        var pasien=<?php echo json_encode($pasien)?>;
        var hari=<?php echo json_encode($hari)?>;
        Highcharts.chart('grafik',{
            title : {
                text: 'Grafik Pasien'
            },
            xAxis : {
                categories : hari
            },
            yAxis : {
                title : {
                    text : 'Jumlah Pasien'
                }
            },
            plotOptions : {
                series: {
                    allowPointSelect : true
                }
            },
            series: [
            {
                name: 'Jumlah Pasien',
                data: pasien
            }
            ]
        })
</script>


@endsection
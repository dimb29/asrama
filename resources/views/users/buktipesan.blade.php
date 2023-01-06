<!DOCTYPE html>
<html>
<head>
    <title>Percobaan Gan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col text-center">
                   <b>POLTEKKES KEMENKES SEMARANG</b><br/>
                   <sup>Jalan Tirto Agung Pedalangan Banyumanik Kota Semarang</sup>
                </div>
            </div>
            <hr />
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-file">
                            <div class="row">
                                    @foreach($data as $d)
                                <div class="col">
                                    <h5 class="text-center">Bukti Pemesanan Asrama</h5>
                                    <nav class="w-100">
                                        <div class="tab-content p-3" id="nav-tabContent" style="overflow:auto;">
                                            <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                                                <table class="table">
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td>:</td>
                                                        <td>{{$d->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nomor Kamar</td>
                                                        <td>:</td>
                                                        <td>{{$d->id_ruang}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ID Tempat Tidur</td>
                                                        <td>:</td>
                                                        <td>{{$d->id_kamar}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Program Studi</td>
                                                        <td>:</td>
                                                        <td>{{$d->prodi}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td>:</td>
                                                        <td>{{$d->email}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Telepon</td>
                                                        <td>:</td>
                                                        <td>{{$d->telepon}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Gedung</td>
                                                        <td>:</td>
                                                        <td>{{$d->nama_gedung}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td>:</td>
                                                        <td>{{$d->nama_kampus}}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ./wrapper -->

<!-- AdminLTE for demo purposes -->
<script src="{{asset('lte/dist/js/demo.js')}}"></script>
</body>
</html>
<?php
use Dompdf\Dompdf;
use Dompdf\Options;

$html = ob_get_clean();

$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

$dompdf->stream();

?>
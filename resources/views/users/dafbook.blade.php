@extends('users.layout.master')
@section('content')
<!-- <style type="text/css" media="print">
BODY {display:none;visibility:hidden;}
</style> -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-center">
                <div class="col-sm-4">
                    <h1>
                        Daftar Pesanan
                        <button class="btn btn-secondary" onclick="MyPrint()" ><i class="fas fa-print"></i> Cetak </button>
                        <!-- <a href="/daft-pesan/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a> -->
                    </h1>
                </div>
                <div class="col-sm-4">
                    <div class="breadcrumb float-sm-right">
                        <div class="breadcrumb-item">Home</div>
                        <div class="breadcrumb-item active">Dafar Pesanan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content" id="contentku">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-file">
                            <div class="row">
                                    @forelse($data as $d)
                                    @if($d->validasi != "")
                                <div class="col-6">
                                    <img src="{{asset($d->url)}}" alt="gambar kamar"class="product-image">
                                </div>
                                <div class="col-6">
                                    <h3>Bukti Pemesanan</h3>
                                    <nav class="w-100">
                                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                                            <a href="#product-desc" id="product-desc-tab" class="nav-item nav-link active" data-toggle="tab" role="tab" aria-controls="product-desc">Description</a>
                                        </div>
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
                                                        <td>Nama Kamar</td>
                                                        <td>:</td>
                                                        <td>{{$d->nama_ruang}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lantai</td>
                                                        <td>:</td>
                                                        <td>Lantai {{$d->lantai}}</td>
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
                                @else
                                    <h5>1 data pemesanan menunggu diverifikasi oleh Admin</h5>
                                @endif
                                @empty
                                <h5>Anda belum melakukan pemesanan.</h5>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function MyPrint()
    {
        // $('.content').show().printElement();
     var divToPrint=document.getElementById('contentku');

      var newWin=window.open('','Print-Window');

      newWin.document.open();

      newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

      newWin.document.close();

      setTimeout(function(){newWin.close();},10);
    }
    $(document).on("keyup keydown", function(e){
    if(e.ctrlKey && e.keyCode == 80){
        alert('Ctrl + P pressed!');
        return false;
    }
});
</script>
@endsection

<!-- <table class="table table-striped table-bordered">
                        <thead class="text-center">
                            <tr>
                                <td>#</td>
                                <td>Nama</td>
                                <td>Ruang</td>
                                <td>Gedung</td>
                                <td>Kampus</td>
                                <td>Tahun Akademik</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>1</td>
                                <td class="text-left">Dimas Bagas Prakoso</td>
                                <td>2.1</td>
                                <td>B</td>
                                <td>Kampus 1</td>
                                <td>2020/2021</td>
                                <td><a href="#" class="btn btn-danger btn-sm">Batal</a></td>
                            </tr>
                        </tbody>
                    </table> -->
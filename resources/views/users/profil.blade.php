@extends('users.layout.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
            <button class="btn btn-primary" onclick="MyPrint()" ><i class="fas fa-print"></i> Cetak Biodata</button>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('images/usericon.png')}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{auth::user()->name}}</h3>

                <p class="text-muted text-center">{{auth::user()->prodi}}</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card --></div>
        <div class="col">
          <div class="card card-primary card-outline">
              <!-- /.card-header -->
                    <div class="card-header border-bottom-0">
                    <nav class="w-100">
                      <div class="nav nav-tabs" id="product-tab" role="tablist">
                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Edit Data</a>
                        <!-- <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Biodata</a> -->
                      </div>
                    </nav>
                    </div>
              <!-- form start -->
              <div class="card-body">
              @foreach($data as $d3)
                <form class="form-horizontal" method="POST" action="{{url('updatebiodata')}}">
                    <div class="tab-content p-3" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                            {{ csrf_field() }}
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" name="name" required="required" placeholder="Name" value="{{$d3->name}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputTLahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputTLahir" name="t_lahir" required="required" placeholder="Tempat Lahir" value="{{$d3->tp_lahir}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputTglLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                              <input type="date" class="form-control" id="inputTglLahir" name="tgl_lahir" required="required" placeholder="Tanggal Lahir" value="{{$d3->tgl_lahir}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Userame</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName2" name="username" required="required" placeholder="Username" value="{{$d3->username}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputEmail" name="email" required="required" placeholder="Email" value="{{$d3->email}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPass" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="inputPass" name="password" placeholder="Enter Your New Password!">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputTelp" class="col-sm-2 col-form-label">Telepon</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputTelp" name="telepon" required="required" placeholder="Telepon" value="{{$d3->telepon}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" id="inputAlamat" name="alamat" required="required" placeholder="Alamat">{{$d3->alamat_mhs}}</textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputAyah" class="col-sm-2 col-form-label">Nama Ayah</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputAyah" name="ayah" required="required" placeholder="Nama Ayah" value="{{$d3->nama_ayah}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputIbu" class="col-sm-2 col-form-label">Nama Ibu</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputIbu" name="ibu" required="required" placeholder="Nama Ibu" value="{{$d3->nama_ibu}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputAlOrtu" class="col-sm-2 col-form-label">Alamat Orang Tua</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" id="inputAlOrtu" name="alamat_ortu" required="required" placeholder="Alamat Orang TUa atau Wali">{{$d3->alamat_ortu}}</textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputTelpOrtu" class="col-sm-2 col-form-label">Nomor Telepon/HP Orang Tua/Wali</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputTelpOrtu" name="telp_ortu" required="required" placeholder="Nomor Telepon atau HP Orang Tua" value="{{$d3->notelp_ortu}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputGoldar" class="col-sm-2 col-form-label">Golongan Darah</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputGoldar" name="goldar" required="required" placeholder="Golongan Darah" value="{{$d3->goldar}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputmasalah" class="col-sm-2 col-form-label">Masalah Kesehatan Yang Sering Dialami</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputmasalah" name="masalah_kes" required="required" placeholder="Contoh: Pusing, Batuk, Pilek, dll." value="{{$d3->masalah_kes}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputObat" class="col-sm-2 col-form-label">Obat Yang Sering Dikonsumsi</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputObat" name="obat" required="required" placeholder="Contoh: Paracetamol" value="{{$d3->kons_obat}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputAlergi" class="col-sm-2 col-form-label">Alergi Makanan</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputAlergi" name="alergi_mkn" required="required" placeholder="Contoh: Lontong" value="{{$d3->alergi_mkn}}">
                            </div>
                          </div>
                          <!-- <div class="form-group row">
                            <label for="inputProdi" class="col-sm-2 col-form-label">Program Studi</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputProdi" name="prodi" required="required" placeholder="Program Studi">
                              <input type="hidden" class="form-control" id="id" name="id" required="required" placeholder="ID">
                            </div>
                          </div> -->


                          <!-- <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                </label>
                              </div>
                            </div>
                          </div> -->
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </div>
                        </div>
                      <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                        <div id="contentku">
                        <h3><center>BIODATA MAHASISWA</center></h3>
                        <table align="center" width="">
                          <tr width="20%">
                            <td>Nama</td>
                            <td width="2%">:</td>
                            <td>{{$d3->name}}</td>
                          </tr>
                          <tr width="">
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td>{{$d3->tp_lahir}}</td>
                          </tr>
                          <tr width="">
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{$d3->tgl_lahir}}</td>
                          </tr>
                          <tr width="">
                            <td>Email</td>
                            <td>:</td>
                            <td>{{$d3->email}}</td>
                          </tr>
                          <tr width="">
                            <td>No.Telp/HP</td>
                            <td>:</td>
                            <td>{{$d3->telepon}}</td>
                          </tr>
                          <tr width="">
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{$d3->alamat_mhs}}</td>
                          </tr>
                          <tr width="">
                            <td>Program Studi</td>
                            <td>:</td>
                            <td>{{$d3->prodi}}</td>
                          </tr>
                          <tr width="">
                            <td>Golongan Darah</td>
                            <td>:</td>
                            <td>{{$d3->goldar}}</td>
                          </tr>
                          <tr width="">
                            <td>Masalah Kesehatan</td>
                            <td>:</td>
                            <td>{{$d3->masalah_kes}}</td>
                          </tr>
                          <tr width="">
                            <td>Obat Yang Sering Dikonsumsi</td>
                            <td>:</td>
                            <td>{{$d3->kons_obat}}</td>
                          </tr>
                          <tr width="">
                            <td>Alergi Makanan</td>
                            <td>:</td>
                            <td>{{$d3->alergi_mkn}}</td>
                          </tr>
                          <tr>
                            <td colspan="2">
                              <div style="border-style: ridge;max-width: 133px;height:151px;">
                                <p style="margin: auto;">foto 3x4</p>
                              </div>
                            </td>
                            <td align="center">
                              <p>
                                Mahasiswa
                                <br><br><br><br><br>
                                ..........................................
                              </p>
                            </td>
                          </tr>
                        </table>
                      </div>
                      </div>
                    </div>
                  </form>
                @endforeach
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
</script>
@endsection
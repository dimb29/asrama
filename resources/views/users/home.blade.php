@extends('users.layout.master')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('images/teskes-slider.png')}}">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/ujitulis.png')}}">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/unmandiri.png')}}">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row justify-content-center">
        <div class="col-9" style="top:-80px">
        <!-- <div class="tab-wrapper" id="search-tabs">
          <div class="tab-list">
          <ul class="nav nav-tabs">
            <li class="nav-item">
            <a href="#hotel" class="nav-link hotel active bg-light">
              <img src="https://s3-ap-southeast-1.amazonaws.com/ma.homepage.menus/icon.svg" class="tab-icon">
                kampusI
            </a></li>
            <li class="nav-item">
            <a href="#flight" class="nav-link flight bg-light">
            <img src="https://s3-ap-southeast-1.amazonaws.com/ma.homepage.menus/icon.svg" class="tab-icon">
                KampusII
            </a></li>
            <li class="nav-item">
            <a href="#flight-international" class="nav-link flight-international bg-light">
            <img src="https://s3-ap-southeast-1.amazonaws.com/ma.homepage.menus/icon.svg" class="tab-icon">
                KampusIII
            </a></li>
            <li class="nav-item">
            <a href="#train" class="nav-link train bg-light">
            <img src="https://s3-ap-southeast-1.amazonaws.com/ma.homepage.menus/icon.svg" class="tab-icon">
                KampusIV
            </a></li>
            <li class="nav-item">
            <a href="#tour" class="nav-link tour">
            <img src="https://s3-ap-southeast-1.amazonaws.com/ma.homepage.menus/icon.svg" class="tab-icon">
                KampusV
            </a></li>
            <li class="nav-item">
            <a href="#activity" class="nav-link activity">
            <img src="https://s3-ap-southeast-1.amazonaws.com/ma.homepage.menus/icon.svg" class="tab-icon">
                KampusVI
            </a></li>
          </ul>
        </div> 
        <div class="tab-content">
          <div data-name="hotel"></div>
          <div data-name="flight"></div>
          <div data-name="flight-international"></div>
          <div data-name="train"></div>
          <div data-name="tour"></div>
          <div data-name="activity"></div>
        </div>
      </div>
    </div> -->
            <div class="card card-primary card-outline  sticky-top border-0">
              <div class="card-header p-0 border-0 bg-muted">
                <ul class="nav nav-tabs bg-light"  id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link text-success" id="custom-tabs-three-kampusI-tab" data-toggle="pill" href="#custom-tabs-three-kampusI" role="tab" aria-controls="custom-tabs-three-kampusI" aria-selected="true">
                    <i class="fas fa-university"></i>
                    KAMPUS SMG
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-info" id="custom-tabs-three-kampusII-tab" data-toggle="pill" href="#custom-tabs-three-kampusII" role="tab" aria-controls="custom-tabs-three-kampusII" aria-selected="false">
                    <i class="fas fa-university"></i>
                    KAMPUS KENDAL
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-warning" id="custom-tabs-three-kampusIII-tab" data-toggle="pill" href="#custom-tabs-three-kampusIII" role="tab" aria-controls="custom-tabs-three-kampusIII" aria-selected="false">
                    <i class="fas fa-university"></i>
                    KAMPUS KEBID MGL
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-danger" id="custom-tabs-three-kampusIV-tab" data-toggle="pill" href="#custom-tabs-three-kampusIV" role="tab" aria-controls="custom-tabs-three-kampusIV" aria-selected="false">
                    <i class="fas fa-university"></i>
                    KAMPUS KEP MGL
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link text-dark" id="custom-tabs-three-kampusV-tab" data-toggle="pill" href="#custom-tabs-three-kampusV" role="tab" aria-controls="custom-tabs-three-kampusV" aria-selected="false">
                    <i class="fas fa-university"></i>
                    KAMPUS PWT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-kampusVI-tab" data-toggle="pill" href="#custom-tabs-three-kampusVI" role="tab" aria-controls="custom-tabs-three-kampusVI" aria-selected="false">
                    <i class="fas fa-university"></i>
                    KAMPUS BLORA</a>
                  </li>
                </ul>
              </div>
              <div class="card-body bg-light">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade active show" id="custom-tabs-three-kampusI" role="tabpanel" aria-labelledby="custom-tabs-three-kampusI-tab">
                  <div class="row d-flex align-items-stretch">   
                  @foreach($data as $d)
                @if($d->id == "A")
                  <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
                      <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                          {{$d->nama_kampus}}
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead"><b>{{$d->nama_gedung}}</b></h2>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: {{$d->alamat}} {{$d->kota}}</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                              
                              
                              <img src="{{asset($d->url)}}" alt="" class="rounded img-fluid">
                             
                              
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <form action="/detail2" method="get">
                              <input type="hidden" name="idged" required="required" value="{{$d->id_gedung}}">
                              <!-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> -->
                              <input type="submit" class="btn btn-sm btn-primary" value="Detail">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                  @endforeach
                  </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-kampusII" role="tabpanel" aria-labelledby="custom-tabs-three-kampusII-tab">
                  
                  <div class="row d-flex align-items-stretch">   
                  @foreach($data as $d)
                @if($d->id == "B")
                  <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
                      <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                          {{$d->nama_kampus}}
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead"><b>{{$d->nama_gedung}}</b></h2>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: {{$d->alamat}} {{$d->kota}}</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                              
                              
                              <img src="{{asset($d->url)}}" alt="" class="rounded img-fluid">
                             
                              
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <form action="/detail2" method="get">
                              <input type="hidden" name="idged" required="required" value="{{$d->id_gedung}}">
                             <!--  <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> -->
                              <input type="submit" class="btn btn-sm btn-primary" value="Detail">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                  @endforeach
                  </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-kampusIII" role="tabpanel" aria-labelledby="custom-tabs-three-kampusIII-tab">
                  <div class="row d-flex align-items-stretch">   
                  @foreach($data as $d)
                @if($d->id == "C")
                  <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
                      <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                          {{$d->nama_kampus}}
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead"><b>{{$d->nama_gedung}}</b></h2>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: {{$d->alamat}} {{$d->kota}}</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                              
                              
                              <img src="{{asset($d->url)}}" alt="" class="rounded img-fluid">
                             
                              
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <form action="/detail2" method="get">
                              <input type="hidden" name="idged" required="required" value="{{$d->id_gedung}}">
                             <!--  <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> -->
                              <input type="submit" class="btn btn-sm btn-primary" value="Detail">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                  @endforeach
                  </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-kampusIV" role="tabpanel" aria-labelledby="custom-tabs-three-kampusIV-tab">
                  <div class="row d-flex align-items-stretch">   
                  @foreach($data as $d)
                @if($d->id == "D")
                  <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
                      <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                          {{$d->nama_kampus}}
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead"><b>{{$d->nama_gedung}}</b></h2>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: {{$d->alamat}} {{$d->kota}}</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                              
                              
                              <img src="{{asset($d->url)}}" alt="" class="rounded img-fluid">
                             
                              
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <form action="/detail2" method="get">
                              <input type="hidden" name="idged" required="required" value="{{$d->id_gedung}}">
                              <!-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> -->
                              <input type="submit" class="btn btn-sm btn-primary" value="Detail">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                  @endforeach
                  </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-kampusV" role="tabpanel" aria-labelledby="custom-tabs-three-kampusV-tab">
                  <div class="row d-flex align-items-stretch">   
                  @foreach($data as $d)
                @if($d->id == "E")
                  <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
                      <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                          {{$d->nama_kampus}}
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead"><b>{{$d->nama_gedung}}</b></h2>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: {{$d->alamat}} {{$d->kota}}</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                              
                              
                              <img src="{{asset($d->url)}}" alt="" class="rounded img-fluid">
                             
                              
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <form action="/detail2" method="get">
                              <input type="hidden" name="idged" required="required" value="{{$d->id_gedung}}">
                              <!-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> -->
                              <input type="submit" class="btn btn-sm btn-primary" value="Detail">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                  @endforeach
                  </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-kampusVI" role="tabpanel" aria-labelledby="custom-tabs-three-kampusVI-tab">
                  <div class="row d-flex align-items-stretch">   
                  @foreach($data as $d)
                @if($d->id == "F")
                  <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
                      <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                          {{$d->nama_kampus}}
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead"><b>{{$d->nama_gedung}}</b></h2>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: {{$d->alamat}} {{$d->kota}}</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                              
                              
                              <img src="{{asset($d->url)}}" alt="" class="rounded img-fluid">
                             
                              
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <form action="/detail2" method="get">
                              <input type="hidden" name="idged" required="required" value="{{$d->id_gedung}}">
                              <!-- <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-comments"></i>
                              </a> -->
                              <input type="submit" class="btn btn-sm btn-primary" value="Detail">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                  @endforeach
                  </div>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
        <!-- ROW Content 2 -->
        <div class="row justify-content-center">
          <div class="col-9">
            
        <!-- <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div> -->
        <!-- /.row -->
            <div class="row">
              <div class="col">
                <div class="card card-solid">
                  <div class="card-content">
                    <div class="card-header">
                      <h5>Pengumuman</h5>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <!-- pengumuman -->
                          <div class="row">
                            <div class="col">
                                <h5>Daftar Pembayaran Makan dan Menginap di Asrama</h5>
                              </div>
                              <div class="col text-right">
                                <sup>Senin, 06 Maret 2020</sup>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <p>
                                  <a href="{{asset('dokumen/Pengumuman_biaya_asrama.pdf')}}" target="_blank">Lihat Dokumen</a>
                                </p>
                            </div>
                          </div>
                          <hr />

                          <div class="row">
                            <div class="col">
                                <h5>Lembar Biodata Mahasiswa</h5>
                              </div>
                              <div class="col text-right">
                                <sup>Selasa, 07 Maret 2020</sup>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <p>
                                  <a href="{{asset('dokumen/biodata_mhs.pdf')}}" target="_blank">Download Dokumen</a>
                                </p>
                            </div>
                          </div> 
                          <hr />

                          <div class="row">
                            <div class="col">
                                <h5>Surat Permohonan Calon Penghuni Asrama</h5>
                              </div>
                              <div class="col text-right">
                                <sup>Rabu, 08 Maret 2020</sup>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <p>
                                  <a href="{{asset('dokumen/surat_permohonan.pdf')}}" target="_blank">Download Dokumen</a>
                                </p>
                            </div>
                          </div>
                          <hr />

                          <div class="row">
                            <div class="col">
                                <h5>Syarat Penghuni Asrama</h5>
                              </div>
                              <div class="col text-right">
                                <sup>Rabu, 08 Maret 2020</sup>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <p>
                                  <a href="{{asset('dokumen/syarat_penghuni.docx')}}" target="_blank">Download Dokumen</a>
                                </p>
                            </div>
                          </div> 
                          <hr />
                          <!-- /pengumuman -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- COL -->
        </div>
        <!--/ ROW -->

        @foreach($data3 as $d3)
        @if($first_time_login)
        <div class="modal modalusers" data-backdrop="static">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="card-header">
                        <div class="row">
                            <div class="col"> 
                              <h4 class="modal-title">Biodata (wajib dilengkapi)</h4>
                            </div>
                            <div class="col">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="Close('.modalusers');">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="{{url('updatebiodata')}}">
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
                              <input type="text" class="form-control" id="inputPass" name="password" placeholder="Enter Your New Password!">
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
                              <input type="text" class="form-control" id="inputProdi" name="prodi" required="required" placeholder="Program Studi"> -->
                              <input type="hidden" class="form-control" id="id" name="id" required="required" placeholder="ID">
                            <!-- </div>
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
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <h1>BISA WOYY</h1>
        @else 
          <!-- <h3>Tak tampil</h3> -->
        @endif
        @endforeach
            </div>
            <!-- /.card -->
          </section>
          <script>
            $(document).ready(function(){
              $('.modalusers').modal('show');
              // console.log("LOSKE WASE");
              $('.modalusers').modal({
                backdrop: 'static',
                keyboard: false
              });
            });
          </script>
          <!-- right col -->
    <!-- /.content -->

@endsection
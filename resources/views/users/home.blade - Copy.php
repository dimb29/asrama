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
                              <h2 class="lead"><b>Gedung Asrama</b></h2>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Jl. Laut, Patukangan, Kec. Kendal, Kabupaten Kendal (51311)</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                              <img src="{{asset('lte/dist/img/user1-128x128.jpg')}}" alt="" class="rounded img-fluid">
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <a href="#" class="btn btn-sm bg-teal">
                              <i class="fas fa-comments"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-primary">
                             Detail  
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                  @endforeach
                    <!-- <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
                      <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                          Kampus I
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead"><b>Gedung Asrama B</b></h2>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Tirto Agung, Pedalangan, Banyumanik, Kota Semarang</li>
                              </ul>
                            </div>
                            <div class="col-5 text-center">
                              <img src="{{asset('lte/dist/img/user1-128x128.jpg')}}" alt="" class="rounded img-fluid">
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <a href="#" class="btn btn-sm bg-teal">
                              <i class="fas fa-comments"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-primary">
                             Detail  
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
                      <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                          Kampus I
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead"><b>Gedung Asrama C</b></h2>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Tirto Agung, Pedalangan, Banyumanik, Kota Semarang</li>
                              </ul>
                            </div>
                            <div class="col-5 text-center">
                              <img src="{{asset('lte/dist/img/user1-128x128.jpg')}}" alt="" class="rounded img-fluid">
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <a href="#" class="btn btn-sm bg-teal">
                              <i class="fas fa-comments"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-primary">
                             Detail  
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  </div></div>
                  <div class="tab-pane fade" id="custom-tabs-three-kampusII" role="tabpanel" aria-labelledby="custom-tabs-three-kampusII-tab">
                  <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
                      <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                          Kampus II
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead"><b>Gedung Asrama</b></h2>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Jl. Laut, Patukangan, Kec. Kendal, Kabupaten Kendal (51311)</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                              <img src="{{asset('lte/dist/img/user1-128x128.jpg')}}" alt="" class="rounded img-fluid">
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <a href="#" class="btn btn-sm bg-teal">
                              <i class="fas fa-comments"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-primary">
                             Detail  
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-kampusIII" role="tabpanel" aria-labelledby="custom-tabs-three-kampusIII-tab"><div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
                      <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                          Kampus II
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead"><b>Gedung Asrama</b></h2>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Jl. Laut, Patukangan, Kec. Kendal, Kabupaten Kendal (51311)</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                              <img src="{{asset('lte/dist/img/user1-128x128.jpg')}}" alt="" class="rounded img-fluid">
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <a href="#" class="btn btn-sm bg-teal">
                              <i class="fas fa-comments"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-primary">
                             Detail  
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-kampusIV" role="tabpanel" aria-labelledby="custom-tabs-three-kampusIV-tab">
                  <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
                      <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                          Kampus II
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead"><b>Gedung Asrama</b></h2>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Jl. Laut, Patukangan, Kec. Kendal, Kabupaten Kendal (51311)</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                              <img src="{{asset('lte/dist/img/user1-128x128.jpg')}}" alt="" class="rounded img-fluid">
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <a href="#" class="btn btn-sm bg-teal">
                              <i class="fas fa-comments"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-primary">
                             Detail  
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-kampusV" role="tabpanel" aria-labelledby="custom-tabs-three-kampusV-tab">
                  <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
                      <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                          Kampus II
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead"><b>Gedung Asrama</b></h2>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Jl. Laut, Patukangan, Kec. Kendal, Kabupaten Kendal (51311)</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                              <img src="{{asset('lte/dist/img/user1-128x128.jpg')}}" alt="" class="rounded img-fluid">
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <a href="#" class="btn btn-sm bg-teal">
                              <i class="fas fa-comments"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-primary">
                             Detail  
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-kampusVI" role="tabpanel" aria-labelledby="custom-tabs-three-kampusVI-tab">
                  <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
                      <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                          Kampus II
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead"><b>Gedung Asrama</b></h2>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Jl. Laut, Patukangan, Kec. Kendal, Kabupaten Kendal (51311)</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                              <img src="{{asset('lte/dist/img/user1-128x128.jpg')}}" alt="" class="rounded img-fluid">
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <a href="#" class="btn btn-sm bg-teal">
                              <i class="fas fa-comments"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-primary">
                             Detail  
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-kampusVII" role="tabpanel" aria-labelledby="custom-tabs-three-kampusVII-tab">
                  <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">
                      <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                          Kampus II
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead"><b>Gedung Asrama</b></h2>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Jl. Laut, Patukangan, Kec. Kendal, Kabupaten Kendal (51311)</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                              <img src="{{asset('lte/dist/img/user1-128x128.jpg')}}" alt="" class="rounded img-fluid">
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <a href="#" class="btn btn-sm bg-teal">
                              <i class="fas fa-comments"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-primary">
                             Detail  
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
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
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
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
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
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
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
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
          <!-- ./col -->
        </div>
        <!-- /.row -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    <!-- /.content -->
@endsection
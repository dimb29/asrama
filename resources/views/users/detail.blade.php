@extends('users.layout.master')
@section('content')
<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card card-solid">
  <div class="card-body">
    <div class="row">
      <div class="col-12 col-sm-6">
        <!-- <h3 class="d-inline-block d-sm-none">Gedung Asrama Kampus I Semarang</h3> -->
        <div class="col-12">
          @if(Auth::user() != "")
          <input type="hidden" name="log-users" class="log-users" value="{{ Auth::user()->name }}">
          @else
          <input type="hidden" name="log-users" class="log-users" value="">
          @endif
        @foreach($data2 as $d2)
        <img src="{{asset($d2)}}" class="product-image" alt="rounded img-fluid">
          @endforeach
        </div>
        <div class="col-12 product-image-thumbs">
          <!-- <div class="product-image-thumb active"><img src="{{asset('images/majt.jpg')}}" alt="Product-Image1"></div> -->
        @foreach($data as $d)
          <div class="product-image-thumb" ><img src="{{asset($d->url)}}" alt="Product-Image1"></div>
          <!-- <div class="product-image-thumb" ><img src="{{asset('images/hotel1.jpg')}}" alt="Product-Image1"></div>
          <div class="product-image-thumb" ><img src="{{asset('images/hotel2.jpg')}}" alt="Product-Image1"></div>
          <div class="product-image-thumb" ><img src="{{asset('images/lawu.jpg')}}" alt="Product-Image1"></div> -->
          @endforeach
        </div>
      </div>
      <div class="col-12 col-sm-6">
      @foreach($data3 as $d3)
        <h3 class="my-3">{{$d3->nama_gedung}}</h3>
        <p>Address: {{$d3->alamat}} {{$d3->kota}} ({{$d3->kodepos}}) telp: {{$d3->telepon}}</p>

        <hr>
        
        <nav class="w-100">
          <div class="nav nav-tabs" id="product-tab" role="tablist">
            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
            <!-- <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
            <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a> -->
          </div>
        </nav>
        <div class="tab-content p-3" id="nav-tabContent" style="overflow:auto; height:200px">
          <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">{{$d3->description}}</div>
          <!-- <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
          <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div> -->
        </div>
        
        <input type="hidden" name="idged" id="idged" value="{{$d3->id_gedung}}">
      @endforeach
        <div class="mt-4 product-share">
          <a href="#" class="text-gray">
            <i class="fab fa-facebook-square fa-2x"></i>
          </a>
          <a href="#" class="text-gray">
            <i class="fab fa-twitter-square fa-2x"></i>
          </a>
          <a href="#" class="text-gray">
            <i class="fas fa-envelope-square fa-2x"></i>
          </a>
          <a href="#" class="text-gray">
            <i class="fas fa-rss-square fa-2x"></i>
          </a>
        </div>
        <div>
        </div>
      </div>
      <!-- <input type="button" id="tampilkan" value="Tampilkan">  -->
    </div>
    <div class="row flex-row-reverse">
      <div class="col-2">
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
      </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-12">
              <table id="example1" class="table table-bordered table-striped w-100">
                <thead>
                  <tr>
                      <th class="text-center" style="width: 1%">
                          #
                      </th>
                      <th class="text-center" style="width: 30%">
                          Ruangan
                      </th>
                      <th class="text-center" style="width: 49%">
                          Jumlah Slot
                      </th>
                      <th class="text-center" style="width: 9%">
                          Status
                      </th>
                      <th class="text-center" style="width: 11%">
                      </th>
                  </tr>
              </thead>
              <tbody class="dataruang">
              <!-- <tr>
                      <td>
                          #
                      </td>
                      <td>
                        <div class="row">
                          <div class="col">
                            <img src="{{asset('images/kamar1.jpg')}}" width="70%"/>
                          </div>
                          <div class="col">
                          <h4>Ruang</h4>
                          <small>
                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-pesan">
                            Info Ruang
                          </button>
                          </small>
                          </div>
                        </div>
                      </td>
                      
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-volumenow="3" aria-volumemin="0" aria-volumemax="4" style="width: 75%">
                              </div>
                          </div>
                          <small>
                              3 slot terisi <br/> total: 4 slot
                          </small>
                      </td>
                      <td class="project-state text-center">
                          <span class="badge badge-success">Success</span>
                      </td>
                      <td class="project-actions text-center">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                            Pesan
                          </button>
                      </td>
                  </tr> -->
                  <div></div>
                </tbody>
              </table>
    </div>
    </div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card --> 
</section>
<!-- /.content -->

<!-- Modal in here -->
      <!--.modal-1 -->
<div class="modal modalPesan" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Pilih Tempat Tidur</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="Close('.modalPesan');">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- modal content -->
            <div class="modal-body">
              <div class="row modalPesanBody">
                
              </div>
            </div>
            <!-- /.modal-content -->
        </div>
      </div>
        <!-- /.modal-dialog -->
</div>
      <!-- /.modal-1 -->
      <!--.modal-2 -->
<div class="modal modalInfo" id="modal-md">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Info Ruangan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="Close('.modalInfo');">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body modalInfoBody">

            </div>
    <div class="row">
      <div class="col-12 col-sm-6">
        <!-- <h3 class="d-inline-block d-sm-none">Gedung Asrama Kampus I Semarang</h3> -->
        <div class="col-12 img-ruang">
        <!-- @foreach($data2 as $d2) -->
          <img src="" class="product-image single-image" alt="Product-Image1">
        <!-- @endforeach -->
        </div>
        <div class="col-12 product-image-thumbs">
          <!-- <div class="product-image-thumb active"><img src="{{asset('images/majt.jpg')}}" alt="Product-Image1"></div> -->
          <!-- <div class="product-image-thumb" ><img class="timg-ruang" src="" alt="Product-Image1"></div> -->
          <!-- <div class="product-image-thumb" ><img class="timg-ruang2" src="" alt="Product-Image1"></div> -->
        </div>
      </div>
      <div class="col-12 col-sm-6">
        <h3 class="my-3 name-room"></h3>

        <hr>
        
        <nav class="w-100">
          <div class="nav nav-tabs" id="product-tab" role="tablist">
            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
        </nav>
        <div class="tab-content p-3" id="nav-tabContent" style="overflow:auto; height:200px">
          <div class="tab-pane fade show active desc-room" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"></div>
        </div>
      </div>
      <!-- <input type="button" id="tampilkan" value="Tampilkan">  -->
    </div>
          </div>
          <!-- /.modal-content -->
        </div>
      </div>
        <!-- /.modal-dialog -->
      <!-- /.modal-2 -->

      <!--.modal-1 -->
<div class="modal modalPemesan" id="basicExampleModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content bg-danger">
            <div class="modal-body">
              <button type="button" class="close" onclick="Close('.modalPemesan');">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="row">
              <table>
              <tr>
              <td>Nama</td>
              <td>:</td>
              <td class="name-pmsn"></td>
              </tr>
              <tr>
              <td>Prodi</td>
              <td>:</td>
              <td class="prodi-pmsn"></td>
              </tr>
              </table>
              </div>
            </div>
            <!-- <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
          </div>
          <!-- /.modal-content -->
        </div>
      </div>
        <!-- /.modal-dialog -->
      <!-- /.modal-1 -->
<!-- / Modal in here -->

<script> 
  var loguser = $('.log-users').val();
  console.log(loguser);
    function modalInfo(item){
      var IDRuang = $(item).attr('data-id');
      console.log(IDRuang);
      $('.modalInfo').fadeIn();
      if(IDRuang)
      {
        jQuery.ajax({
          url: "detail/info-ruang/"+IDRuang,
          type: "GET",
          dataType: "json",
          success:function(data)
          {
            // x = "";
            console.log(data.first[0]);
            // console.log(data.first[0].lantai);
              // x = '<img src="{{asset('`+data.first[0].url;+`')}}" class="product-image single-image" alt="Product-Image1">'
              x = data.first[0].url;
              // y = data.first[1].url;
              z = 'Ruang '+data.second[0].nama_ruang;
              a = 'Fasilitas : '+data.second[0].fasilitas;
            // console.log(data.second);
            $('.single-image').empty();
            $('.timg-ruang').empty();
            $('.timg-ruang2').empty();
            $('.name-room').empty();
            $('.desc-room').empty();
            $('.single-image').attr('src',x);
            $('.timg-ruang').attr('src',x);
            // $('.timg-ruang2').attr('src',y);
            $('.name-room').append(z);
            $('.desc-room').append(a);
          }
        });
      }
    }
    function modalPesan(item){
      var ruangID =  $(item).attr('data-id');
      console.log(ruangID);
      $('.modalPesan').fadeIn();
      if(ruangID)
      {
        jQuery.ajax({
          url: "detail/pesan/"+ruangID,
          type: "GET",
          dataType: "json",
          success:function(data)
          {
            x = ""
            for(i in data)
            {
              if(data[i].terpakai == 0)
              {
              x +='<button type="button" class="btn btn-success mx-auto m-1" data-id="'+data[i].id_kasur+'" data-jml="'+data[i].terpakai+'" onclick="modalPesanan(this)">'
                +'<img  style="height:80px;" src="http://localhost:8000/images/bed.svg">'
                +'</button>';
              }else
              {
              x+='<button type="button" class="btn btn-danger mx-auto m-1" data-id="'+data[i].id_kasur+'" onclick="modalPemesan(this);">'
                +'<img style="height:80px;" src="http://localhost:8000/images/bed.svg">'
                +'</button>';
              }
            }
            console.log(x)
            $('.modalPesanBody').empty();
            $('.modalPesanBody').append(x);
          }
        });
      }

    }
    function Close(item)
    {
      jQuery(item).fadeOut();
    }
    function modalPesanan(item)
    {
      var kamarID = $(item).attr('data-id');
      if(kamarID)
      {
        jQuery.ajax({
          url: "detail/pemesan/"+kamarID,
          type: "GET",
          dataType: "json",
          beforeSend:function()
          {
            return confirm("Apa anda yakin dengan pilihan anda?");
          },
          success:function(data)
          {
            alert("Data Kamar Berhasil dipesan..!!");
            location.reload();
          },
          error:function(data)
          {
            if (loguser != "") 
            {
              alert('Anda hanya bisa melakukan satu kali pemesanan..!!');
            }else
            {
              alert('Silahkan Login terlebih dahulu..!!');
            }
          }
        })
      }
    }
    function modalPemesan(item)
    {
      $('.modalPemesan').fadeIn();
      var kamarID = $(item).attr('data-id');
      if(kamarID)
      {
        jQuery.ajax({
          url: "detail/terpesan/"+kamarID,
          type: "GET",
          dataType: "json",
          success:function(data)
          {
            for(i in data )
            {
              nama = data[i].name;
              prodi = data[i].prodi;
            }
          $('.name-pmsn').empty();
          $('.name-pmsn').append(nama);
          $('.prodi-pmsn').empty();
          $('.prodi-pmsn').append(prodi);
          }
        });
      }

    }
    function ClosePemesan(item)
    {
      jQuery(item).fadeOut();
    }
  $(document).ready(function(){
    // $('#tampilkan').on('click', function(){
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $(".dataruang tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      var gedungID = $('#idged').val();
      console.log(gedungID);
    if(gedungID)
    {
      $.ajax({
        url: 'detail2/getdataruang/'+gedungID,
        type: 'GET',
        dataType: 'json',
        success:function(data)
        {
          var x = ""
          var kap = ""
            no = 1;
          for(i in data)
          {
            kap = data[i].terpakai/data[i].kapasitas;
            jumlah = kap*100;
            sisa = data[i].kapasitas-data[i].terpakai;
            console.log(jumlah);
            if(kap == 1)
            {
              label = '<span class="badge badge-danger">Penuh</span>'
            }else{
              label = '<span class="badge badge-success">'+sisa+' slot kosong</span>'
            }
            x +='<tr role="row" class="odd">'
                      +'<td>'
                          +no++ 
                      +'</td>'
                      +'<td>'
                        +'<div class="row">'
                          +'<div class="col">'
                            +'<img src="http://localhost:8000/'+data[i].url+'" width="70%"/>'
                          +'</div>'
                          +'<div class="col">'
                          +'<h4>Ruang '+data[i].nama_ruang+' </h4>'
                          +'<input type="button" id="inforruang" class="btn btn-primary" data-id="'+data[i].id_ruang+'" onclick="modalInfo(this)" value="info ruang">'
                          +'</div>'
                        +'</div>'
                      +'</td>'
                      
                      +'<td class="project_progress">'
                          +'<div class="progress progress-sm">'
                              +'<div class="progress-bar bg-green" role="progressbar" aria-volumenow="'+data[i].terpakai+'" aria-volumemin="0" aria-volumemax="'+data[i].kapasitas+'" style="width: '+jumlah+'%">'
                              +'</div>'
                          +'</div>'
                          +'<small>'
                            +data[i].terpakai+' slot terisi <br/>Total: '+data[i].kapasitas+' slot'
                          +'</small>'
                      +'</td>'
                      +'<td class="project-state text-center">'
                          +label
                      +'</td>'
                      +'<td class="project-actions text-center">'
                          +'<button type="button" id="pesanruang" class="btn btn-primary" data-id="'+data[i].id_ruang+'" onclick="modalPesan(this)">'
                            +'Pesan'
                          +'</button>'
                      +'</td>'
                  +'</tr>';
          }
          console.log(x);
          $('.dataruang').append(x);
        }
      })
    }
    // });
  });
</script>

<!-- Modal Pemesan -->
<script>
  // $(function () {
  //   $("#example1").DataTable();
  //   $('#example2').DataTable({
  //     "paging": true,
  //     "lengthChange": false,
  //     "searching": false,
  //     "ordering": true,
  //     "info": true,
  //     "autoWidth": false,
  //   });
  // });
  $(function() {

    $('[data-toggle="modus"]').on('click', function() {
      var modalId = $(this).data('target');
      $(modalId).modal('show');
    });

  });
</script>
<!-- / Modal Pemesan -->
@endsection
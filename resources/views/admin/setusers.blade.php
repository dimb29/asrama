@extends('admin/layouts/ms_admin')
@section('adm_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Setting Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-solid">
                    <div class="card-header border-bottom-0">
                    <nav class="w-100">
                      <div class="nav nav-tabs" id="product-tab" role="tablist">
                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Users</a>
                        <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Upload Data</a>
                      </div>
                    </nav>
                    </div>
                    <div class="card-body">
                    <div class="tab-content p-3" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                        <div class="table-responsive-sm">
                          <table id="example1" class="table table-bordered table-striped w-auto">
                            <thead>
                            <tr>
                              <th>Name</th>
                              <th>Username</th>
                              <th>Telepon</th>
                              <th>Alamat</th>
                              <th>Program Studi</th>
                              <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $d)
                            <tr>
                              <td>{{$d->name}}</td>
                              <td>{{$d->username}}</td>
                              <td>{{$d->telepon}}</td>
                              <td>{{$d->alamat_mhs}}</td>
                              <td>{{$d->prodi}}</td>
                              <td><Button class="btn btn-primary" name="tampil" data-id="{{$d->id}}" onclick="modalUser(this)">Tampil</Button></td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>Name</th>
                              <th>Username</th>
                              <th>Telepon</th>
                              <th>Alamat</th>
                              <th>Program Studi</th>
                              <th></th>
                            </tr>
                            </tfoot>
                          </table>
                        </div>
                      </div>

                        {{-- notifikasi form validasi --}}
                            @if ($errors->has('file'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('file') }}</strong>
                            </span>
                            @endif
                     
                            {{-- notifikasi sukses --}}
                            @if ($sukses = Session::get('sukses'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{{ $sukses }}</strong>
                            </div>
                            @endif
                      <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                     
                            <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
                                IMPORT EXCEL
                            </button>
                     
                            <!-- Import Excel -->
                            <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form method="post" action="{{url('admin/setusers/importexcel')}}" enctype="multipart/form-data">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                            </div>
                                            <div class="modal-body">
                     
                                                {{ csrf_field() }}
                     
                                                <label>Pilih file excel</label>
                                                <div class="form-group">
                                                    <input type="file" name="file" required="required">
                                                </div>
                     
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Import</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                     </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="modal modalusers">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-2"> 
                              <h4 class="modal-title">Edit Users</h4>
                            </div>
                            <div class="col">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="Close('.modalusers');">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="{{url('admin/setusers/updateusers')}}">
                            {{ csrf_field() }}
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" name="name" required="required" placeholder="Name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Userame</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName2" name="username" required="required" placeholder="Username">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputEmail" name="email" required="required" placeholder="Email">
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
                              <input type="text" class="form-control" id="inputTelp" name="telepon" required="required" placeholder="Telepon">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputJurusan" class="col-sm-2 col-form-label">Jurusan</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" id="inputJurusan" name="jurusan" required="required" placeholder="Jurusan"></textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputProdi" class="col-sm-2 col-form-label">Program Studi</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputProdi" name="prodi" required="required" placeholder="Program Studi">
                              <input type="hidden" class="form-control" id="id" name="id" required="required" placeholder="ID">
                              
                            </div>
                          </div>
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
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

     <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>

    <script>
    function modalUser(item)
    {
        var userID = $(item).attr('data-id');
        console.log(userID);
        if (userID) {
            jQuery.ajax({
                url: 'setusers/modalusers/'+userID,
                type: 'GET',
                dataType: 'json',
                success:function(data)
                {
                    $('.modalusers').fadeIn();

                    for (i in data)
                    {
                        id = data[i].id;
                        name = data[i].name;
                        username = data[i].username;
                        email = data[i].email;
                        telepon = data[i].telepon;
                        jurusan = data[i].jurusan;
                        prodi = data[i].prodi;
                    }
                    $('#id').empty();
                    $('#id').val(id);
                    $('#inputName').empty();
                    $('#inputName').val(name);
                    $('#inputName2').empty();
                    $('#inputName2').val(username);
                    $('#inputEmail').empty();
                    $('#inputEmail').val(email);
                    $('#inputTelp').empty();
                    $('#inputTelp').val(telepon);
                    $('#inputJurusan').empty();
                    $('#inputJurusan').val(jurusan);
                    $('#inputProdi').empty();
                    $('#inputProdi').val(prodi);

                }
            });
        }
    }
    function Close(item)
    {
        $(item).fadeOut();
    }
    </script>
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
        });
      });
    </script>
    <script>
      $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
          timePicker: true,
          timePickerIncrement: 30,
          locale: {
            format: 'MM/DD/YYYY hh:mm A'
          }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
          {
            ranges   : {
              'Today'       : [moment(), moment()],
              'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
              'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
              'Last 30 Days': [moment().subtract(29, 'days'), moment()],
              'This Month'  : [moment().startOf('month'), moment().endOf('month')],
              'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate  : moment()
          },
          function (start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
          }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
          format: 'LT'
        })
        
        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
          $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        });

        $("input[data-bootstrap-switch]").each(function(){
          $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

      })
    </script>
@endsection
@extends('admin/layouts/ms_admin')
@section('adm_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Setting Ruang</h1>
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
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-solid">
                    <div class="card-header border-bottom-0">
                    <nav class="w-100">
                      <div class="nav nav-tabs" id="product-tab" role="tablist">
                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Data Ruang</a>
                        <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Upload Data Ruang</a>
                        <a class="nav-item nav-link" id="product-comments-tab2" data-toggle="tab" href="#product-comments2" role="tab" aria-controls="product-comments2" aria-selected="false">Upload Data Kasur</a>
                      </div>
                    </nav>
                    </div>
                    <div class="card-body">
                    <div class="tab-content p-3" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>Nama Ruang</th>
                              <th>ID Gedung</th>
                              <th>Lantai</th>
                              <th>Kapasitas</th>
                              <th>Fasilitas</th>
                              <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $d)
                            <tr>
                              <td>{{$d->nama_ruang}}</td>
                              <td>{{$d->gedung_id}}</td>
                              <td>{{$d->lantai}}</td>
                              <td>{{$d->kapasitas}}</td>
                              <td>{{$d->fasilitas}}</td>
                              <td><Button class="btn btn-primary" name="tampil" data-id="{{$d->id_ruang}}" onclick="modalRuang(this)">Tampil</Button></td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>Nama Ruang</th>
                              <th>ID Gedung</th>
                              <th>Lantai</th>
                              <th>Kapasitas</th>
                              <th>Fasilitas</th>
                              <th></th>
                            </tr>
                            </tfoot>
                          </table>
                      </div>
                      <!-- Data Ruang -->
                      <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                     
                            <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importRuang">
                                Upload Data Ruang
                            </button>
                     
                            <!-- Import Excel -->
                            <div class="modal fade" id="importRuang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form method="post" action="{{url('admin/setruang/importruang')}}" enctype="multipart/form-data">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Upload Data Ruang</h5>
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
                                                <button type="submit" class="btn btn-primary">Upload</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                     </div>
                     <!-- Data Kasur -->
                      <div class="tab-pane fade" id="product-comments2" role="tabpanel" aria-labelledby="product-comments-tab2">
                     
                            <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importKasur">
                                Upload Data Kasur
                            </button>
                     
                            <!-- Import Excel -->
                            <div class="modal fade" id="importKasur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form method="post" action="{{url('admin/setruang/importkasur')}}" enctype="multipart/form-data">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Upload Data Kasur</h5>
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
                                                <button type="submit" class="btn btn-primary">Upload</button>
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

        <div class="modal modalruang">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-2"> 
                              <h4 class="modal-title">Edit Ruang</h4>
                            </div>
                            <div class="col">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="Close('.modalruang');">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="{{url('admin/setruang/updateruang')}}">
                            {{ csrf_field() }}
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Nama Ruang</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" name="name" required="required" placeholder="Name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">ID Gedung</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName2" name="id_gedung" required="required" placeholder="ID Gedung">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputLantai" class="col-sm-2 col-form-label">Lantai</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputLantai" name="lantai" required="required" placeholder="Lantai">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputKap" class="col-sm-2 col-form-label">Kapasitas Ruang</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputKap" name="kapasitas" placeholder="Kapasitas">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputFas" class="col-sm-2 col-form-label">Fasilitas</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputFas" name="fasilitas" required="required" placeholder="Fasilitas">
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
    function modalRuang(item)
    {
        var ruangID = $(item).attr('data-id');
        console.log(ruangID);
        if (ruangID) {
            jQuery.ajax({
                url: 'setruang/modalruang/'+ruangID,
                type: 'GET',
                dataType: 'json',
                success:function(data)
                {
                    $('.modalruang').fadeIn();

                    for (i in data)
                    {
                        id = data[i].id_ruang;
                        name = data[i].nama_ruang;
                        id_gedung = data[i].gedung_id;
                        lantai = data[i].lantai;
                        kapasitas = data[i].kapasitas;
                        fasilitas = data[i].fasilitas;
                    }
                    $('#id').empty();
                    $('#id').val(id);
                    $('#inputName').empty();
                    $('#inputName').val(name);
                    $('#inputName2').empty();
                    $('#inputName2').val(id_gedung);
                    $('#inputLantai').empty();
                    $('#inputLantai').val(lantai);
                    $('#inputKap').empty();
                    $('#inputKap').val(kapasitas);
                    $('#inputFas').empty();
                    $('#inputFas').val(fasilitas);

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
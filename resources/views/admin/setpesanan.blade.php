@extends('admin/layouts/ms_admin')
@section('adm_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Setting Pesanan</h1>
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
                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Edit Pesanan</a>
                        <a href="{{url('/admin/setpesanan/exportdata')}}" class="btn btn-primary">Export Data</a>
                      </div>
                    </nav>
                    </div>
                    <div class="card-body">
                    <div class="tab-content p-3" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>Users</th>
                              <th>Ruang Kamar</th>
                              <th>Gedung</th>
                              <th>Alamat</th>
                              <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $d)
                            <tr>
                              <td>{{$d->name}} <br/><sup>{{$d->id_user}}</sup></td>
                              <td>Kamar {{$d->id_ruang}} <br/><sup>{{$d->id_kamar}}</sup></td>
                              <td>{{$d->nama_gedung}} <br/><sup>{{$d->alamat}}</sup></td>
                              <td>{{$d->alamat_mhs}} <br/><!-- <sup>{{$d->alamat}}</sup> --></td>
                              <td align="center">
                              @if($d->validasi == "")
                                <Button class="btn btn-primary validate" id="validate" name="validate" data-id="{{$d->id_booking}}">
                                  <i class="fa fa-check" aria-hidden="true"></i>
                                </Button>
                                <Button class="btn btn-danger validate" id="delete" name="delete" data-id="{{$d->id_booking}}">
                                  <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </Button>
                              @else
                                <Button class="btn btn-danger validate" id="batal" name="batal" data-id="{{$d->id_booking}}">Batal</Button>
                              @endif
                              </td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>Users</th>
                              <th>Ruang Kamar</th>
                              <th>Gedung</th>
                              <th>Alamat</th>
                              <th></th>
                            </tr>
                            </tfoot>
                          </table>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
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
  $(document).ready(function(){
    $('.delete').click(function(){
      var bookingID = $(this).attr('data-id');
      // console.log(bookingID);
      if (bookingID) {
            jQuery.ajax({
                url: 'setpesanan/deletepesanan/'+bookingID,
                type: 'GET',
                dataType: 'json',
                beforeSend:function(){
                  return confirm('Are you sure??')
                },
                success:function(data)
                {
                    alert('Berhasil Dihapus..!!');
                    location.reload();
                }
            });
        }
    });

    $('.validate').click(function(){
      var bookingID = $(this).attr('data-id');
      console.log(bookingID);
      if (bookingID) 
      {
        jQuery.ajax({
          url: "setpesanan/validatepesanan/"+bookingID,
          type: "GET",
          dataType: "json",
          beforeSend:function()
          {
            return confirm("Apakah Anda sudah yakin?");
          },
          success:function(data)
          {
            alert('Data Berhasil Di Validasi!')
            location.reload()
          },
        });
      }
    });

    $('.batal').click(function(){
      var bookingID = $(this).attr('data-id')
      // alert(bookingID);
      if(bookingID)
      {
        jQuery.ajax({
          url: "setpesanan/batalvalidasi/"+bookingID,
          type: "GET",
          dataType: "json",
          beforeSend:function()
          {
            return confirm("Are you sure?");
          },
          success:function(data)
          {
            alert("Data berhasil dibatalkan!");
            location.reload();
          },
        });
      }
    });

  });
</script>
    <script>
    // function Close(item)
    // {
    //     $(item).fadeOut();
    // }
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
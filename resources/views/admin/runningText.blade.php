<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Ropeg | Running Text</title>
    @include('admin.assets.style')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    @include('admin.partial.navbar')

  <!-- Main Sidebar Container -->
    @include('admin.partial.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Running Text</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/adminDashboard">Home</a></li>
              <li class="breadcrumb-item active">Running Text</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if (session()->has('Add'))
    <div class="alert alert-success text-center mb-4" style="width: 50%; margin:auto;">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('Add')}}
    </div>
    @endif
    @if (session()->has('Edit'))
    <div class="alert alert-warning text-center mb-4" style="width: 50%; margin:auto;">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('Edit')}}
    </div>
    @endif
    @if (session()->has('Delete'))
    <div class="alert alert-danger text-center mb-4" style="width: 50%; margin:auto;" >
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('Delete')}}
    </div>
    @endif
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-3 mb-3">
                      <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#modal-tambah"><i class="fas fa-users mr-2"></i>Tambah Data</button>
                    </div>


                </div>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Running Text</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($listRuntext as $lr )
                    <tr>
                        <td>{{$lr->id }}</td>
                        <td>{{$lr->isiText}}</td>
                        <td class="text-center py-0 align-middle">
                        <input type="checkbox" checked data-toggle="toggle" data-size="sm" data-onstyle="success" id="status" title="Status">
                        <div class="btn-group btn-group-sm ml-3">
                            <a href="{{ url('editRuntext',$lr->id) }}" class="btn btn-warning"><i class="fas fa-user-edit" title="Edit"></i></a>
                            <a href="" class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus"><i class="fas fa-trash" title="Hapus"></i></a>
                        </div>
                        </td>
                    </tr>
                    <!-- modal hapus -->
                    <div class="modal fade" id="modal-hapus">
                        <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Hapus</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <p>Apakah Anda Yakin Ingin Menghapus data ini?</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                            <a class="btn btn-danger" href="{{ url('deleteRuntext',$lr->id)}}">Ya</a>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>


      <!-- modal tambah -->
      <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- /.modal form body -->
              <form action="{{ url('/tambahRuntext') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Running Text</label>
                    <input type="text" class="form-control" name="isiText" placeholder="Text">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success swalTambah">Tambah</button>
                  </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->




      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('admin.partial.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('admin.assets.jsRuntext')
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalTambah').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Data berhasil ditambahkan'
      })
    });
    $('.swalEdit').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Data berhasil diedit'
      })
    });
    $('.swalHapus').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Data berhasil dihapus'
      })
    });

    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        icon: 'info',
        title: 'Data sudah ada'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        icon: 'error',
        title: 'Proses Gagal'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        icon: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  });

</script>

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()
  })
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

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

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
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>

<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js">
</script>

</body>
</html>

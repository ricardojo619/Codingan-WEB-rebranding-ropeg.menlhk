<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Ropeg | Berita</title>

 @include('admin.assets.style')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  @include('admin.partial.navbar')

  @include('admin.partial.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-3 mb-3">
                      <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#modal-tambah"><i class="fas fa-users mr-2"></i>Tambah Data</button>      
                    </div>
                </div>
                
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Berita</th>
                    <th>View</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($listBerita as $lb )
                    <tr>
                      <td>{{ $lb->id }}</td>
                      <td>{{ $lb->judulBerita }}</td>
                      <td>{{ $lb->views }}</td>
                      <td>{{ $lb->date }}</td>
                      <td>1</td>
                      <td class="text-center py-0 align-middle">
                        <input type="checkbox" checked data-toggle="toggle" data-size="sm" data-onstyle="success" id="status" title="Status">
                        <div class="btn-group btn-group-sm ml-3">
                          <a href="{{ url('editBerita',$lb->id) }}" class="btn btn-warning"><i class="fas fa-user-edit" title="Edit"></i></a>
                          <a href="" class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus"><i class="fas fa-trash" title="Hapus"></i></a>
                        </div>
                      </td>
                    </tr>
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
              <button type="button" class="btn btn-danger swalHapus">Ya</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <!-- modal tambah -->
      @include('admin.partial.crud.tambahBerita')
      </div>
      <!-- /.modal -->




      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.assets.js')

</script>
</body>
</html>
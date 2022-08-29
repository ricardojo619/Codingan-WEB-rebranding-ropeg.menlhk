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

  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit Berita</h3>
              </div>

              <form action="{{ url('/editIsiBerita')}}/{{ $berita->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul Berita</label>
                    <textarea id="judulBerita" class="form-control" rows="3" name="judulBerita"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="thumbnail">Thumbnail</label><br>
                    <div class="input-group mt-3">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
                        <label class="custom-file-label" for="thumbnail">Pilih file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Jenis Berita</label>
                      <select class="form-control" id="jenisBerita" name="jenisBerita">
                        <option value="Pengumuman">Pengumuman</option>
                        <option value="Event">Event</option>
                        <option value="Info Lain">Info Lain</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Isi Berita</label>
                      <textarea id="summernote" name="isiBerita">
                        
                      </textarea>
                  </div>                
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-warning swalEdit">Simpan</button>
                </div>
                <!-- /.card-body -->
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </section>
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

{{-- <form role="form">
  @csrf
  <div class="card-body">
    <div class="form-group">
      <label for="judul">Judul Berita</label>
      <textarea id="judulBerita" class="form-control" rows="3" name="judulBerita"></textarea>
    </div>
    <div class="form-group">
      <label for="thumbnail">Thumbnail</label><br>
      <div class="input-group mt-3">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
          <label class="custom-file-label" for="thumbnail">Pilih file</label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label>Jenis Berita</label>
        <select class="form-control" id="jenisBerita" name="jenisBerita">
          <option value="Pengumuman">Pengumuman</option>
          <option value="Event">Event</option>
          <option value="Info Lain">Info Lain</option>
        </select>
    </div>
    <div class="form-group">
      <label>Isi Berita</label>
        <textarea id="summernote" name="isiBerita">
          
        </textarea>
    </div>                
  </div>
  <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
    <button type="button" class="btn btn-warning swalEdit">Simpan</button>
  </div>
  <!-- /.card-body -->
</form> --}}

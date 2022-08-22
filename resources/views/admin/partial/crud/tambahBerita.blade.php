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
          <form action="{{ url('/tambahBerita') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="judul">Judul Berita</label>
                <textarea id="judul" class="form-control" rows="3" name="judulBerita" required></textarea>
              </div>
              <div class="form-group">
                <label for="thumbnail">Thumbnail</label><br>
                <div class="input-group mt-3">
                  <div class="custom-file">
                    <input type="file" name="thumbnail">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Jenis Berita</label>
                  <select class="form-control" name="jenisBerita" required>
                    <option value="Pengumuman">Pengumuman</option>
                    <option value="Event">Event</option>
                    <option value="Info Lain">Info Lain</option>
                  </select>
              </div>
              <div class="form-group">
                <label>Isi Berita</label>
                  <textarea id="summernote" name="isiBerita" required>
                  </textarea>
              </div>
            </div>
            <!-- /.card-body -->
          
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-success swalTambah">Tambah</button>
        </div>
      </div>
    </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
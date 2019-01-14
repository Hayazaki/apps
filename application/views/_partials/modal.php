<!-- Modal Edit-->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit</h4>
      </div>
      <div class="modal-body">
        <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal<span style="color:red;">*</span></label>
                  <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Masukan tanggal">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Serial Number<span style="color:red;">*</span></label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Contoh: KWC21270KX0">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mac Address<span style="color:red;">*</span></label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Contoh: B838617A7C8D">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Model AP</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Contoh: AIR-AP1832I-F-K9">
                </div>
                <div class="form-group">
                  <label>Kondisi</label>
                  <select class="form-control">
                    <option>-- Pilih --</option>
                    <option>BARU</option>
                    <option>BEKAS</option>
                    <option>RUSAK</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Keterangan</label>
                  <textarea class="form-control" rows="3" placeholder="Masukan keterangan disini..."></textarea>
                </div>
                <div class="form-group">
                  <p class="help-block">(<span style="color:red;">*</span>) Wajib diisi.</p>
                  <p>Pastikan semua telah terisi dengan benar sebelum menyimpan.</p>
                </div>
              </div>
              <!-- /.box-body -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" name="simpan" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Warning -->
<div class="modal modal-warning fade" id="modal-warning">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Warning Modal</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Hapus-->
<div class="modal modal-danger fade" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Apakah anda yakin ?</h4>
      </div>
      <div class="modal-body">
        <p><h4>Data yang dihapus tidak dapat kembali</h4></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tutup</button>
        <a id="btn-delete" class="btn btn-outline" href="#">Hapus</a>
      </div>
    </div>
  </div>
</div>

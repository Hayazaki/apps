<!-- Modal Edit Masuk-->
<div class="modal modal-primary fade" id="modal-masuk">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open('masuk/edit/'.$apmasuk['id']); ?>
          <div class="box-body">
            <div class="form-group">
              <label>Tanggal Masuk</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="tanggal" class="form-control" id="datepicker-edit" placeholder="YYYY-MM-DD">
              </div>
            </div>
            <div class="form-group">
              <label><span class="text-danger">*</span>Serial Number</label>
              <input type="text" class="form-control" placeholder="Contoh: KWC212xxxxx">
            </div>
            <div class="form-group">
              <label><span class="text-danger">*</span>Mac Address</label>
              <input type="text" class="form-control" placeholder="Contoh: B83861xxxxxx">
            </div>
            <div class="form-group">
              <label>Model AP</label>
              <input type="text" class="form-control" placeholder="Contoh: AIR-AP1832I-F-K9">
            </div>
            <div class="form-group">
              <label><span class="text-danger">*</span>Kondisi</label>
              <select class="form-control">
                <option>-- Pilih --</option>
                <option>BARU</option>
                <option>BEKAS</option>
                <option>RUSAK</option>
              </select>
            </div>
            <div class="form-group">
              <label>Keterangan</label>
              <textarea class="form-control" rows="3" placeholder="Masukan keterangan disini..."></textarea>
            </div>
            <div class="form-group">
              <p class="help-block">(<span class="text-danger">*</span>) Wajib diisi.</p>
              <p>Pastikan semua telah terisi dengan benar sebelum menyimpan.</p>
            </div>
          </div>
        <?php echo form_close(); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
        <button type="button" name="simpan" class="btn btn-success">Simpan</button>
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

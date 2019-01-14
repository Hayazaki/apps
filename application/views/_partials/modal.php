<!-- Modal Edit Masuk-->
<div class="modal fade" id="modal-masuk">
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
              <label>Tanggal Masuk<span style="color:red;">*</span></label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="tanggal" class="form-control" id="datepicker" placeholder="YYYY-MM-DD">
              </div>
            </div>
            <div class="form-group">
              <label>Serial Number<span style="color:red;">*</span></label>
              <input type="text" class="form-control" placeholder="Contoh: KWC21270KX0">
            </div>
            <div class="form-group">
              <label>Mac Address<span style="color:red;">*</span></label>
              <input type="text" class="form-control" placeholder="Contoh: B838617A7C8D">
            </div>
            <div class="form-group">
              <label>Model AP</label>
              <input type="text" class="form-control" placeholder="Contoh: AIR-AP1832I-F-K9">
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
              <label>Keterangan</label>
              <textarea class="form-control" rows="3" placeholder="Masukan keterangan disini..."></textarea>
            </div>
            <div class="form-group">
              <p class="help-block">(<span style="color:red;">*</span>) Wajib diisi.</p>
              <p>Pastikan semua telah terisi dengan benar sebelum menyimpan.</p>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
        <button type="button" name="simpan" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Stock-->
<div class="modal fade" id="modal-stock">
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
              <label>Serial Number<span style="color:red;">*</span></label>
              <input type="text" class="form-control" placeholder="Contoh: KWC21270KX0">
            </div>
            <div class="form-group">
              <label>Mac Address<span style="color:red;">*</span></label>
              <input type="text" class="form-control" placeholder="Contoh: B838617A7C8D">
            </div>
            <div class="form-group">
              <label>Model AP</label>
              <input type="text" class="form-control" placeholder="Contoh: AIR-AP1832I-F-K9">
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
              <label>Keterangan</label>
              <textarea class="form-control" rows="3" placeholder="Masukan keterangan disini..."></textarea>
            </div>
            <div class="form-group">
              <p class="help-block">(<span style="color:red;">*</span>) Wajib diisi.</p>
              <p>Pastikan semua telah terisi dengan benar sebelum menyimpan.</p>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
        <button type="button" name="simpan" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Keluar -->
<div class="modal fade" id="modal-edit-keluar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Stock Keluar</h4>
      </div>
      <div class="modal-body">
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label>Tanggal Keluar<span style="color:red;">*</span></label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="tanggal" class="form-control" id="datepicker" placeholder="YYYY-MM-DD">
              </div>
            </div>
            <div class="form-group">
              <label>Serial Number<span style="color:red;">*</span></label>
              <input type="text" name="serialnumber" class="form-control" placeholder="Contoh: KWC21270KX0">
            </div>
            <div class="form-group">
              <label>Mac Address<span style="color:red;">*</span></label>
              <input type="text" name="macaddress" class="form-control" placeholder="Contoh: B838617A7C8D">
            </div>
            <div class="form-group">
              <label>Model AP</label>
              <input type="text" name="modelap" class="form-control" placeholder="Contoh: AIR-AP1832I-F-K9">
            </div>
            <div class="form-group">
              <label>Petugas<span style="color:red;">*</span></label>
              <input type="text" name="petugas" class="form-control" placeholder="Contoh: Kopegtel, Raih Bintang">
            </div>
            <div class="form-group">
              <label>Keperluan</label>
              <textarea class="form-control" rows="3" placeholder="Beri alasan dalam mengeluarkan barang..."></textarea>
            </div>
            <div class="form-group">
              <p class="help-block">(<span style="color:red;">*</span>) Wajib diisi.</p>
              <p>Pastikan semua telah terisi dengan benar sebelum menyimpan.</p>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Keluarkan Stock -->
<div class="modal fade" id="modal-keluarkan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Keluarkan Stock</h4>
      </div>
      <div class="modal-body">
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label>Tanggal Keluar<span style="color:red;">*</span></label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="tanggal" class="form-control" id="datepicker" placeholder="YYYY-MM-DD">
              </div>
            </div>
            <div class="form-group">
              <label>Serial Number<span style="color:red;">*</span></label>
              <input type="text" name="serialnumber" class="form-control" placeholder="Contoh: KWC21270KX0">
            </div>
            <div class="form-group">
              <label>Mac Address<span style="color:red;">*</span></label>
              <input type="text" name="macaddress" class="form-control" placeholder="Contoh: B838617A7C8D">
            </div>
            <div class="form-group">
              <label>Model AP</label>
              <input type="text" name="modelap" class="form-control" placeholder="Contoh: AIR-AP1832I-F-K9">
            </div>
            <div class="form-group">
              <label>Petugas<span style="color:red;">*</span></label>
              <input type="text" name="petugas" class="form-control" placeholder="Contoh: Kopegtel, Raih Bintang">
            </div>
            <div class="form-group">
              <label>Keperluan</label>
              <textarea class="form-control" rows="3" placeholder="Beri alasan dalam mengeluarkan barang..."></textarea>
            </div>
            <div class="form-group">
              <p class="help-block">(<span style="color:red;">*</span>) Wajib diisi.</p>
              <p>Pastikan semua telah terisi dengan benar sebelum menyimpan.</p>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-warning">Simpan</button>
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

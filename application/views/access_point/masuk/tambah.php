<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo $title; ?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo site_url('dashboard/index'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Access Point</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-6">
    <div class="box box-success">
      <div class="box-header">
        <h3 class="box-title"><?php echo $subtitle; ?></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <?php echo form_open('ap/masuk/tambah'); ?>
          <div class="box-body">
            <div class="form-group">
              <label>Tanggal Masuk<span style="color:red;">*</span></label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="tanggal_masuk" value="<?php echo $this->input->post('tanggal_masuk'); ?>" class="form-control" id="datepicker" />
                <span><?php echo form_error('tanggal_masuk'); ?></span>
              </div>
            </div>
            <div class="form-group">
              <label>Serial Number<span style="color:red;">*</span></label>
              <input type="text" name="serial_number" value="<?php echo $this->input->post('serial_number'); ?>" class="form-control" placeholder="Contoh: KWC21270KX0" />
              <span><?php echo form_error('serial_number'); ?></span>
            </div>
            <div class="form-group">
              <label>Mac Address<span style="color:red;">*</span></label>
              <input type="text" name="mac_address" value="<?php echo $this->input->post('mac_address'); ?>" class="form-control" placeholder="Contoh: B838617A7C8D" />
              <span><?php echo form_error('mac_address'); ?></span>
            </div>
            <div class="form-group">
              <label>Model AP</label>
              <input type="text" name="jenis_ap" value="<?php echo $this->input->post('jenis_ap'); ?>" class="form-control" placeholder="Contoh: AIR-AP1832I-F-K9" />
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label>Kondisi<span style="color:red;">*</span></label>
              <select name="kondisi" class="form-control">
                <option value="">-- Pilih --</option>
                <?php
								$kondisi_values = array(
									'Normal'=>'BARU',
									'Bekas'=>'BEKAS',
									'Rusak'=>'RUSAK',
								);
								foreach($kondisi_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('kondisi')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								}
								?>
              </select>
            </div>
            </div>
            <div class="col-md-8">
            <div class="form-group">
              <label for="keterangan" class="control-label">Keterangan</label>
              <input type="text" name="keterangan" value="<?php echo $this->input->post('keterangan'); ?>" class="form-control" id="keterangan" />
            </div>
            </div>
            <div class="col-md-12">
            <div class="form-group">
              <p class="help-block">(<span style="color:red;">*</span>) Wajib diisi.</p>
              <p>Pastikan semua telah terisi dengan benar sebelum menyimpan.</p>
            </div>
            </div>
          </div>
          <div class="box-footer">
                <button class="btn btn-default">Kembali</button>
                <button type="submit" class="btn btn-primary pull-right">Simpan</button>
          </div>
        <?php echo form_close(); ?>
      </div>
    </div>
      </div>
    </div>
  </section>
</div>
<!-- /.content-wrapper -->

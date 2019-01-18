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
      <div class="col-md-12">
        <div class="box box-success">
          <div class="box-header">
            <h3 class="box-title"><?php echo $subtitle; ?></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <?php echo form_open('ap/masuk/tambah'); ?>
              <?php if($this->session->flashdata('success_input')) { ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>Sukses !</h4><?= $this->session->flashdata('success_input') ?>
              </div><?php } ?>
              <?php if($this->session->flashdata('gagal_input')) { ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Gagal !</h4>
                <?= $this->session->flashdata('gagal_input') ?>
              </div><?php } ?>
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Tanggal Masuk</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="tanggal_masuk" value="<?php echo $this->input->post('tanggal_masuk'); ?>" class="form-control" id="datepicker" />
                  </div>
                </div>
                </div>
                <div class="col-md-8">
                <div class="form-group">
                  <label>Serial Number<span class="text-danger">*</span></label>
                  <input type="text" name="serial_number" value="<?php echo $this->input->post('serial_number'); ?>" class="form-control" placeholder="Contoh: KWC21270KX0" />
                  <span class="text-danger"><?php echo form_error('serial_number'); ?></span>
                </div>
                </div>
                <div class="col-md-8">
                <div class="form-group">
                  <label>Mac Address<span class="text-danger">*</span></label>
                  <input type="text" name="mac_address" value="<?php echo $this->input->post('mac_address'); ?>" class="form-control" placeholder="Contoh: B838617A7C8D" />
                  <span class"text-danger"><?php echo form_error('mac_address'); ?></span>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label>Model AP</label>
                  <input type="text" name="jenis_ap" value="<?php echo $this->input->post('jenis_ap'); ?>" class="form-control" placeholder="Contoh: AIR-AP1832I-F-K9" />
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label>Kondisi<span class="text-danger">*</span></label>
                  <select name="kondisi" class="form-control">
                    <option value="">-- Pilih --</option>
                    <?php
    								$kondisi_values = array(
    									'Baru'=>'BARU',
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
                  <span class"text-danger"><?php echo form_error('jenis_ap'); ?></span>
                </div>
                </div>
                <div class="col-md-12">
                <div class="form-group">
                  <label for="keterangan" class="control-label">Keterangan</label>
                  <textarea type="text" name="keterangan" class="form-control" id="keterangan"><?php echo $this->input->post('keterangan'); ?></textarea>
                </div>
                </div>
                <div class="col-md-12">
                <div class="form-group">
                  <p class="help-block">(<span class="text-danger">*</span>) Wajib diisi.</p>
                  <p>*Pastikan semua telah terisi dengan benar sebelum menyimpan.</p>
                </div>
                </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-default" onclick="window.location='<?php echo site_url('ap/masuk/index'); ?>';">Kembali</a>
                <button type="submit" class="btn btn-success pull-right">Simpan</button>
              </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- /.content-wrapper -->

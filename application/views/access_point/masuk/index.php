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
    <?php if($this->session->flashdata('success_hapus')) { ?>
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-check"></i>Berhasil !</h4><?= $this->session->flashdata('success_hapus') ?>
    </div><?php } ?>
    <div class="box box-success">
      <div class="box-header">
        <h3 class="box-title"><?php echo $subtitle; ?></h3>
      </div>
      <div class="box-header">
        <div class="btn-group">
          <a class="btn btn-success" onclick="window.location='<?php echo site_url('ap/masuk/tambah'); ?>'; ">Tambah Stock</a>
          <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo site_url('ap/masuk/tambah'); ?>"><span class="fa fa-plus"></span>Per-Unit</a></li>
            <li class="disabled"><a href="#"><span class="fa fa-file-text"></span>Import .txt (vBeta)</a></li>
            <li class="disabled"><a href="#"><span class="fa fa-file-excel-o"></span>Import .xlsx (vBeta)</a></li>
            <li class="disabled"><a href="#"><span class="fa fa-file"></span>Import .csv (vBeta)</a></li>
          </ul>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No.</th>
            <th>Tanggal Masuk</th>
            <th>Serial Number</th>
            <th>Mac Address</th>
            <th>Model</th>
            <th>Kondisi</th>
            <th>Keterangan</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          <?php
          $no = 1;
          foreach($apmasuk as $t){ ?>
          <tr>
            <td><?php echo $no++ ?>.</td>
            <td><?php echo date("d/m/Y", strtotime($t['tanggal_masuk'])); ?></td>
            <td><?php echo $t['serial_number']; ?></td>
            <td><?php echo $t['mac_address']; ?></td>
            <td><?php echo $t['jenis_ap']; ?></td>
            <td><?php echo $t['kondisi']; ?></td>
            <td><?php echo $t['keterangan']; ?></td>
            <td>
              <a type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalEditMasuk">
                <span class="fa fa-pencil"></span> Edit
              </a>
              <a onclick="deleteConfirm('<?php echo site_url('ap/masuk/remove/'.$t['id']); ?>')" href="#!" class="btn btn-danger btn-xs">
                <span class="fa fa-trash"></span> Hapus
              </a>
            </td>
          </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
<!-- /.content-wrapper -->

<!-- Modal Edit Masuk-->
<div class="modal modal-default fade" id="modalEditMasuk">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Stock Barang Masuk</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open('masuk/edit/'); ?>
          <div class="box-body">
            <div class="form-group">
              <label>Tanggal Masuk</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="tanggal" class="form-control" id="datepicker" placeholder="YYYY-MM-DD">
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

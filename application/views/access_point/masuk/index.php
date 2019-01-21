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
    <!--ALERT FLASHDATA-->
    <?php if($this->session->flashdata('success_hapus')) { ?>
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-check"></i>Berhasil !</h4><?= $this->session->flashdata('success_hapus') ?>
    </div><?php } ?>
    <?php if($this->session->flashdata('success_edit')) { ?>
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-check"></i>Berhasil !</h4><?= $this->session->flashdata('success_edit') ?>
    </div><?php } ?>
    <?php if($this->session->flashdata('gagal_edit')) { ?>
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-ban"></i> Gagal !</h4><?= $this->session->flashdata('gagal_edit') ?>
      <!--END ALERT FLASHDATA-->
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
              <a type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalEditMasuk<?php echo $t['id']; ?>">
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
<?php foreach($apmasuk as $t):
  $id          = $t['id'];
  $tnggl_masuk = $t['tanggal_masuk'];
  $sn          = $t['serial_number'];
  $mac         = $t['mac_address'];
  $model       = $t['jenis_ap'];
  $kon         = $t['kondisi'];
  $ket         = $t['keterangan'];
  ?>
<div class="modal modal-default fade" id="modalEditMasuk<?php echo $id; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Data AP Masuk</h4>
      </div>
      <div class="modal-body">
        <form role="form" action="index.html" method="post">
          <div class="box-body">
            <div class="form-group">
              <label>Tanggal Masuk</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="tanggal_masuk" value="<?php echo $tnggl_masuk; ?>" class="form-control" id="datepicker" placeholder="YYYY-MM-DD"/>
              </div>
            </div>
            <div class="form-group">
              <label><span class="text-danger">*</span>Serial Number</label>
              <input type="text" name="serial_number" value="<?php echo $sn; ?>" class="form-control" placeholder="Contoh: KWC212xxxxx"/>
            </div>
            <div class="form-group">
              <label><span class="text-danger">*</span>Mac Address</label>
              <input type="text" name="mac_address" value="<?php echo $mac; ?>" class="form-control" placeholder="Contoh: B83861xxxxxx"/>
            </div>
            <div class="form-group">
              <label>Model AP</label>
              <input type="text" name="jenis_ap" value="<?php echo $model; ?>" class="form-control" placeholder="Contoh: AIR-AP1832I-F-K9"/>
            </div>
            <div class="form-group">
              <label><span class="text-danger">*</span>Kondisi</label>
              <select class="form-control">
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
            </div>
            <div class="form-group">
              <label>Keterangan</label>
              <textarea class="form-control" name="keterangan" rows="3" placeholder="Masukan keterangan disini..."><?php echo $ket; ?></textarea>
            </div>
            <div class="form-group">
              <p class="help-block">(<span class="text-danger">*</span>) Wajib diisi.</p>
              <p>Pastikan semua telah terisi dengan benar sebelum menyimpan.</p>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-success">
          <i class="fa fa-check"></i> Simpan
        </button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

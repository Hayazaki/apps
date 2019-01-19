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
            <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-masuk">
                <span class="fa fa-pencil"></span> Edit
              </button>
              <a onclick="deleteConfirm('<?php echo site_url('ap/masuk/remove/'.$t['id']); ?>')"
                href="#!" class="btn btn-danger btn-xs text-danger"><span class="fa fa-trash"></span> Hapus</a>
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

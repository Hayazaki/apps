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
      <!--END ALERT FLASHDATA-->
    <div class="box box-success">
      <div class="box-header">
        <h3 class="box-title"><?php echo $subtitle; ?></h3>
      </div>
      <div class="box-header">
        <div class="btn-group">
          <a class="btn btn-success" onclick="window.location='<?php echo site_url('ap/masuk/tambah'); ?>' ">Tambah Stock</a>
          <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo site_url('ap/masuk/tambah'); ?>"><span class="fa fa-plus"></span>Per-Unit</a></li>
            <li class="disabled"><a href="#"><span class="fa fa-file-text"></span>Import .txt (Update Selanjutnya)</a></li>
            <li class="disabled"><a href="#"><span class="fa fa-file-excel-o"></span>Import .xlsx (Update Selanjutnya)</a></li>
            <li class="disabled"><a href="#"><span class="fa fa-file"></span>Import .csv (Update Selanjutnya)</a></li>
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
          foreach($all_apmasuk as $table){ ?>
          <tr>
            <td><?php echo $no++ ?>.</td>
            <td><?php echo date("d/m/Y", strtotime($table['tanggal_masuk'])); ?></td>
            <td><?php echo $table['serial_number']; ?></td>
            <td><?php echo $table['mac_address']; ?></td>
            <td><?php echo $table['jenis_ap']; ?></td>
            <td><?php echo $table['kondisi']; ?></td>
            <td><?php echo $table['keterangan']; ?></td>
            <td>
              <a type="button" class="btn btn-primary btn-xs" onclick="window.location='<?php echo site_url('ap/masuk/edit/'.$table['id']); ?>' ">
                <span class="fa fa-edit"></span> Edit
              </a>
              <a onclick="deleteConfirm('<?php echo site_url('ap/masuk/remove/'.$table['id']); ?>')" href="#!" class="btn btn-danger btn-xs">
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

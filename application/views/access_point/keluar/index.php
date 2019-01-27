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
    <div class="box box-danger">
      <div class="box-header">
        <h3 class="box-title"><?php echo $subtitle; ?></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th class="">No.</th>
            <th>Tanggal Keluar</th>
            <th>Serial Number</th>
            <th>Mac Address</th>
            <th>Model</th>
            <th>Kondisi</th>
            <th>Petugas</th>
            <th>Keperluan</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          <?php
          $no = 1;
          foreach ($apkeluar as $keluar){ ?>
          <tr>
            <td><?php echo $no++ ?>.</td>
            <td><?php echo date("d/m/Y", strtotime($keluar['tanggal_keluar'])); ?></td>
            <td><?php echo $keluar['serial_number']; ?></td>
            <td><?php echo $keluar['mac_address']; ?></td>
            <td><?php echo $keluar['jenis_ap']; ?></td>
            <td><?php echo $keluar['kondisi']; ?></td>
            <td><?php echo $keluar['petugas']; ?></td>
            <td><?php echo $keluar['keperluan']; ?></td>
            <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#">
                <span class="fa fa-pencil"></span> Edit
                </button>
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

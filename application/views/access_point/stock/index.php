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
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title"><?php echo $subtitle; ?></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th class="">No.</th>
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
          foreach ($stockap as $stock){ ?>
          <tr>
            <td><?php echo $no++ ?>.</td>
            <td><?php echo $stock['serial_number']; ?></td>
            <td><?php echo $stock['mac_address']; ?></td>
            <td><?php echo $stock['jenis_ap']; ?></td>
            <td><?php echo $stock['kondisi']; ?></td>
            <td><?php echo $stock['keterangan']; ?></td>
            <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-stock">
                <span class="fa fa-pencil"></span> Edit
              </button>
              <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-keluarkan">
                  <span class="fa fa-mail-forward"></span> Keluarkan
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

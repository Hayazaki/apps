<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo $title; ?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Access Point</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box box-success">
      <div class="box-header">
        <h3 class="box-title"><?php echo $subtitle; ?></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="btn-group">
          <button type="button" class="btn btn-success">Tambah Stock</button>
          <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><span class="fa fa-plus"></span>Per-Unit</a></li>
            <li class="disabled"><a href="#"><span class="fa fa-file-text"></span>Import .txt (vBeta)</a></li>
            <li class="disabled"><a href="#"><span class="fa  fa-file-excel-o"></span>Import .xlsx (vBeta)</a></li>
            <li class="disabled"><a href="#"><span class="fa fa-file"></span>Import .csv (vBeta)</a></li>
          </ul>
        </div>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th class="">No.</th>
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
            <td><?php echo $t['tanggal_masuk']; ?></td>
            <td><?php echo $t['serial_number']; ?></td>
            <td><?php echo $t['mac_address']; ?></td>
            <td><?php echo $t['jenis_ap']; ?></td>
            <td><?php echo $t['kondisi']; ?></td>
            <td><?php echo $t['keterangan']; ?></td>
            <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">
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

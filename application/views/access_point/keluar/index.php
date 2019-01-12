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
    <div class="box box-danger">
      <div class="box-header">
        <h3 class="box-title">Data Keluar</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <?php $no=1 ?>
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
          <tr>
            <td>1</td>
            <td>21-01-2019</td>
            <td>KWC224B1330</td>
            <td>00:B2:70:55:31</td>
            <td>AIR-AP180C920-C-K9</td>
            <td>Baru</td>
            <td>WITEL</td>
            <td>Instalasi Pelanggan</td>
            <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default">
                Edit
              </button>
              <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger">
                  Hapus
                </button>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- Modal Edit Stock -->
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit</h4>
          </div>
          <div class="modal-body">
            <p>Edit Stock</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Keluarkan Stock -->
    <div class="modal modal-danger fade" id="modal-danger">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Keluarkan Stock</h4>
          </div>
          <div class="modal-body">
            <p><h4>Apakah anda yakin ?</h4></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tutup</button>
            <button type="submit" name="keluar" class="btn btn-outline">Ya, Lanjutkan</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- /.content-wrapper -->

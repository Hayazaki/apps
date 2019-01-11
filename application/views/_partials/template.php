<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- meta.php -->
<?php echo $meta ?>

</head>
<body class="hold-transition skin-red sidebar-mini fixed">
<div class="wrapper">

  <header class="main-header">

<!-- main_header.php -->
<?php echo $main_header ?>

  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

<!-- main_sidebar.php -->
<?php echo $main_sidebar ?>

  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

<!-- content.php -->
<?php echo $content ?>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->

<!-- footer.php -->
<?php echo $footer ?>

  <!-- /.footer -->

  <!-- Control Sidebar -->

<!-- control_sidebar.php -->
<?php echo $control_sidebar ?>

  <!-- end control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- javascript -->

<!-- isi js.php -->
<?php echo $js ?>

<!-- /.javascript -->
</body>
</html>

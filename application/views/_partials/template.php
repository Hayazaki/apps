<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <!-- meta.php -->
  <?php // meta.php
  if (isset($meta))
  echo $meta;
  ?>
</head>
<body class="hold-transition skin-red fixed sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <?php //main_header.php
    if (isset($main_header))
    echo $main_header;
    ?>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <?php // main_sidebar.php
    if (isset($main_sidebar))
    echo $main_sidebar;
    ?>
  </aside>

  <!-- content -->
    <?php // content from view
    if (isset($content))
    echo $content;
    ?>
  <!-- /.content -->
  <?php // Modal from view
  if (isset($modal))
  echo $modal;
  ?>

  <!-- Control Sidebar -->
    <?php
    if (isset($control_sidebar))
    echo $control_sidebar;
    ?>
  <!-- end control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
    <!-- footer -->
    <?php // footer.php
    if (isset($footer))
    echo $footer;
    ?>
</div>
  <!-- /.footer -->
<!-- ./wrapper -->
  <!-- javascript -->
    <?php // js.php
    if (isset($js))
    echo $js
    ?>
  <!-- /.javascript -->
</body>
</html>

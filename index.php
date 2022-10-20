<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if(!$_SESSION['nama']){
  header('Location: ../index.php?session=expired');
}
include('header.php');?>
<?php include('../conf/config.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include('preloader.php');?>

  <!-- Navbar -->
  <?php include('navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   <?php include('logo.php');?>

    <!-- Sidebar -->
    <?php include('sidebar.php');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include('content_header.php');?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php 
    if (isset($_GET['page'])){
    if ($_GET['page']=='dashboard'){
      include('dashboard.php');
    }
    else if($_GET['page']=='surat-masuk'){
      include('surat_masuk.php');
    }
    else if($_GET['page']=='edit-srt-msk'){
      include('edit/edit_srt_msk.php');
    }
    else if($_GET['page']=='surat-keluar'){
      include('surat_keluar.php');
    }
    else if($_GET['page']=='edit-srt-klr'){
      include('edit/edit_srt_klr.php');
    }
    else if($_GET['page']=='ref-kode-adm'){
      include('ref_kode_adm.php');
    }
    else if($_GET['page']=='ref-kode-usr'){
      include('ref_kode_usr.php');
    } 
    else if($_GET['page']=='surat-masuk-harian-admin'){
      include('surat_msk_harian_adm.php');
    }
    else if($_GET['page']=='surat-masuk-bulanan-admin'){
      include('surat_msk_bulanan_adm.php');
    }
    else if($_GET['page']=='surat-masuk-tahunan-admin'){
      include('surat_msk_tahunan_adm.php');
    }
    else if($_GET['page']=='surat-keluar-harian-admin'){
      include('surat_klr_harian_adm.php');
    }
    else if($_GET['page']=='surat-keluar-bulanan-admin'){
      include('surat_klr_bulanan_adm.php');
    }
    else if($_GET['page']=='surat-keluar-tahunan-admin'){
      include('surat_klr_tahunan_adm.php');
    }
    else if($_GET['page']=='surat-masuk-harian-user'){
      include('surat_msk_harian_usr.php');
    }
    else if($_GET['page']=='surat-masuk-bulanan-user'){
      include('surat_msk_bulanan_usr.php');
    }
    else if($_GET['page']=='surat-masuk-tahunan-user'){
      include('surat_msk_tahunan_usr.php');
    }
    else if($_GET['page']=='surat-keluar-harian-user'){
      include('surat_klr_harian_usr.php');
    }
    else if($_GET['page']=='surat-keluar-bulanan-user'){
      include('surat_klr_bulanan_usr.php');
    }
    else if($_GET['page']=='surat-keluar-tahunan-user'){
      include('surat_klr_tahunan_usr.php');
    }
    else if($_GET['page']=='buat-format-surat'){
      include('buat_format_srt.php');
    }
    else if($_GET['page']=='surat-masuk-user'){
      include('surat_masuk_user.php');
    }
    else if($_GET['page']=='surat-keluar-user'){
      include('surat_keluar_user.php');
    }
    else if($_GET['page']=='data-admin'){
      include('data_admin.php');
    }
    else if($_GET['page']=='edit-user'){
      include('edit/edit_user.php');
    }
      else
      include('not_found.php');
    }
    else{
      include('dashboard.php');
    }?>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
    <?php include('footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
</html>

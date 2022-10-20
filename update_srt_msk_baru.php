<?php
include ('../../conf/config.php');
$id = $_POST['id'];
$nmr_surat = $_POST['nmr_surat'];
$perihal = $_POST['perihal'];
$alamat_tujuan = $_POST['alamat_tujuan'];
$tgl_surat = $_POST['tgl_surat'];

$query = mysqli_query($koneksi, "UPDATE tb_surat_masuk_baru SET nmr_surat= '$nmr_surat', perihal= '$perihal', 
alamat_tujuan=' $alamat_tujuan', tgl_surat= '$tgl_surat' WHERE id='$id'");
header('Location: ../index.php?page=buat-surat-masuk');
?>
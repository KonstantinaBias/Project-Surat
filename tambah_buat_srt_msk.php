<?php
include ('../../conf/config.php');

$nmr_surat = $_GET['nmr_surat'];
$kode_surat = $_GET['kode_surat'];
$perihal = $_GET['perihal'];
$alamat_tujuan = $_GET['alamat_tujuan'];
$tgl_surat = $_GET['tgl_surat'];

$query = mysqli_query($koneksi, "INSERT INTO tb_surat_masuk_baru(id,nmr_surat,perihal,alamat_tujuan,tgl_surat)
VALUES('', '$nmr_surat', '$perihal', '$alamat_tujuan', '$tgl_surat')");

header('Location: ../index.php?page=buat-surat-masuk');
?>
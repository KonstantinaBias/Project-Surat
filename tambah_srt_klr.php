<?php
include ('../../conf/config.php');

$tujuan_surat = $_GET['tujuan_surat'];
$nmr_surat = $_GET['nmr_surat'];
$kode_surat = $_GET['kode_surat'];
$tgl_surat = $_GET['tgl_surat'];
$perihal = $_GET['perihal'];
$dokumen = $_GET['dokumen'];
$nama_file = $_FILES['dokumen']['name'];
//echo $nama_file;

$file_temp = $_FILES['dokumen']['tmp_name'];
move_uploaded_file($file_temp, '../surat/'.$nama_file);

$query = mysqli_query($koneksi, "INSERT INTO tb_surat_keluar(id,tujuan_surat,nmr_surat,kode_surat,tgl_surat, perihal, dokumen)
VALUES('', '$tujuan_surat', '$nmr_surat', '$kode_surat', '$tgl_surat', '$perihal', '$dokumen')");

header('Location: ../index.php?page=surat-keluar');
?>
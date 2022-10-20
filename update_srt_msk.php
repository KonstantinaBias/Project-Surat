<?php
include ('../../conf/config.php');
$id = $_POST['id'];
$asal_surat = $_POST['asal_surat'];
$nmr_surat = $_POST['nmr_surat'];
$kode_surat = $_POST['kode_surat'];
$tgl_surat = $_POST['tgl_surat'];
$perihal = $_POST['perihal'];

$nama_file = $_FILES['dokumen']['name'];
//echo $nama_file;

$file_temp = $_FILES['dokumen']['tmp_name'];
move_uploaded_file($file_temp, '../surat/'.$nama_file);
$query = mysqli_query($koneksi, "UPDATE tb_surat_masuk SET asal_surat= '$asal_surat', nmr_surat= '$nmr_surat', kode_surat=' $kode_surat', 
tgl_surat= '$tgl_surat', perihal='$perihal', dokumen='$nama_file' WHERE id='$id'");
header('Location: ../index.php?page=surat-masuk');
?>
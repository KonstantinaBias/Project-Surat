<?php
include('../../conf/config.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM tb_surat_keluar WHERE id='$id'");
header('Location: ../index.php?page=surat-keluar');

?>
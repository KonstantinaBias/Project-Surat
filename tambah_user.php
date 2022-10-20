<?php
include ('../../conf/config.php');

$nama = $_GET['nama'];
$username = $_GET['username'];
$password = $_GET['password'];
$level = $_GET['level'];

$query = mysqli_query($koneksi, "INSERT INTO pengguna(id,nama,username,password,level)
VALUES('', '$nama', '$username', '$password', '$level')");

header('Location: ../index.php?page=data-admin');
?>
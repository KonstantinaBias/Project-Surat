<?php 
include ('../../conf/config.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $stat = $db->prepare("select * tb_surat_masuk where id=?");
    $stat->bindParam(1, $id);
    $stat->execute();
    $data  = $stat->fetch();

    $file = 'surat/'.$data['filename']; 

    if(file_exists($file)){
        header('Content-Description: '. $data['description']);
        header('Content-Type: '. $data['type']);
        header('Content-Disposition: '. $data['disposition'].'; filename="'.basename($file).'"');
        header('Expires: '. $data['expires']);
        header('Cache-Control: '. $data['cache']);
        header('Pragma: '. $data['pragma']);
        header('Content-Lenght: '. filesize['$file']);
        readfile($file);
        exit;
    }
}
?>
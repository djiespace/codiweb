<?php
    ob_start();
    require_once ("../Config/config.php");
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $url = $_POST['url'];
    $isi = $_POST['isi'];
    if(isset($_POST)){
        $query =mysqli_query($db, "UPDATE tbl_page SET Nama_page='$nama', Url_page='$url', Isi_page='$isi'  WHERE Id_page='$id'");
        if($query){
            header("location:?page=data_page&pesan=sukses_update_page");
        }else {
            header("location:?page=data_page&pesan=gagal_update_page");
        }
    }
    // clean_dump($_POST);
    // clean_dump($_FILES);
    // clean_dump($query);
?>
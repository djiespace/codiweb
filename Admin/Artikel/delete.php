<?php
    require_once ("../Config/config.php");
    $id = $_GET['id'];
    $img_path = realpath('..') . '/Asset/img/artikel/';
    $query = mysqli_query($db, "SELECT * FROM tbl_artikel WHERE Id_artikel='$id'");
    $data = mysqli_fetch_array($query);
    // cek apakah file sebelumnya ada di direktori
    if(is_file(realpath('..') . '/Asset/img/artikel/'.$data['Img_artikel'])){
    unlink(realpath('..') . '/Asset/img/artikel/'.$data['Img_artikel']);
    }
    //proses ubah database
    $query =mysqli_query($db, "DELETE FROM tbl_artikel WHERE Id_artikel='$id'");
    if($query){
        header("location:?page=data_artikel&pesan=sukses_delete_artikel");
    }else {
        header("location:?page=data_artikel&pesan=gagal_delete_artikel");
    }
?>
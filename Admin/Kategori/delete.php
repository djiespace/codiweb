<?php
    require_once ("../Config/config.php");
    $id = $_GET['id'];
    $img_path = realpath('..') . '/Asset/img/kategori/';
    $query = mysqli_query($db, "SELECT * FROM tbl_kategori WHERE Id_kategori='$id'");
    $data = mysqli_fetch_array($query);
    // cek apakah file sebelumnya ada di direktori
    if(is_file(realpath('..') . '/Asset/img/kategori/'.$data['Img_kategori'])){
    unlink(realpath('..') . '/Asset/img/kategori/'.$data['Img_kategori']);
    }
    //proses ubah database
    $query =mysqli_query($db, "DELETE FROM tbl_kategori WHERE Id_kategori='$id'");
    if($query){
        header("location:?page=data_kategori&pesan=sukses_delete_kategori");
    }else {
        header("location:?page=data_kategori&pesan=gagal_delete_kategori");
    }
?>
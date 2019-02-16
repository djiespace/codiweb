<?php
    ob_start();
    require_once ("../Config/config.php");
    $id = $_GET['id'];
    if(isset($_POST['update_kategori'])){
        $kategori = $_POST['kategori'];
        $img = $_FILES['img']['tmp_name'];
        $img_name = time() . preg_replace("/\s+/", "-", $_FILES['img']['name']);
        $img_temporary = $_FILES['img']['tmp_name'];
        $img_path = realpath('..') . '/Asset/img/';
        $query =mysqli_query($db, "UPDATE tbl_kategori SET Nama_kategori='$kategori' Img_kategori='$img' WHERE Id_kategori='$id'");
        if($query){
            if (move_uploaded_file($img_temporary, $img_path . $img_name)) {
                echo '<script language="javascript" >alert("Kategori Berhasil diupdate."); document.location="?page=data_kategori&pesan=sukses";</script>';
            } else {
                echo '<script language="javascript" >alert("Gagal updateload"); document.location="?page=tambah_kategori&pesan=gagal";</script>';
            }
        }else{
            header("location:?page=data_kategori&pesan=gagal_update");
        }
    }
?>
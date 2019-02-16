<?php
    ob_start();
    require_once ("../Config/config.php");
    if($_POST){
        $kategori = $_POST['kategori'];
        $img = $_FILES['img']['tmp_name'];
        $img_name = time() . preg_replace("/\s+/", "-", $_FILES['img']['name']);
        $img_temporary = $_FILES['img']['tmp_name'];
        $img_path = realpath('..') . '/Asset/img/';
        $query = mysqli_query($db, "INSERT INTO tbl_kategori VALUES(NULL, '$kategori', '$img_name')");
        if($query){
            if (move_uploaded_file($img_temporary, $img_path . $img_name)) {
                echo '<script language="javascript" >alert("Kategori Berhasil ditambahkan."); document.location="?page=data_kategori&pesan=sukses";</script>';
            } else {
                echo '<script language="javascript" >alert("Gagal upload"); document.location="?page=tambah_kategori&pesan=gagal";</script>';
            }        
        }else{
            header("location:?page=data_kategori&pesan=gagal");
        }
    }

?>
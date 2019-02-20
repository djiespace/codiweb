<?php
    ob_start();
    require_once ("../Config/config.php");
    if(isset($_POST['tambah_kategori'])){
        $kategori = $_POST['kategori'];
        $img = $_FILES['img']['tmp_name'];
        $img_name = time() . preg_replace("/\s+/", "-", $_FILES['img']['name']);
        $img_temporary = $_FILES['img']['tmp_name'];
        $img_path = realpath('..') . '/Asset/img/kategori/';
        $query = mysqli_query($db, "INSERT INTO tbl_kategori(Id_kategori,Nama_kategori,Img_kategori) VALUES(NULL, '$kategori', '$img_name')");
        if($query){
            if (move_uploaded_file($img_temporary, $img_path . $img_name)) {
                header("location:?page=data_kategori&pesan=sukses_tambah_kategori");
            } else {
                header("location:?page=data_kategori&pesan=gagal_tambah_kategori");            }        
        }else{
            header("location:?page=data_kategori&pesan=gagal_upload_gambar");
        }
    }

?>
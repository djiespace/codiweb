<?php
ob_start();
include "../Config/config.php";
// clean_dump($_POST);
// die;
if (!empty($_POST) && !empty($_FILES)) {
    $judul = $_POST['judul'];
    $slug = $_POST['slug'];
    $kategori = $_POST['kategori'];
    $isi = $_POST['isi'];
    $img = $_FILES['img']['tmp_name'];
    $img_name = time() . preg_replace("/\s+/", "-", $_FILES['img']['name']);
    $img_temporary = $_FILES['img']['tmp_name'];
    $img_path = realpath('..') . '/Asset/img/';
    $query = mysqli_query($db, "INSERT INTO tbl_artikel(Judul_artikel,Slug_artikel,Id_kategori,Img_artikel,Isi_artikel) VALUES ('$judul', '$slug', '$kategori', '$img_name', '$isi')");
    if ($query) {
        if (move_uploaded_file($img_temporary, $img_path . $img_name)) {
            echo '<script language="javascript" >alert("Artikel Berhasil ditambahkan."); document.location="?page=data_artikel&pesan=sukses";</script>';
        } else {
            echo '<script language="javascript" >alert("Gagal upload"); document.location="?page=tambah_artikel&pesan=gagal";</script>';
        }
    } else {
        header("location:?page=data_artikel&pesan=gagal");
    }
}

<?php
ob_start();
include ("../Config/config.php");
// clean_dump($_POST);
// die;
if (!empty($_POST) && !empty($_FILES)) {
    $judul = $_POST['judul'];
    $slug = preg_replace("/\s+/", "-", $_POST['judul']);
    $kategori = $_POST['kategori'];
    $isi = $_POST['isi'];
    $user = $_SESSION['username'];
    $img = $_FILES['img']['tmp_name'];
    $img_name = time() . preg_replace("/\s+/", "-", $_FILES['img']['name']);
    $img_temporary = $_FILES['img']['tmp_name'];
    $img_path = realpath('..') . '/Asset/img/artikel/';
    $query = mysqli_query($db, "INSERT INTO tbl_artikel(Judul_artikel,Slug_artikel,Id_kategori,Img_artikel,Isi_artikel,Penulis_artikel) VALUES ('$judul', '$slug', '$kategori', '$img_name', '$isi', '$user')");
    if ($query) {
        if (move_uploaded_file($img_temporary, $img_path . $img_name)) {
            header("location:?page=data_artikel&pesan=sukses_tambah_artikel");
        } else {
            header("location:?page=data_artikel&pesan=gagal_tambah_artikel");        }
    } else {
        header("location:?page=data_artikel&pesan=gagal_upload_gambar");
    }
}
?>
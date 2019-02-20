<?php
    ob_start();
    require_once ("../Config/config.php");
    
    if(isset($_POST)){
        $id = $_POST['id'];
        $kategori = $_POST['kategori'];
        $judul = $_POST['judul'];
        $slug = preg_replace("/\s+/", "-", $_POST['judul']);
        $isi = $_POST['isi'];
        $user = $_SESSION['username'];
        $img = $_FILES['img']['tmp_name'];
        $img_name = time().preg_replace("/\s+/", "-", $_FILES['img']['name']);
        $img_temporary = $_FILES['img']['tmp_name'];
        $path_baru = realpath('..') . "/Asset/img/artikel/";

        if (move_uploaded_file($img_temporary, $path_baru . $img_name)) {
            // Query menampilkan data user berdasarkan id user
            $query = mysqli_query($db, "SELECT * FROM tbl_artikel WHERE Id_artikel='$id'");
            $data = mysqli_fetch_array($query);
            // cek apakah file sebelumnya ada di direktori
            if(is_file(realpath('..') . "/Asset/img/artikel/".$data['Img_artikel'])){
                unlink(realpath('..') . "/Asset/img/artikel/".$data['Img_artikel']);
            }
            //proses ubah database
            $query =mysqli_query($db, "UPDATE tbl_artikel SET Judul_artikel='$judul', Slug_artikel='$slug', Id_kategori='$kategori', Img_artikel='$img_name', Isi_artikel='$isi', Penulis_artikel='$user' WHERE Id_artikel='$id'");
            if($query){
                header("location:?page=data_artikel&pesan=sukses_update_artikel");
            }else {
                header("location:?page=data_artikel&pesan=gagal_update_artikel");
            }
        } else{
            //jika gambar gagal diupload gambar
            header("location:?page=data_artikel&pesan=gagal_upload_gambar");
        }
    }
?>
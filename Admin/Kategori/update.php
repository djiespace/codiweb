<?php
    ob_start();
    require_once ("../Config/config.php");
    $id = $_POST['id'];
    $kategori = $_POST['kategori'];
    if(isset($_POST)){
        $img = $_FILES['img']['tmp_name'];
        $img_name = time() . preg_replace("/\s+/", "-", $_FILES['img']['name']);
        $img_temporary = $_FILES['img']['tmp_name'];
        $path_baru = realpath('..') . '/Asset/img/kategori/';

        if (move_uploaded_file($img_temporary, $path_baru . $img_name)) {
            // Query menampilkan data user berdasarkan id user
            $query = mysqli_query($db, "SELECT * FROM tbl_kategori WHERE Id_kategori='$id'");
            $data = mysqli_fetch_array($query);
            // cek apakah file sebelumnya ada di direktori
            if(is_file(realpath('..') . '/Asset/img/kategori/'.$data['Img_kategori'])){
                unlink(realpath('..') . '/Asset/img/kategori/'.$data['Img_kategori']);
            }
            //proses ubah database
            $query =mysqli_query($db, "UPDATE tbl_kategori SET Nama_kategori='$kategori', Img_kategori='$img_name' WHERE Id_kategori='$id'");
            if($query){
                header("location:?page=data_kategori&pesan=sukses_update_kategori");
            }else {
                header("location:?page=data_kategori&pesan=gagal_update_kategori");
            }
        } else{
            //jika gambar gagal diupload gambar
            header("location:?page=data_kategori&pesan=gagal_upload_gambar"); 
        }
    }
    // clean_dump($_POST);
    // clean_dump($_FILES);
    // clean_dump($query);
?>
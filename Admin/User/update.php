<?php
    ob_start();
    require_once ("../Config/config.php");
    
    if(isset($_POST)){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $uname = $_POST['uname'];
        $pass = md5($_POST['pass']);
        $email = $_POST['email'];
        $isi = $_POST['isi'];
        $img = $_FILES['img']['tmp_name'];
        $img_name = time().preg_replace("/\s+/", "-", $_FILES['img']['name']);
        $img_temporary = $_FILES['img']['tmp_name'];
        $path_baru = realpath('..') . "/Asset/img/";

        if (move_uploaded_file($img_temporary, $path_baru . $img_name)) {
            // Query menampilkan data user berdasarkan id user
            $query = mysqli_query($db, "SELECT * FROM tbl_user WHERE Id_user='$id'");
            $data = mysqli_fetch_array($query);
            // cek apakah file sebelumnya ada di direktori
            if(is_file(realpath('..') . "/Asset/img/".$data['Img_user'])){
                unlink(realpath('..') . "/Asset/img/".$data['Img_user']);
            }
            //proses ubah database
            $query =mysqli_query($db, "UPDATE tbl_user SET Nama_lengkap='$nama', Username='$uname', Password='$pass', Email='$email', Img_user='$img_name', Deskripsi='$isi' WHERE Id_user='$id'");
            if($query){
                header("location:?page=data_user&pesan=sukses_update_user");
            }else {
                header("location:?page=data_user&pesan=gagal_update_user");
            }
        } else{
            //jika gambar gagal diupload gambar
            header("location:?page=data_user&pesan=gagal_upload_gambar");
        }
    }
?>
<?php
    require_once ("../Config/config.php");
    $id = $_GET['id'];
    $delete = mysqli_query($db, "DELETE FROM tbl_kategori WHERE Id_kategori='$id'");
    if($delete){
        echo '<script language="javascript">window.confirm("Anda Yakin?"); document.location="?page=data_kategori&pesan=berhasil_dihapus";</script>';
    }else{
        header("location:?page=data_kategori");
    }
?>
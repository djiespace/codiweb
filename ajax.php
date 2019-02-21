<?php
    require_once ("Config/config.php");
    $q = strval($_GET['cari']);
    function Cari($q)
    {
        $query1 = mysqli_query($GLOBALS['db'], "SELECT Id_kategori FROM tbl_kategori WHERE Nama_kategori LIKE '%$q%' LIMIT 1");
        $list = mysqli_fetch_assoc($query1)['Id_kategori'];

       $query = mysqli_query($GLOBALS['db'], "SELECT Judul_artikel,Slug_artikel,Tanggal_artikel FROM tbl_artikel WHERE Id_kategori='$list' ");
       $fetch = mysqli_fetch_all($query,MYSQLI_ASSOC);
       header("Content-Type: application/json");
       echo json_encode($fetch);
    }
    Cari($q);
?>

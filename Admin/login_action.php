<?php
session_start();
require_once ('Config/config.php');

$username = htmlspecialchars($_POST['username']);
$password = md5($_POST['password']);
// $query = mysqli_query($db, "select * from tbl_user where Password='$password' and Username='$username'");
$query = mysqli_query($db, "select * from tbl_user where Username='$username' and Password='$password'");
$sql = mysqli_num_rows($query);
if ($sql > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:index.php?pesan=berhasil_login");
}else{
    header("location:login.php?pesan=gagal");
}
?>
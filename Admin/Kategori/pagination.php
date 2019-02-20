<?php
require_once ("../Config/config.php");
function vardie($val){
    var_dump($val);
    echo "<br>";
}
if(isset($_GET['page'])){
    $page = intval($_GET['page']);
} else {
    $page = 1;
}
$perpage = 5;
$next = $page+1;
$prev = $page-1;
$count = mysqli_query($db, "SELECT COUNT(Id_kategori) FROM tbl_kategori");
$select = mysqli_query($db, "SELECT * FROM tbl_kategori LIMIT $page,$perpage*$page");

vardie(mysqli_fetch_array($count)[0]);
echo "<pre>";
print_r(mysqli_fetch_all($select));
echo "</pre>";
vardie($page);
vardie($next);
vardie($prev);

die;
?>
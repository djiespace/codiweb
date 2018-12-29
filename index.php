<?php
    //Author : marketadjie
    //Email : marketadjie@gmail.com
    //sistem templating

    //include header
    include "header.php";

    //include all pages
    if ($_GET['page'] == 'article' || $_GET['page'] == '') {
        include "artikel.php";
    }elseif ($_GET['page'] == 'about') {
        include "about.php";
    }elseif ($_GET['page'] == 'post') {
        include "post.php";
    }elseif ($_GET['page'] == 'php') {
        include "Category/PHP.php";
    }

    //include footer
    include "footer.php";
?>
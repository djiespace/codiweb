<?php
    //Author : marketadjie
    //Email : marketadjie@gmail.com
    //sistem templating

    //include header
    include "header.php";

    //include all pages
    // if ($_GET['page'] == 'article' || $_GET['page'] == '') {
    //     include "artikel.php";
    // }elseif ($_GET['page'] == 'post') {
    //     include "post.php";
    // }elseif ($_GET['page'] == 'kategori') {
    //     include "category.php";
    // }
    switch (@$_GET['page']) {
        case 'artikel':
            include "artikel.php";
        break;
        case '';
            include "artikel.php";
        break;
        case 'post';
            include "post.php";
        break;
        case 'kategori';
            include "kategori.php";
        break;

    }

    //include footer
    include "footer.php";
?>
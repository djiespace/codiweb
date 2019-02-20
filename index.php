<?php
    //Author : marketadjie
    //Email : marketadjie@gmail.com
    //sistem templating

    //include header
    include "Template/header.php";

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
            include "Template/artikel.php";
        break;
        case '';
            include "Template/artikel.php";
        break;
        case 'post';
            include "Template/post.php";
        break;
        case 'kategori';
            include "Template/kategori.php";
        break;
        case 'blank_page';
            include "Template/blank_page.php";
        break;

    }

    //include footer
    include "Template/footer.php";
?>
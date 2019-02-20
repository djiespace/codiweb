<?php
    $img = $_GET['img'];
    $ext = explode('.',$img);
    $ext = end($ext);
    function Image($img,$ext)
    {
        header("Content-Type: image");
        readfile(realpath('.') . '/Asset/img/'.$img);
    }
    // ImageKategori($img,$ext);
    Image($img,$ext);
    // var_dump(readfile(realpath('.') . '/Asset/img/'.$img));
?>

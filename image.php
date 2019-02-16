<?php
    $img = $_GET['img'];
    $ext = explode('.',$img);
    $ext = end($ext);
    function Image($img,$ext)
    {
        switch ($ext) {
            case 'svg':
                $test ='Content-Type: text/html';
                break;
            default :
                $test = 'Content-Type: image';
                break;
            }
        header($test);
        readfile(realpath('.') . '/Asset/img/'.$img);
    }
    Image($img,$ext);
?>

<?php
    $title;
    $url = $_SERVER[REQUEST_URI];
    //echo $url;
    $result = ltrim(str_replace('.php','',$url),'/');
    //echo $result;

    if($result == ''){
        $title = '메인';
    }else if($result == 'content01'){
        $title = '서브';
    }
?>
<?php
    //May this code glorify God
    session_start();
    $file_url =  $_SESSION['resized_img'];
    $file_name = basename($file_url);
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary"); 
    header("Content-disposition: attachment; filename=\"".$file_name."\""); 
    readfile($file_url);
    ob_clean();
    flush();
    $mask = 'uploads/'.$_SESSION['user'].'*.*';
    array_map('unlink', glob($mask));    
   
    
?>
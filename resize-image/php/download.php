<?php
    //May this code glorify God
    session_start();
    if(isset($_SESSION['resized_img'])){
        $filename =  $_SESSION['resized_img'];
    }else{
        header("Location: ../");
        exit;
    }
    if(file_exists($filename)) {

        //Define header information
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header("Cache-Control: no-cache, must-revalidate");
        header("Expires: 0");
        header('Content-Disposition: attachment; filename="'.basename($filename).'"');
        header('Content-Length: ' . filesize($filename));
        header('Pragma: public');
        
        //Clear system output buffer
        flush();
        
        //Read the size of the file
        readfile($filename);
        
        //Terminate from the script
        die();
        }
        else{
        echo "File does not exist.";
        }
      
?>
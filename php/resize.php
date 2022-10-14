<?php
session_start();
include 'functions.php';
    $extensions = array(
        IMAGETYPE_GIF => "gif",
        IMAGETYPE_JPEG => "jpg",
        IMAGETYPE_PNG => "png",
        IMAGETYPE_SWF => "swf",
        IMAGETYPE_PSD => "psd",
        IMAGETYPE_BMP => "bmp",
        IMAGETYPE_TIFF_II => "tiff",
        IMAGETYPE_TIFF_MM => "tiff",
        IMAGETYPE_JPC => "jpc",
        IMAGETYPE_JP2 => "jp2",
        IMAGETYPE_JPX => "jpx",
        IMAGETYPE_JB2 => "jb2",
        IMAGETYPE_SWC => "swc",
        IMAGETYPE_IFF => "iff",
        IMAGETYPE_WBMP => "wbmp",
        IMAGETYPE_XBM => "xbm",
        IMAGETYPE_ICO => "ico"
    );
    $imageType=exif_imagetype(realpath($_SESSION['uploaded_file_path']));
    $imageFormat=$extensions[$imageType];
    $width=$_POST['width'];
    $height=$_POST['height'];
    $imagick = new \Imagick(realpath($_SESSION['uploaded_file_path']));
    $imagick->adaptiveResizeImage($width,$height);
    $to = $_SESSION['user'].generateRandomString().'resized.'.$imageFormat;
    if(file_put_contents('uploads/'.$to,$imagick->getImageBlob())
    ){
        $_SESSION['resized_img']="uploads/".$to;
        $data=array();
        $data['resized_img']="php/uploads/".$to;
        $data['height']=$imagick->getImageHeight();
        $data['width']=$imagick->getImageWidth();
        echo json_encode($data);
        exit();
    }
    else{
        echo "Error occured";
    } 

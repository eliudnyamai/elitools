<?php
ob_start();
session_start();
// May this codebase glorify God
include 'functions.php';
define ('SITE_ROOT', realpath(dirname(__FILE__)));
$target_dir = SITE_ROOT.'/uploads/';
$target_file = $target_dir .basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$data=array();

// Check if image file is a actual image or fake image
if(!isset($_FILES["file"])) {
  header('location: ../');
  exit();
}

// Check file size
if ($_FILES["file"]["size"] > file_upload_max_size() ) {
  $data["error"]="Sorry, your file is too large.";
  $data["success"]=false;
  echo json_encode($data);
  exit();
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "jfif" && $imageFileType != "webp" && $imageFileType != "tiff"
&& $imageFileType != "avif") {
  $data["error"]="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $data["success"]=false;
  echo json_encode($data);
  exit();  
}

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    $_SESSION["uploaded_file_path"]='uploads/'.basename( $_FILES["file"]["name"]);
    $_SESSION["filename"]=basename( $_FILES["file"]["name"]);
    $data["success"]=true;
    $data["uploaded_file"]='php/uploads/'.basename( $_FILES["file"]["name"]);
    $data["size"]=getimagesize('uploads/'.basename( $_FILES["file"]["name"]));
    echo json_encode($data);
    exit();
  }
  ?>
  
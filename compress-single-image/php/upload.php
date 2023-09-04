<?php  
session_start();
set_time_limit(0);
include 'functions.php';

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    header("Location: ../");
    exit;
}

if (isset($_FILES['file'])) {  
    $file_name = $_FILES['file']['name'];
    $extension = pathinfo($file_name, PATHINFO_EXTENSION);
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];  
    $desired_dir = "uploads/"; // Specify the desired directory name here

    $allowed_extensions = array('jpg', 'JPG', 'JPEG', 'jpeg', 'png', 'PNG', 'gif', 'GIF', 'wbmp', 'WBMP', 'webp', 'WEBP', 'avif', 'AVIF', 'JFIF', 'jfif', 'tif', 'TIF', 'tiff', 'TIFF');

    if ($file_size > file_upload_max_size()) {
        $error = "File size too big";
        $data["error"] = "$error <button id='close1' type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>";
        $data["success"] = false;
        echo json_encode($data);
        exit();
    }

    if (!in_array($extension, $allowed_extensions)) {
        $error = "Sorry, the file must be an image. SVG is not supported";
        $data["error"] = "$error <button id='close1' type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>";
        $data["success"] = false;
        echo json_encode($data);
        exit();
    }

    if (is_dir($desired_dir) == false) {
        mkdir("$desired_dir", 0700); // Create directory if it does not exist
    }
    $compressed_image_name = $desired_dir."compressed_".$file_name;

    if (move_uploaded_file($file_tmp, $compressed_image_name)) {
   
      $image = new \Imagick(realpath($compressed_image_name));
        $image->setImageFormat('jpg');
        $image->setImageCompression(Imagick::COMPRESSION_JPEG);
        $image->setImageCompressionQuality(20);
        $image->writeImage($compressed_image_name);
        $data["success"] = true;
        $data["message"] = "<h3>Image compressed successfully.</h3> </br>: <a href='php/$compressed_image_name'  download><button  id='download-btn' class='btn btn-primary'>Download Compressed Image</button></a>";
      } else {
        $error = $_FILES['file']['error'];
        $data["error"] = "$error <button id='close1' type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>";
        $data["success"] = false;
        echo json_encode($data);
        exit();
    }

    echo json_encode($data);
    exit();
}
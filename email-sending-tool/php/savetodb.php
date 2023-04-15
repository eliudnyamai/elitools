<?php
include "../Database.php";
define ('SITE_ROOT', realpath(dirname(__FILE__)));

if (isset($_POST['name'])) {
    $name=$_POST['name'];
}
if (isset($_POST['email'])) {
    $email=$_POST['email'];
}
if (isset($_FILES['file'])) {
    $file=$_FILES['file'];
}
$target_dir = SITE_ROOT.'/uploads/';
$target_file = $target_dir .basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$data=array();
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    
    $uploaded_file_path='uploads/'.basename( $_FILES["file"]["name"]);
    $stmt = $pdo->prepare("INSERT INTO users (name, email, pdf) VALUES (:name, :email, :pdf)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pdf', $uploaded_file_path);
    $stmt->execute();
    $data["success"]=true;
    $data["message"]="inserted";
    echo json_encode($data);
    exit();
  }

?>
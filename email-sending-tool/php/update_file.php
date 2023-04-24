<?php
header('Content-type: text/html; charset=UTF-8');
include "../Database.php";
define ('SITE_ROOT', realpath(dirname(__FILE__)));
if (isset($_FILES['file'])) {
    $file=$_FILES['file'];
}
$target_dir = SITE_ROOT.'/uploads/';
$target_file = $target_dir .basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$data=array();
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {  
    $uploaded_file_path='uploads/'.basename( $_FILES["file"]["name"]);
    $filename=basename( $_FILES["file"]["name"]);
    $file_name = pathinfo($filename, PATHINFO_FILENAME);
   
    if(isset($_POST['name'])){
        $name=$_POST['name'];
    }else{
        $stmt = $pdo->prepare("SELECT name FROM users WHERE name = :name");
        $t='Karlis Vilmanis';
        $stmt->bindParam(':name', $t);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        print_r($result);
        $name=$result[0]['name'];
        echo $name;
        exit();
        //pdo fetch name where name =name in table users
    }
    $sql = "UPDATE users SET pdf = :pdf WHERE name = :name";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':pdf', $uploaded_file_path);
    $stmt->execute();
    $data["success"]=true;
    $data["message"]=$name;
    echo json_encode($data);
    exit();
  }
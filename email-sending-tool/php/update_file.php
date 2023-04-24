<?php
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
    $sql = "UPDATE users SET pdf = :pdf WHERE name = :name";
    $stmt = $pdo->prepare($sql);
    if(isset($_POST['name'])){
        $name=$_POST['name'];
    }else{
        $name=$file_name;
    }
   if( $stmt->execute([
    'pdf' => $uploaded_file_path,
    'name' => $name
])){
    $data["success"]=true;
    $data["message"]="inserted";
    echo json_encode($data);
    exit();
}
   
    //get filename part without the extension part
  }
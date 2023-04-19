<?php
include "../Database.php";
define ('SITE_ROOT', realpath(dirname(__FILE__)));

if (isset($_POST['id'])) {
    $id=$_POST['id'];
}
else{
    exit();
}
if (isset($_POST['table'])) {
    $table=$_POST['table'];
}
else{
    exit();
}

$stmt = $pdo->prepare("DELETE FROM $table WHERE id=:id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

if($stmt->execute()){
    $data["success"]=true;
    $data["message"]="Delete";
    echo json_encode($data);
    exit();
}
else{
    $data["success"]=false;
    $data["message"]="Error occured";
    echo json_encode($data);
    exit();
}
    

    //pdo delete fro table $table where id =id

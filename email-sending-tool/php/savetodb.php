<?php
include "../Database.php";
define ('SITE_ROOT', realpath(dirname(__FILE__)));

if (isset($_POST['name'])) {
    $name=$_POST['name'];
}
if (isset($_POST['email'])) {
    $email=$_POST['email'];
}
$data=array();
    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $data["success"]=true;
    $data["message"]="inserted";
    echo json_encode($data);
    exit();
?>
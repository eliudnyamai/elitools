<?php
include "../Database.php";
define ('SITE_ROOT', realpath(dirname(__FILE__)));
if (isset($_POST['name'])) {
    $name=$_POST['name'];
}
else{
    exit();
}
if (isset($_POST['email'])) {
    $email=$_POST['email'];
}
else{
    exit();
}
$stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->execute();
if ($stmt->rowCount() > 0) {
    $data["success"]=false;
    $data["message"]="Email Already In Database";
    echo json_encode($data);
    exit();
} 
    $data=array();
    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    if($stmt->execute()){
        $data["success"]=true;
        $data["message"]="INSERTED";
        echo json_encode($data);
        exit();
    }
    else{
        $data["success"]=false;
        $data["message"]="ERROR OCCURED";
        echo json_encode($data);
        exit(); 
    }  
?>
<?php
header('Content-type: text/html; charset=UTF-8');
set_time_limit(0);                   // ignore php timeout
ignore_user_abort(true);
include "../Database.php";
define ('SITE_ROOT', realpath(dirname(__FILE__)));
if(isset($_FILES['file'])) {

    $data = array();

    // Loop through all uploaded files
    for($i=0; $i<count($_FILES['file']['name']); $i++) {

        $file = $_FILES['file'];
        $target_dir = SITE_ROOT.'/uploads/';
        $target_file = $target_dir .basename($_FILES["file"]["name"][$i]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if (move_uploaded_file($_FILES["file"]["tmp_name"][$i], $target_file)) {
            $uploaded_file_path='uploads/'.basename( $_FILES["file"]["name"][$i]);
            $filename=basename( $_FILES["file"]["name"][$i]);
            $file_name = pathinfo($filename, PATHINFO_FILENAME);

            if(isset($_POST['name'])){
                $name=$_POST['name'];
            }else{
               $name=$file_name;
            }
            $sql = "UPDATE users SET pdf = :pdf WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':pdf', $uploaded_file_path);
            $stmt->execute();

            $data["success"]=true;
            $data["message"]=$name;
        }
    }
    echo json_encode($data);
    exit();
}

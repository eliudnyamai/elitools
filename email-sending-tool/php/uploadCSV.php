<?php
include "../Database.php";
define ('SITE_ROOT', realpath(dirname(__FILE__)));
 if(isset($_FILES["file"])){
    $filename=$_FILES["file"]["tmp_name"]; 
     {
        $file = fopen($filename, "r");
          $index=0;
          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {
            $name=utf8_encode($getData[0])." ".utf8_encode($getData[1]);
                   $stmt = $pdo->prepare("INSERT INTO users (name, surname, email) VALUES (:name, :surname, :email)");
                   $stmt->bindParam(':name', $getData[0]);
                   $stmt->bindParam(':surname', $getData[1]);
                   $stmt->bindParam(':email', utf8_encode($getData[2]));
                   $stmt->execute();  
                   $index++; 
}            
            fclose($file);  
            $data["success"]=true;
            $data["message"]=$index."Files Inserted";
            echo json_encode($data);
     }
  }   

 ?>
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
            if(empty($getData[1])){
               $name=trim($getData[0]);
            }
            else{
               $name=utf8_encode(trim($getData[0]))." ".utf8_encode(trim($getData[1]));
            }
                   $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
                   $stmt->bindParam(':name', trim($name));
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
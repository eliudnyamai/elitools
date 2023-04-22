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
            $name=$getData[0]." ".$getData[1];
                   $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
                   $stmt->bindParam(':name', $name);
                   $stmt->bindParam(':email', $getData[2]);
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
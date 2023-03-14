<?php  
 session_start();
 include 'functions.php';
 $user=$_SESSION['user'];
 if (isset($_POST['width'])) {
  $width=$_POST['width'];
 }else{
  header('Location:../');
  exit();
 }
 if (isset($_POST['height'])) {
  $height=$_POST['height'];
 }else{
  header('Location:../');
  exit();
 }
    if(isset($_FILES['files'])){  
        $errors= array();
        $messages= array();
        $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif','wbmp', 'webp','avif','jfif');
        foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
          $file_name = $key.$_FILES['files']['name'][$key];
          $extension = pathinfo($file_name, PATHINFO_EXTENSION);
          $file_size =$_FILES['files']['size'][$key];
          $file_tmp =$_FILES['files']['tmp_name'][$key];
          $file_type=$_FILES['files']['type'][$key];  
             if($file_size >  file_upload_max_size()){
              $error="File size too big";
              $data["error"]="$error <button id='close1' type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>";
              $data["success"]=false;
              echo json_encode($data);
              exit();
            exit();
             }       
             if(!in_array($extension,$allowed_extensions)){
              $error="Sorry, All FILES must be images. SVG is not supported";
              $data["error"]="$error <button id='close1' type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>";
              $data["success"]=false;
              echo json_encode($data);
              exit();
             }
             //validate images
          $desired_dir="uploads/$user"; //specify the desired directory name here 
          if(empty($errors)==true){
              if(is_dir($desired_dir)==false){ //check if the directory exists or not. If not then create it. 
                  mkdir("$desired_dir", 0700);		// Create directory if it does not exist						 
              }
              if(is_dir("$desired_dir/".$file_name)==false){ //check if the file already exists in the desired directory or not. If not then move it. 
                  if(move_uploaded_file($file_tmp,"$desired_dir/".$file_name)){
                    $image = new \Imagick(realpath("$desired_dir/".$file_name)); 
                    $image->adaptiveResizeImage($width,$height);
                    file_put_contents("$desired_dir/$file_name",$image);     
                }
                  else{
                    $error=$_FILES['files']['error'];
                    $data["error"]="$error <button id='close1' type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>";
                    $data["success"]=false;
                    echo json_encode($data);
                    exit();
                  }
              }else{                 
                $messages[]= "Error: File ".$fileName." already exists";
              }
            }
          }    

          $rootPath = realpath($desired_dir);
          // Initialize archive object
          $zip = new ZipArchive();
          $zip->open("uploads/$user.zip", ZipArchive::CREATE | ZipArchive::OVERWRITE);
          // Create recursive directory iterator
          /** @var SplFileInfo[] $files */
          $files = new RecursiveIteratorIterator(
              new RecursiveDirectoryIterator($rootPath),
              RecursiveIteratorIterator::LEAVES_ONLY
          );
          foreach ($files as $name => $file) {
              if (!$file->isDir()) {
                  $filePath = $file->getRealPath();
                  $relativePath = substr($filePath, strlen($rootPath) + 1);
                  $zip->addFile($filePath, $relativePath);
              }
          }
            $zip->close();
            $data["success"]=true;
            $data["message"]="<a href='php/uploads/$user.zip'  download><button  id='download-btn' class='btn btn-primary'>Download Your Zip</button></a>";
            echo json_encode($data);
            exit();
          }
<?php  
 session_start();
 set_time_limit(0);
 include 'functions.php';
 if(isset($_SESSION['user'])){
  $user=$_SESSION['user'];
 }
 else{
  header("Location: ../");
        exit;
 }
 if (isset($_POST['image-format'])) {
  $image_format=$_POST['image-format'];
 }else{
  header('Location:../');
  exit();
 }
    if(isset($_FILES['file'])){  
        $allowed_extensions = array('jpg','JPG', 'jpeg','JPEG','PNG', 'png','gif','GIF','wbmp','WBMP', 'WEBP','webp','avif','AVIF','jfif','JFIF','tiff','TIFF');
          $file_name = $_FILES['file']['name'];
          $extension = pathinfo($file_name, PATHINFO_EXTENSION);
          $file_size =$_FILES['file']['size'];
          $file_tmp =$_FILES['file']['tmp_name'];
          $file_type=$_FILES['file']['type'];
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
          $desired_dir="uploads"; //specify the desired directory name here 
              if(is_dir("$desired_dir/".$file_name)==false){ //check if the file already exists in the desired directory or not. If not then move it. 
                  if(move_uploaded_file($file_tmp,"$desired_dir/".$file_name)){
                    $image = new \Imagick(realpath("$desired_dir/".$file_name)); 
                    $image->setImageFormat($image_format);
                    $filenameminusextension = filenameWithoutExtension($file_name);
                    file_put_contents("$desired_dir/$filenameminusextension.$image_format",$image);     
                    unlink("$desired_dir/$file_name"); 
                    $data["success"]=true;
                    $data["message"]="<a href='php/uploads/$desired_dir/$filenameminusextension.$image_format'  download><button  id='download-btn' class='btn btn-primary'>Download Your Image</button></a>";
                    echo json_encode($data);
                    exit();
                }
                  else{
                    $error=$_FILES['file']['error'];
                    $data["error"]="$error <button id='close1' type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>";
                    $data["success"]=false;
                    echo json_encode($data);
                    exit();
                  }
              }else{                 
                $messages[]= "Error: File ".$fileName." already exists";
              }
            }
        
           
          
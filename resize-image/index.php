<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
 session_start();
 include 'php/functions.php';
 if(isset($_SESSION['uploaded_file_path'])){
      $uploaded_file=$_SESSION['uploaded_file_path'];
 }
 else{
     $uploaded_file="placeholder.png";
 }

 if(isset($_SESSION['resized_img'])){
     $resized_img=$_SESSION['resized_img'];
    
}
else{
    $resized_img="php/uploads/germany.png";
}
$_SESSION['user']=generateRandomString();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Toolske|Image Manipulation
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="css/styles.css" rel="stylesheet" />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
</head>

<body class="">
  <!-- Sidebar start -->
     <?php include '../includes/sidebar.php';?>
    <!-- Side bar end -->
    <div class="main-panel">
      <!-- Navbar -->
        <?php include '../includes/header.php';
        display_header('Image Resizing Tool');
       ?>
      <!-- End Navbar -->
      <div class="content">
        <div style="height: 100px;" class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
           <!-- Advert -->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
           <!-- Advert -->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <!-- Advert -->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <!-- Advert -->
        </div>
</div>
        <div class="row tool">
          <div style="min-height:350px;" class="col-md-12">
           <!-- Here -->
           <h2>Upload your image to resize</h2> <br>
           <form id="upload-form" action="php/upload.php" enctype="multipart/form-data" method="post">
               <input type="file" required name="file" id="">
               <input type="submit" value="Upload" id="submit-img" name="submit">
           </form> <br>
           <div id="file-upload-error"></div>
           <div class="images">
               <div class="input-image">
                   <img id="uploaded_img" src="" alt="" srcset="">
                   <form method="post" action="php/resize.php" id="resize-form" class="">
                       <p>Choose image width in px:</p>
                       <div class="img-dimensions" >
                            <input type="range"  min="1" max="2000" value="50" class="slider" id="width-range">
                            <input type="number" name="width"  id="width-input">
                       </div>
                       <p>Choose image height in px:</p>
                       <div class="img-dimensions" >
                           <input type="range"  min="1" max="2000" value="50" class="slider" id="height-range">
                           <input type="number" name="height" id="height-input">
                       </div>
                       <input id="resize-submit" class="resize-btn btn" name="resize" value="resize" type="submit">
                   </form>
               </div>
               <div  class="output-image">
                   <div class="output-image-container">
                       <img id="resized_img" src="" alt="" srcset="">
                   </div>
                   <div id="output-image-info">
                   </div>
                   <form id="download-form" method="post" action="php/download.php">
                       <button class="download-btn btn" type="submit">Download</button>    
                   </form>
               </div>
           </div>    
           <!--  -->
          </div>
        </div>
            </div>
          </div>
        </div>
</div>
</div>
<?php include '../includes/footer.php'?>
</body>

</html>

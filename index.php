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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elitools|images manipulation</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
      <main>
          <!-- Navigation starts -->
          <nav class="navigation" >
              <div class="logo">ELITOOLS</div>
                    <ul class="links">
                        <li><a class="active" href="">Image manipulation</a></li>
                        <li><a href="">PDF conversion</a></li>
                        <li><a href="">Email services </a></li>
                        <li><a href="">Social Media automation</a></li>
                    </ul>
          </nav>
           <!-- Navigation stops -->

           <!-- Tool-list starts -->
          <aside class="tools-list" >
              <ul class="tools">
                <li><a class="active" href="">Resize Image</a></li>
                <li><a href="">Remove Background</a></li>
                <li><a href="">Sharpen Image</a></li>
                <li><a href="">Flip Image</a></li>
              </ul>
          </aside>
          <!-- Tools-list stops -->

          <section class="tool-container" >

              <div class="advert">
                <!-- Advert goes here -->
              </div>
              <div class="tool">
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
              </div>
          </section>
          <footer class="footer" >&copy;<a href="eliudmakes.com">eliudmakes.com</a></footer>
      </main>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script src="js/script.js"></script>
</body>
</html>
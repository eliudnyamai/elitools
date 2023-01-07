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
    <!--Head start  -->
      <?php include '../includes/head.php';
      display_head('Toolske|Resize Image');
      ?>
    <!-- Head end -->
<body class="">

    <!-- Sidebar start -->
     <?php include '../includes/sidebar.php';?>
    <!-- Side bar end -->

    <div class="main-panel">

      <!-- Start Navbar -->
        <?php include '../includes/header.php'; display_header('Get Done Quickly');?>
      <!-- End Navbar -->

      <div class="content">

      <!-- ShareThis BEGIN -->
        <div class="sharethis-inline-share-buttons"></div>
      <!-- ShareThis END -->

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
          <div style="min-height:200px;" class="col-md-12">
           <h2>Upload your Image to resize</h2> <br>
           <form id="upload-form" action="php/upload.php" enctype="multipart/form-data" method="post">
               <input type="file" required name="file" id="">
               <input type="submit" value="Upload" id="submit-img" name="submit">
           </form> <br>
           <div id="file-upload-error"></div>
           <div class="images">
               <div class="input-image">
                   <img id="uploaded_img" src="" alt="" srcset="">
                  
<!-- HTML code for the dropdown menu -->
<div id="social-media-presets" class="social-media-presets">
<div class="dropdown">
  <button class="btn-presets facebook  btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <i class="fa fa-facebook-square" aria-hidden="true"></i>
Facebook
  </button>
  <ul class="dropdown-menu">
      <button value="820x312" class="image-presets">820x312px(coverphoto-Desktop)</button>
      <button value="640x360" class="image-presets">640x360px(coverphoto-Mobile)</button>
      <button value="180x180" class="image-presets">180x180px(profilephoto-Desktop)</button>
      <button value="140x140" class="image-presets">140x140px(coverphoto-Mobile)</button>
      <button value="1200x630" class="image-presets">1200x630px(Banner)</button>
  </ul>
</div>

<div class="dropdown">
  <button class="btn-presets twitter btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <i class="fa fa-twitter" aria-hidden="true"></i>
    Twitter
  </button>
  <ul class="dropdown-menu">
      <button value="1500x500" class="image-presets" >1500x500px(coverphoto)</button>
      <button value="400x400" class="image-presets" >400x400px(profilepicture)</button>
      <button value="900x450" class="image-presets">900x450px(shared image)</button>
      <button value="440x220" class="image-presets">440x220px(instream photo)</button>
  </ul>
</div>
<div class="dropdown">
  <button class="btn-presets linkedin btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <i class="fa fa-linkedin" aria-hidden="true"></i>
    Linkedin
  </button>
  <ul class="dropdown-menu">
      <button value="1584x396" class="image-presets">1584x396px(coverphoto-personal)</button>
      <button value="400x400" class="image-presets">400x400px(profilephoto-personal)</button>
      <button value="1128x191" class="image-presets" >1128x191px(coverphoto-company)</button>
      <button value="300x300" class="image-presets">300x300px(profilephoto-company)</button>
      <button value="1350x440" class="image-presets">1350x440px(Blogpostimage)</button>
      <button value="1128x376" class="image-presets">1128x376px(Hero-company)</button>
      <button value="300x300" class="image-presets">300x300px(profilephoto-company)</button>
      <button value="502x282" class="image-presets">502x282px(Moduleimage-company)</button>
      <button value="300x300" class="image-presets">300x300px(profilephoto-company)</button>
      <button value="900x600" class="image-presets">900x600px(companyphotos-company)</button>
  </ul>
</div>
<div class="dropdown">
  <button class="btn-presets tumblr btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <i class="fa fa-tumblr" aria-hidden="true"></i>
Tumblr
  </button>
  <ul class="dropdown-menu">
    <button value="128x128" class="image-presets" >128x128px(profilephoto)</button>
    <button value="500x750" class="image-presets">500x750px(ImagePost)</button>
  </ul>
</div>
<div class="dropdown">
  <button class="btn-presets btn-primary youtube dropdown-toggle" type="button" data-toggle="dropdown">
  <i class="fa fa-youtube-play" aria-hidden="true"></i>
 Youtube
  </button>
  <ul class="dropdown-menu">
    <button value="800x800" class="image-presets">800x800px(ChannelIcon)</button>
    <button value="2500x1440" class="image-presets">2560x1440(coverphoto)</button>
  </ul>
</div>
<div class="dropdown">
  <button class="btn-presets btn-primary pintrest dropdown-toggle" type="button" data-toggle="dropdown">
  <i class="fa fa-pinterest" aria-hidden="true"></i>
  Pintrest
  </button>
  <ul class="dropdown-menu">
    <button value="165x165" class="image-presets">165x165PX(profileImage)</button>
    <button value="222x150" class="image-presets">222x150px(BoardImageSize)</button>
  </ul>
</div>
</div>



<form method="post" action="php/resize.php" id="resize-form" class="">

                       <p>Choose image width in px:</p>
                       <div class="img-dimensions" >
                          <input type="range"  min="1" max="3000" value="50" class="slider" id="width-range">
                          <input type="number" name="width"  id="width-input">
                       </div>
                       <p>Choose image height in px:</p>
                       <div class="img-dimensions" >
                          <input type="range"  min="1" max="3000" value="50" class="slider" id="height-range">
                          <input type="number" name="height" id="height-input">
                       </div>
                       <input id="resize-submit" class="resize-btn btn" name="resize" value="resize image" type="submit">
                   </form>
               </div>

               <div  class="output-image">
                   <div class="output-image-container">
                      <img id="resized_img" src="" alt="" srcset="">
                   </div>
                   <div id="output-image-info"></div>
                   <form id="download-form" method="post" action="php/download.php">
                      <button class="download-btn btn" type="submit">Download</button>    
                   </form>
               </div>
           </div>    
          </div>
        </div>
        <div  class="footer-offset">
  &nbsp;
        </div>
      </div>
<?php include '../includes/footer.php'?>
</body>
</html>

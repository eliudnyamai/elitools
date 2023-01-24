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
<?php include '../includes/head.php';
display_head('Resize Image For Free Online');
?>
<body>
   <?php include '../includes/header.php';?>
   <?php include '../includes/sidebar.php';?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Resize Images</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Toolske.com</a></li>
          <li class="breadcrumb-item active">Resize Images</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Tool -->
            <div class="col-12">       
        <div class="row tool">
            <!-- ShareThis BEGIN -->
            <div class="sharethis-inline-share-buttons"></div>
            <!-- ShareThis END -->
            <div class="advert">

            </div>
          <div style="min-height:200px;" class="col-md-12">
           <h2>Upload your Image to resize</h2> <br>

       

           <!-- <form id="upload-form" action="php/upload.php" enctype="multipart/form-data" method="post">
               <input type="file" required name="file" id="">
               <input type="submit" value="Upload" id="submit-img" name="submit">
           </form> <br>
           <div id="file-upload-error"></div> -->
           <div class="drag-area">
    <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
    <header>Drag & Drop to Upload File</header>
    <span>OR</span>
    <button class="btn">Browse File</button>
    <input type="file" hidden>
  </div>
</div>
           <div class="images">
               <div class="input-image">
                  <img id="uploaded_img" src="" alt="" srcset="">          
                  <!-- image presets dropdown menu -->
                  <div id="social-media-presets" class="social-media-presets">
                     <div class="dropdown">
                       <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <button class="btn-presets facebook  btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                Facebook
                            </button>
                        </a>
                         <ul class="dropdown-menu">
                            <button value="820x312" class="image-presets">820x312px(coverphoto-Desktop)</button>
                            <button value="640x360" class="image-presets">640x360px(coverphoto-Mobile)</button>
                            <button value="180x180" class="image-presets">180x180px(profilephoto-Desktop)</button>
                            <button value="140x140" class="image-presets">140x140px(coverphoto-Mobile)</button>
                            <button value="1200x630" class="image-presets">1200x630px(Banner)</button>
                        </ul>
                      </div>
                      <div class="dropdown">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <button class="btn-presets twitter btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                              Twitter
                            </button>
                        </a>
                        <ul class="dropdown-menu">
                          <button value="1500x500" class="image-presets" >1500x500px(coverphoto)</button>
                          <button value="400x400" class="image-presets" >400x400px(profilepicture)</button>
                          <button value="900x450" class="image-presets">900x450px(shared image)</button>
                          <button value="440x220" class="image-presets">440x220px(instream photo)</button>
                        </ul>
                      </div>
                      <div class="dropdown">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                          <button class="btn-presets linkedin btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                          <i class="fa fa-linkedin" aria-hidden="true"></i>
                            Linkedin
                          </button>
                        </a>
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
                          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                          <button class="btn-presets tumblr btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                          <i class="fa fa-tumblr" aria-hidden="true"></i>
                              Tumblr
                          </button>
                          </a>
                          <ul class="dropdown-menu">
                            <button value="128x128" class="image-presets" >128x128px(profilephoto)</button>
                            <button value="500x750" class="image-presets">500x750px(ImagePost)</button>
                          </ul>
                      </div>
                      <div class="dropdown">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                          <button class="btn-presets btn-primary youtube dropdown-toggle" type="button" data-toggle="dropdown">
                          <i class="fa fa-youtube-play" aria-hidden="true"></i>
                              Youtube
                          </button>
                        </a>
                        <ul class="dropdown-menu">
                          <button value="800x800" class="image-presets">800x800px(ChannelIcon)</button>
                          <button value="2500x1440" class="image-presets">2560x1440(coverphoto)</button>
                        </ul>
                      </div>
                        <div class="dropdown">
                          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <button class="btn-presets btn-primary pintrest dropdown-toggle" type="button">
                              <i class="fa fa-pinterest" aria-hidden="true"></i>
                              Pintrest
                              </button>
                          </a>
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
          <div>
          <h2>How To Resize Images Online For Free-No Sign Up Needed</h2>
<p>Various kinds of people will need an image resizing tool for their various purposes such as posting to social media among others. To resize an image for free online you can use a free image resizing tool provide here at toolske.com. Toolske.com is a website providing a collection of free online tools to help you achieve faster. On top of that, you do not need to sign up to use our services</p>
<h3>To resize an image:</h3>
<ol>
<li>	From you browser access toolske.com</li>
<li>	Click on Resize images from the menu on your left</li>
<li>	Upload your image that you want to resize.</li>
<li>Select the height and width you would like to resize your image to</li>
<li>	Click "Resize" and your resized image will appear on the screen ready for download</li>
<li>	Click on “Download” image. You will find your image inside your downloads folder</li>
</ol>
<h3>Supported Image types by the resizing tool:</h3>
<ol>
<li>	JPEG (or JPG) - Joint Photographic Experts Group</li>
<li>	PNG - Portable Network Graphics</li>
<li>	JFIF- JPEG File Interchage Format</li>
</ol>

<p>The tool also provides predefined image sizes for your various social media needs. You just need to select the social media site of your choice and select the image size you woold like from the dropdown. For example to resize your image  for upload as a facebook cover photo, you just need to click the facebook dropdown and select the cover photo option then click resize.
You can resize your image for free for all your social media needs. The following social media sites are supported:
</p>
<ol>
<li>Facebook</li>
<li>YouTube</li>
<li>Tweeter</li>
<li>Linkedin</li>
<li>Tumblr</li>
<li>Pinterest</li>
</ol>
<p><strong>All your uploads are deleted automatically after 24 hours. We do not keep them.</strong></p>
        </div>
        </div><!-- End Reports -->
       </div>
      </div><!-- End Left side columns -->
    </div>
  </div>
</section>
</main><!-- End #main -->
  <!-- ======= Footer ======= -->
 <?php include '../includes/footer.php'?>
</body>

</html>
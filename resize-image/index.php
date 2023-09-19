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
display_head('Resize Image For Free Online','toolske, toolske.com, picture resizer, Resize your images online for free including resizing png images, resizing jpg images and resizing tiff images, no signup needed');
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
            <div>
              <a target="_blank" href="https://kinsta.com?kaid=BNQBFXIKNLGZ"><img style="width:100%" src="assets/img/728x90 - premium - dark.png" /></a>
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
                  <div id="social-media-presets" class="social-media-presets">
                  <div class="dropdown">
                      <br>
                       <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <button class="btn-presets facebook  btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                Facebook
                            </button>
                        </a>
                         <ul class="dropdown-menu">
                            <button value="851x315" class="image-presets">851x315px-Coverphoto</button>
                            <button value="180x180" class="image-presets">180x180px-Profilephoto</button>
                            <button value="1200x630" class="image-presets">1200x630px-Timelinephoto</button>
                            <button value="1080x1920" class="image-presets">1080x1920px-Stories</button>
                        </ul>
                      </div>
                      <div class="dropdown">
                        <br>
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <button class="btn-presets twitter btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                              Twitter
                            </button>
                        </a>
                        <ul class="dropdown-menu">
                          <button value="1500x500" class="image-presets" >1500x500px- Headerphoto</button>
                          <button value="400x400" class="image-presets" >400x400px-Profilepicture</button>
                          <button value="1600x990" class="image-presets">1600x900px-instream photo</button>
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
                            <button value="1584x396" class="image-presets">1584x396px-coverphoto</button>
                            <button value="400x400" class="image-presets">400x400px-profilephoto</button>
                            <button value="1200x627" class="image-presets">1200x627px-Blogpostimage</button>
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
                            <button value="128x128" class="image-presets" >128x128px-Profilephoto</button>
                            <button value="500x750" class="image-presets">500x750px-ImagePost</button>
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
                          <button value="800x800" class="image-presets">800x800px-Profilephoto</button>
                          <button value="2500x1440" class="image-presets">2048x1152-Banner</button>
                          <button value="1280x720" class="image-presets">1280x720-Thumbnail</button>

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
                            <button value="165x165" class="image-presets">165x165PX-profilepicture</button>
                            <button value="800x450" class="image-presets">800x450px-coverphoto</button>
                            <button value="1000x1500" class="image-presets">1000x1500-Pins</button>
                            <button value="1080x1920" class="image-presets">1080x1920-Story Pins</button>

                          </ul>
                        </div>
                      <div class="dropdown">
                          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <button class="btn-presets aspect  btn btn-success dropdown-toggle" type="button">
                              <i class="fa " aria-hidden="true"></i>
                              16:9 Aspect Ratio
                              </button>
                          </a>
                          <ul class="dropdown-menu">
                            <button value="1920x1080" class="image-presets">1920×1080 (full HD)</button>
                            <button value="3840x2160" class="image-presets">3840×2160 (4K UHD)</button>
                            <button value="7680x4320" class="image-presets">7,680 x 4,320 (8K UHD)</button>
                            <br>
                            <button value="1280x720" class="image-presets">1280×720 (HD)</button>
                            <button value="2560x1440" class="image-presets">2560×1440</button>
                            <button value="1600x900" class="image-presets">1600×900</button>
                            <button value="1366x768" class="image-presets">1366×768</button>
                            <button value="1152x648" class="image-presets">1152×648</button>
                            <button value="1024x576" class="image-presets">1024×576</button>
                          </ul>
                          <br><br>
                        </div>

                        <div class="dropdown">
                          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <button class="btn-presets aspect  btn btn-success dropdown-toggle" type="button">
                              <i class="fa " aria-hidden="true"></i>
                              Fractions
                              </button>
                          </a>
                          <ul class="dropdown-menu">
                          <button value="0.125" class="fractions">Eighth</button>
                          <button value="0.25" class="fractions">Quarter</button>
                            <button value="0.5" class="fractions">Half</button>
                            <button value="0.25" class="fractions">Quarter</button>
                            <button value="2" class="fractions">2x</button>
                            <button value="3" class="fractions">3x</button>
                            <button value="4" class="fractions">4x</button>
                          </ul>
                          <br><br>
                        </div>
                        
              <div class="alert alert-info bg-info border-0 alert-dismissible fade show text-white " role="alert">
                TIP!! To resize with a fraction not here. Lets say 1/16. Click on eighth twice
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
                      </div>
                      <form method="post" action="php/resize.php" id="resize-form" class="">
                        <p>Choose image width in px:</p>
                        <div class="img-dimensions" >
                            <input type="range"  min="1" max="8000" value="50" class="slider" id="width-range">
                            <input type="number" name="width"  id="width-input">
                        </div>
                        <p>Choose image height in px:</p>
                        <div class="img-dimensions" >
                            <input type="range"  min="1" max="8000" value="50" class="slider" id="height-range">
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
                            <div class=" social-links mt-2">
  Liked It? Check Our Online Profiles
                <a href="https://twitter.com/Toolskecom" target="_blank" class=""><i class="bi bi-twitter"></i>Twitter |</a>
                <a href="https://www.tiktok.com/@eliudmitau" target="_blank" class=""><i class="bi bi-tiktok"></i>Tiktok  |</a>
                <a href="https://www.youtube.com/channel/UCo1pKQOzTy0wU3WyOAD3PKQ" target="_blank" class=""><i class="bi bi-youtube"></i>Youtube  |</a>
                <a href="https://linktr.ee/eliud_mitau?subscribe" target="_blank" class=""><i class="bi bi-linktree"></i>Linktree  |</a>
</div>  
                        </form>
           
                    </div>
          
           </div>   

          </div>
          <div>
          <h2>How To Resize Images Online For Free-No Sign Up Needed</h2>
          <div class="row align-items-top">
                  <div class="col-12 col-md-3">
                  <!-- Card with an image on bottom -->
                  <div class="">
                  <img src="assets/img/one.png" class="card-img-bottom" alt="...">
                    <h5 class="card-title text-center">Choose Image</h5>
                  </div><!-- End Card with an image on bottom -->
                  </div>
                  <div class="col-12 col-md-3">
                       <!-- Card with an image on bottom -->
                  <div class="">
                  <img src="assets/img/two.png" class="card-img-bottom" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Choose Size</h5>
                  </div>
                  </div><!-- End Card with an image on bottom -->
                  </div>
                  <div class="col-12 col-md-3">
                   <!-- Card with an image on bottom -->
                   <div class="">
                  <img src="assets/img/three.png" class="card-img-bottom" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center ">resize</h5>
                  </div>
                  </div><!-- End Card with an image on bottom -->
                  </div>
                  <div class="col-12 col-md-3">
                       <!-- Card with an image on bottom -->
                  <div class="">
                  <img src="assets/img/four.png" class="card-img-bottom" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Download </h5>
                  </div>
                  </div><!-- End Card with an image on bottom -->
                  </div>
              </div>
            </div>
          </div><!-- End Default Card -->  
<h3>Supported Image types by the resizing tool:</h3>

<div class="row mx-auto align-items-top">
  

                <!-- Card with titles, buttons, and links -->
          <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize Jpeg files </h5>
              <h6 class="card-subtitle mb-2 text-muted">JPG,JPEG</h6>
              <p class="card-text">A free online tool for resizing jpeg files</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
           
                <!-- Card with titles, buttons, and links -->
                <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize PNG files </h5>
              <h6 class="card-subtitle mb-2 text-muted">PNG</h6>
              <p class="card-text">A free online tool for resizing PNG files</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
                <!-- Card with titles, buttons, and links -->
                <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize JFIF files </h5>
              <h6 class="card-subtitle mb-2 text-muted">JFIF</h6>
              <p class="card-text">A free online tool for resizing JFIF files</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize webp images</h5>
              <h6 class="card-subtitle mb-2 text-muted">WEBP</h6>
              <p class="card-text">A free online tool for resizing webp files</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize TIFF images</h5>
              <h6 class="card-subtitle mb-2 text-muted">TIFF</h6>
              <p class="card-text">A free online tool for resizing TIFF files</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize avif images</h5>
              <h6 class="card-subtitle mb-2 text-muted">AVIF</h6>
              <p class="card-text">A free online tool for resizing AVIF files</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

          </div>

          <h3>Popular Use cases:</h3>
          
<div class="row mx-auto align-items-top">
            <!-- Card with titles, buttons, and links -->
            <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize images For 16:9 aspect ratio</h5>
              <h6 class="card-subtitle mb-2 text-muted">images for 16:9 aspect ratio</h6>
              <p class="card-text">Resize images to all aspect ratio sizes</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
           
                <!-- Card with titles, buttons, and links -->
                <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize for Facebook </h5>
              <h6 class="card-subtitle mb-2 text-muted">Facebook</h6>
              <p class="card-text">A free social media image resizer for facebook</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
                <!-- Card with titles, buttons, and links -->
                <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize for Twitter </h5>
              <h6 class="card-subtitle mb-2 text-muted">Twitter</h6>
              <p class="card-text">A free social media image resizer for Twitter</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize for Linkedin </h5>
              <h6 class="card-subtitle mb-2 text-muted">Linkedin</h6>
              <p class="card-text">A free social media image resizer for Linkedin</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize for Pintrest </h5>
              <h6 class="card-subtitle mb-2 text-muted">Pintrest</h6>
              <p class="card-text">A free social media image resizer for Pintrest</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize for Tumblr </h5>
              <h6 class="card-subtitle mb-2 text-muted">Tumblr</h6>
              <p class="card-text">A free social media image resizer for Tumblr</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
            <!-- Card with titles, buttons, and links -->
            <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize for Youtube </h5>
              <h6 class="card-subtitle mb-2 text-muted">Youtube</h6>
              <p class="card-text">A free social media image resizer for Youtube</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
         <!-- Card with titles, buttons, and links -->
<div class="card container bg-transparent shadow-none   col-lg-4 ">
<div style="text-align:center;">
<a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI%2aM8&offerid=1160033.10002816&bids=1160033.10002816&subid=0&type=4"><IMG border="0" alt="Microsoft Workplace Discount Program" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI%2aM8&offerid=1160033.10002816&bids=1160033.10002816&subid=0&type=4&gridnum=13"></a>    
  </div>
</div><!-- End Card with titles, buttons, and links -->
 
          

          
        
           <!-- Card with titles, buttons, and links -->
           <div class="card container bg-transparent shadow-none   col-lg-4 ">
           <div style="text-align:center;">
           <a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI%2aM8&offerid=1327140.14&bids=1327140.14&subid=0&type=4"><IMG border="0" alt="GAMIVO" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI%2aM8&offerid=1327140.14&bids=1327140.14&subid=0&type=4&gridnum=13"></a>  
          </div>
          </div><!-- End Card with titles, buttons, and links -->

        </a><p><strong>All your uploads are deleted automatically after 24 hours. We do not keep them.</strong></p>
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
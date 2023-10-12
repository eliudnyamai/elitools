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
display_head('resize images in bulk free','bulk resize images','toolske', 'toolske.com','resize images in bulk','bulk image resizer');
?>
<body>
   <?php include '../includes/header.php';?>
   <?php include '../includes/sidebar.php';?>						
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>resize Images In Bulk</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Toolske.com</a></li>
          <li class="breadcrumb-item active">resize Images In Bulk</li>
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
        <div class="my-5">
              <a target="_blank" href="https://kinsta.com/wordpress-hosting/?kaid=BNQBFXIKNLGZ"><img style="width:100%" src="assets/img/728x90 - premium - dark.png" /></a>
              </div>
           <h2>Upload your Images to resize</h2> <br>
<div class="row">
            <div class="card-body col-md-6">
              <h5 class="card-title">Upload Your Images to resize </h5>
              <form id="upload-form" action="php/upload.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <div class="">
                  <input class="form-control" style="" required type="file" name="files[]" multiple>
                  </div>
                </div>
                <br>
                <div class="row mb-3">
                  

   <!-- image presets dropdown menu -->
  <h4 class="text-center">You can start with these predefined size and click resize images  </h4>

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
                        <br>
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
                      </div>
                      <div class="dropdown">
                          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <button class="btn-presets  btn btn-success dropdown-toggle" type="button">
                              <i class="fa " aria-hidden="true"></i>
                              16:9 Aspect Ratio
                              </button>
                          </a>
                          <ul class="dropdown-menu">
                            <button value="1920x1080" class="image-presets">1920×1080 (full HD)</button>
                            <button value="3840x2160" class="image-presets">3840×2160 (4K UHD)</button>
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
                        <!-- <div class="dropdown">
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
                        </div> -->
                      </div>
  
                      <h4 class="text-center">Or You can just choose a custom size and click resize images</h4>
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
                        <input id="resize" class="resize-btn btn" name="resize" value="Resize Images" type="submit">
                  </div>
                  </form>               
</form>
</div>
</div>

<div id="" class="col-md-6">
  <h5 class="card-title" >The zip with your files will appear here <span>If you upload too many files or files with a big bundle size, it will take longer. Please Wait</span> </h5>
  <div id="zip">

</div>
   <div id="zip-success" class="alert mt-3 alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                Your zip is ready for download. close this to start afresh
                <div class=" social-links mt-2">
  Liked It? Check Our Online Profiles
                <a href="https://twitter.com/Toolskecom" target="_blank" class="text-white"><i class="bi bi-twitter"></i>Twitter |</a>
                <a href="https://www.tiktok.com/@eliudmitau" target="_blank" class="text-white"><i class="bi bi-tiktok"></i>Tiktok  |</a>
                <a href="https://www.youtube.com/channel/UCo1pKQOzTy0wU3WyOAD3PKQ" target="_blank" class="text-white"><i class="bi bi-youtube"></i>Youtube  |</a>
                <a href="https://linktr.ee/eliud_mitau?subscribe" target="_blank" class="text-white"><i class="bi bi-linktree"></i>Linktree  |</a>
</div>
                <button id="close" type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div id="zip-fail" class="alert mt-3 alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                
      </div>
</div>
<div class="row my-5">
                <div class="col-md-6 border border-info border-2 rounded-start">
                    <p><Strong>Bulk Resize Images:</strong> Our Bulk Image resizer simplifies the process of resizing image dimensions.</p> <p>Follow these three steps: Choose files, resize, and download. </p>Supported formats are PNG, AVIF, WebP, JPEG, and TIFF.       
                           </div>
                <div class="col-md-6">
                With this tool, you can effortlessly adjust the dimensions of multiple images, ensuring they fit perfectly into your website, presentations, or any other project. Whether you have a batch of images that need resizing for consistency or to meet specific size requirements, our Bulk Resize Images tool streamlines the process, allowing you to quickly and easily obtain resized images without compromising their quality.
                </div>   
</div>
<div class=" col-12 mt-3">
<div class="ad-big  ">
  <div style="text-align:center;">
  <a target="_blank" href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI%2aM8&offerid=1410710.27&bids=1410710.27&subid=0&type=4"><IMG border="0" alt="Careerist" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI%2aM8&offerid=1410710.27&bids=1410710.27&subid=0&type=4&gridnum=0"></a></div>
</div>
  <div class="ad-small">
  <div style="text-align:center;">
<a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1321193.407&subid=0&type=4"><IMG border="0"   alt="Microsoft for Business" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1321193.407&subid=0&type=4&gridnum=12"></a>
</div> 
</div>
            <div class="card-body">
              <h5 class="animated  card-title">How to resize Images In bulk - 4 easy steps </h5>
              <div class="row align-items-top">
                  <div class="col-12 col-md-3">
                  <!-- Card with an image on bottom -->
                  <div class="">
                  <img src="assets/img/one.png" class="card-img-bottom" alt="...">
                    <h5 class="card-title text-center">Choose files</h5>
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
                    <h5 class="card-title text-center">Download Zip</h5>
                  </div>
                  </div><!-- End Card with an image on bottom -->
                  </div>
              </div>
            </div>
          </div><!-- End Default Card -->     
          
          <div class="row mx-auto align-items-top">
                <!-- Card with titles, buttons, and links -->
          <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize images For twitter </h5>
              <h6 class="card-subtitle mb-2 text-muted">images for twitter</h6>
              <p class="card-text">Resize images to all twitter image sizes</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
           
                <!-- Card with titles, buttons, and links -->
          <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize images For Facebook</h5>
              <h6 class="card-subtitle mb-2 text-muted">Images For Facebook</h6>
              <p class="card-text">Resize images to all Facebook image sizes</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
                <!-- Card with titles, buttons, and links -->
          <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize images For Youtube</h5>
              <h6 class="card-subtitle mb-2 text-muted">images for Youtube</h6>
              <p class="card-text">Resize images to all Youtube image sizes</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize images For Linkedin</h5>
              <h6 class="card-subtitle mb-2 text-muted">images For Linkedin</h6>
              <p class="card-text">Resize images to all Linkedin image sizes</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize images For Tumblr</h5>
              <h6 class="card-subtitle mb-2 text-muted">images for Tumblr</h6>
              <p class="card-text">Resize images to all Tumblr image sizes</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize images For Pintrest</h5>
              <h6 class="card-subtitle mb-2 text-muted">images for Pintrest</h6>
              <p class="card-text">Resize images to all Pintrest image sizes</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

            <!-- Card with titles, buttons, and links -->
            <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Resize images For 16:9 aspect ratio</h5>
              <h6 class="card-subtitle mb-2 text-muted">images for 16:9 aspect ratio</h6>
              <p class="card-text">Resize images to all aspect ratio sizes</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
<!-- Card with titles, buttons, and links -->
<div class="card container bg-transparent   col-lg-4 ">
<div style="text-align:center;">
<a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1327140.3&subid=0&type=4"><IMG border="0"   alt="GAMIVO" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1327140.3&subid=0&type=4&gridnum=13"></a> 
 </div>
</div><!-- End Card with titles, buttons, and links -->
          <!-- Card with titles, buttons, and links -->
<div class="card container bg-transparent   col-lg-4 ">
<div style="text-align:center;">
<a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1160033.10002804&subid=0&type=4"><IMG border="0"   alt="Microsoft" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1160033.10002804&subid=0&type=4&gridnum=13"></a>        
  </div>
</div><!-- End Card with titles, buttons, and links -->
          </div>
          <div>
            
          
        </div>
        <p><strong>All your uploads are deleted automatically after 24 hours. We do not keep them.</strong></p>

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
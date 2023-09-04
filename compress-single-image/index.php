<?php
 session_start();
 include 'php/functions.php';
 if(isset($_SESSION['uploaded_file_path'])){
      $uploaded_file=$_SESSION['uploaded_file_path'];
 }
 else{
     $uploaded_file="placeholder.png";
 }

 if(isset($_SESSION['compressd_img'])){
     $compressd_img=$_SESSION['compressd_img'];
    
}
else{
    $compressd_img="php/uploads/germany.png";
}
$_SESSION['user']=generateRandomString();
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php';
display_head('compress Image For Free Online','toolske, toolske.com, picture compressr, compress your images online for free including resizing png images, resizing jpg images and resizing tiff images, no signup needed');
?>
<body>
   <?php include '../includes/header.php';?>
   <?php include '../includes/sidebar.php';?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>compress Images</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Toolske.com</a></li>
          <li class="breadcrumb-item active">compress Images</li>
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

           <h2>Upload your Image to compress</h2> <br>


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
<div  class="">
          <div class="text-center" id="download-link">
            <h3 class="text-success">Your Download Link Will Appear Here.</h3>
          </div>
            <div class=" social-links mt-2">
                Check Our Online Profiles
                <a href="https://twitter.com/Toolskecom" target="_blank" class=""><i class="bi bi-twitter"></i>Twitter |</a>
                <a href="https://www.tiktok.com/@eliudmitau" target="_blank" class=""><i class="bi bi-tiktok"></i>Tiktok  |</a>
                <a href="https://www.youtube.com/channel/UCo1pKQOzTy0wU3WyOAD3PKQ" target="_blank" class=""><i class="bi bi-youtube"></i>Youtube  |</a>
                <a href="https://linktr.ee/eliud_mitau?subscribe" target="_blank" class=""><i class="bi bi-linktree"></i>Linktree  |</a>
</div>  
</div>
          
           </div>   
           <div class="ad-big">
           <div style="text-align:center;">
<a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1234368.25&subid=0&type=4"><IMG border="0"   alt="Quizplus for an A+" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1234368.25&subid=0&type=4&gridnum=0"></a>
</div>
</div>
<div class="ad-small">
<div style="text-align:center;">
<a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI%2aM8&offerid=1234368.6&bids=1234368.6&subid=0&type=4"><IMG border="0" alt="Quizplus for an A&#43;" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI%2aM8&offerid=1234368.6&bids=1234368.6&subid=0&type=4&gridnum=14"></a>
</div>
</div> 
          </div>
          <div>
          <h2>How To compress Images Online For Free-No Sign Up Needed</h2>
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
                    <h5 class="card-title text-center ">compress</h5>
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
              <h5 class="card-title animated">compress Jpeg files </h5>
              <h6 class="card-subtitle mb-2 text-muted">JPG,JPEG</h6>
              <p class="card-text">A free online tool for resizing jpeg files</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
           
                <!-- Card with titles, buttons, and links -->
                <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">compress PNG files </h5>
              <h6 class="card-subtitle mb-2 text-muted">PNG</h6>
              <p class="card-text">A free online tool for resizing PNG files</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
                <!-- Card with titles, buttons, and links -->
                <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">compress JFIF files </h5>
              <h6 class="card-subtitle mb-2 text-muted">JFIF</h6>
              <p class="card-text">A free online tool for resizing JFIF files</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">compress webp images</h5>
              <h6 class="card-subtitle mb-2 text-muted">WEBP</h6>
              <p class="card-text">A free online tool for resizing webp files</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">compress TIFF images</h5>
              <h6 class="card-subtitle mb-2 text-muted">TIFF</h6>
              <p class="card-text">A free online tool for resizing TIFF files</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">compress avif images</h5>
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
              <h5 class="card-title animated">compress images For 16:9 aspect ratio</h5>
              <h6 class="card-subtitle mb-2 text-muted">images for 16:9 aspect ratio</h6>
              <p class="card-text">compress images to all aspect ratio sizes</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
           
                <!-- Card with titles, buttons, and links -->
                <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">compress for Facebook </h5>
              <h6 class="card-subtitle mb-2 text-muted">Facebook</h6>
              <p class="card-text">A free social media image compressr for facebook</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
                <!-- Card with titles, buttons, and links -->
                <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">compress for Twitter </h5>
              <h6 class="card-subtitle mb-2 text-muted">Twitter</h6>
              <p class="card-text">A free social media image compressr for Twitter</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">compress for Linkedin </h5>
              <h6 class="card-subtitle mb-2 text-muted">Linkedin</h6>
              <p class="card-text">A free social media image compressr for Linkedin</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">compress for Pintrest </h5>
              <h6 class="card-subtitle mb-2 text-muted">Pintrest</h6>
              <p class="card-text">A free social media image compressr for Pintrest</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">compress for Tumblr </h5>
              <h6 class="card-subtitle mb-2 text-muted">Tumblr</h6>
              <p class="card-text">A free social media image compressr for Tumblr</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
            <!-- Card with titles, buttons, and links -->
            <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">compress for Youtube </h5>
              <h6 class="card-subtitle mb-2 text-muted">Youtube</h6>
              <p class="card-text">A free social media image compressr for Youtube</p>
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
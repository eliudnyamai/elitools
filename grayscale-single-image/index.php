<?php
 session_start();
 include 'php/functions.php';
 if(isset($_SESSION['uploaded_file_path'])){
      $uploaded_file=$_SESSION['uploaded_file_path'];
 }
 else{
     $uploaded_file="placeholder.png";
 }

 if(isset($_SESSION['grayscaled_img'])){
     $grayscaled_img=$_SESSION['grayscaled_img'];
    
}
else{
    $grayscaled_img="php/uploads/germany.png";
}
$_SESSION['user']=generateRandomString();
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php';
display_head('grayscale Image For Free Online','toolske, toolske.com, picture grayscaler, grayscale your images online for free including grayscaling png images, grayscaling jpg images and grayscaling tiff images, no signup needed');
?>
<body>
   <?php include '../includes/header.php';?>
   <?php include '../includes/sidebar.php';?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>grayscale Image</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Toolske.com</a></li>
          <li class="breadcrumb-item active">grayscale Image</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<!-- *********** -->
<div class="overlay" id="overlay"></div>
    <div class="text-center text-success rounded border border-success border-3 centered-div" id="centeredDiv">
        <!-- Content for the centered div goes here -->
        <h3 class="text-success">grayscaling In Progress <small class="text-muted">Big Images Will Take Some Time</small></h3>
        <img class="loader-img  img-fluid" src="assets/img/loader-loading.gif" alt="loading-gif" srcset="">
        <div>As you wait check out our partner. Page will open in a new tab	&#128073;
          <a href="https://crst.co/ELIUDMIT" target="_blank">
            <img src="assets/img/careerist.png" alt="" srcset=""></a>
</div>
    </div>
    <!-- ************* -->
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
<div class="ad-big">
<div>
              <a target="_blank" href="https://kinsta.com?kaid=BNQBFXIKNLGZ"><img style="width:100%" src="assets/img/728x90 - secure - dark.jpg" /></a>
              </div>
</div>
<div class="ad-small">
<div style="text-align:center;">
<a href="https://crst.co/ELIUDMIT" target="_blank"><img style="width:90%; align:center" src="assets/img/careerist-mobile.jpg" alt="" srcset=""></a>
</div>
</div> <br>
           <h2 class="text-center">Upload Your Image To grayscale<small class="text-muted"><a target="_blank"  href="/blog/all-image-formats-and-their-file-samples/"> >>Get File Samples To Test<<</a></small></h2> <br>


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
          <div class="text-center p-2" id="download-link">
            <h3 class="text-success">Your Download Link Will Appear Here.</h3>
          </div>
            <div class=" text-center social-links mt-2">
                Check Our Online Profiles
                <a href="https://twitter.com/Toolskecom" target="_blank" class=""><i class="bi bi-twitter"></i>Twitter |</a>
                <a href="https://www.tiktok.com/@eliudmitau" target="_blank" class=""><i class="bi bi-tiktok"></i>Tiktok  |</a>
                <a href="https://www.youtube.com/channel/UCo1pKQOzTy0wU3WyOAD3PKQ" target="_blank" class=""><i class="bi bi-youtube"></i>Youtube  |</a>
                <a href="https://linktr.ee/eliud_mitau?subscribe" target="_blank" class=""><i class="bi bi-linktree"></i>Linktree  |</a>
</div>  
</div>
          
           </div>   
           
          </div>
          <div>
          <h2>How To grayscale Images Online For Free-No Sign Up Needed</h2>
          <div class="row align-items-top">
                  <div class="col-12 col-md-4">
                  <!-- Card with an image on bottom -->
                  <div class="">
                  <img src="assets/img/one.png" class="card-img-bottom" alt="...">
                    <h5 class="card-title text-center">Choose Image</h5>
                  </div><!-- End Card with an image on bottom -->
                  </div>
                
                  <div class="col-12 col-md-4">
                   <!-- Card with an image on bottom -->
                   <div class="">
                  <img src="assets/img/two.png" class="card-img-bottom" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center ">grayscale</h5>
                  </div>
                  </div><!-- End Card with an image on bottom -->
                  </div>
                  <div class="col-12 col-md-4">
                       <!-- Card with an image on bottom -->
                  <div class="">
                  <img src="assets/img/three.png" class="card-img-bottom" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Download </h5>
                  </div>
                  </div><!-- End Card with an image on bottom -->
                  </div>
              </div>
            </div>
          </div><!-- End Default Card -->  
<h3>Supported Image types by the grayscaling tool:</h3>

<div class="row mx-auto align-items-top">
  

                <!-- Card with titles, buttons, and links -->
          <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">grayscale Jpeg files </h5>
              <h6 class="card-subtitle mb-2 text-muted">JPG,JPEG</h6>
              <p class="card-text">A free online tool for grayscaling jpeg files</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
           
                <!-- Card with titles, buttons, and links -->
                <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">grayscale PNG files </h5>
              <h6 class="card-subtitle mb-2 text-muted">PNG</h6>
              <p class="card-text">A free online tool for grayscaling PNG files</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
                <!-- Card with titles, buttons, and links -->
                <div class="card container  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">grayscale JFIF files </h5>
              <h6 class="card-subtitle mb-2 text-muted">JFIF</h6>
              <p class="card-text">A free online tool for grayscaling JFIF files</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">grayscale webp images</h5>
              <h6 class="card-subtitle mb-2 text-muted">WEBP</h6>
              <p class="card-text">A free online tool for grayscaling webp files</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">grayscale TIFF images</h5>
              <h6 class="card-subtitle mb-2 text-muted">TIFF</h6>
              <p class="card-text">A free online tool for grayscaling TIFF files</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">grayscale avif images</h5>
              <h6 class="card-subtitle mb-2 text-muted">AVIF</h6>
              <p class="card-text">A free online tool for grayscaling AVIF files</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

          </div>
<div class="row mx-auto align-items-top">
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
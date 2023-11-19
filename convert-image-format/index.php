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
display_head('Convert image to any format for free','toolske, toolske.com, Convert image  , convert  any image to png  , convert any image to png  ,  convert any image to webp, convert any image to wbmp in bulk');
?>
<body>
   <?php include '../includes/header.php';?>
   <?php include '../includes/sidebar.php';?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Convert Single Image Format</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Toolske.com</a></li>
          <li class="breadcrumb-item active">Convert Image Format</li>
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
        <div>
              <a target="_blank" href="https://kinsta.com/wordpress-hosting/?kaid=BNQBFXIKNLGZ"><img style="width:100%" src="assets/img/728x90 - premium - dark.png" /></a>
              </div>
           <h2>Upload your image to Convert <small class="text-muted"><a href="/anyformat-convert">Or Convert In Bulk</a></small></h2> <br>
<div class="row">
            <div class="card-body col-md-6">
              <h5 class="card-title">Upload Your Image to Convert </h5>
              <form id="uploadForm" action="php/upload.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <div class="">
                  <input class="form-control" style="" required type="file" name="file">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="">
                    <select class="form-select" name="image-format" id="image-format" aria-label="Default select example">
                    <option value="PNG">PNG</option>
                    <option value="JPG">JPG</option>
                    <option value="webp">Webp</option>
                    <option value="tiff">TIFF</option>
                    <option value="wbmp">WBMP</option>
                    <option value="avif">AVIF</option>

                    </select>
                  </div>
                  <div class="row mt-3 mb-3">
                  <div class="col-sm-10">
                    <button id="convert" type="submit" class="btn btn-primary">Convert</button>
                  </div>
                </div>
</form>
<a href="/blog/all-image-formats-and-their-file-samples/" target="_blank" rel="noopener noreferrer">>>Access Image Samples To Test<<</a>

</div>
</div>

<div id="" class="col-md-6">
  <h5 class="card-title" >The Download Will Appear Here</h5>
  <div id="zip">

</div>
   <div id="zip-success" class="alert mt-3 alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                Your Image is ready for download. close this to start afresh
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
<div class=" col-12 mt-3">
  
</div>
            <div class="card-body">
              <h5 class="animated  card-title">How to Convert an image to Any Format - 4 easy steps </h5>
              <div class="row align-items-top">
                  <div class="col-12 col-md-3">
                  <!-- Card with an image on bottom -->
                  <div class="">
                  <img src="assets/img/one.png" class="card-img-bottom" alt="...">
                    <h5 class="card-title text-center">Choose file</h5>
                  </div><!-- End Card with an image on bottom -->
                  </div>
                  <div class="col-12 col-md-3">
                       <!-- Card with an image on bottom -->
                  <div class="">
                  <img src="assets/img/two.png" class="card-img-bottom" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Choose Format</h5>
                  </div>
                  </div><!-- End Card with an image on bottom -->
                  </div>
                  <div class="col-12 col-md-3">
                   <!-- Card with an image on bottom -->
                   <div class="">
                  <img src="assets/img/three.png" class="card-img-bottom" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center ">Convert</h5>
                  </div>
                  </div><!-- End Card with an image on bottom -->
                  </div>
                  <div class="col-12 col-md-3">
                       <!-- Card with an image on bottom -->
                  <div class="">
                  <img src="assets/img/four.png" class="card-img-bottom" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Download Image</h5>
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
              <h5 class="card-title animated">Convert image to PNG</h5>
              <h6 class="card-subtitle mb-2 text-muted">image to PNG</h6>
              <p class="card-text">Convert all types of images to PNG </p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
           
                <!-- Card with titles, buttons, and links -->
          <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Convert image to AVIF</h5>
              <h6 class="card-subtitle mb-2 text-muted">image to AVIF</h6>
              <p class="card-text">Convert all types of images to AVIF </p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
                <!-- Card with titles, buttons, and links -->
          <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Convert image to webp</h5>
              <h6 class="card-subtitle mb-2 text-muted">image to Webp</h6>
              <p class="card-text">Convert all types of images to webp </p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Convert image to wbmp</h5>
              <h6 class="card-subtitle mb-2 text-muted">image to Wbmp</h6>
              <p class="card-text">Convert all types of images to wbmp </p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Convert image to jpg</h5>
              <h6 class="card-subtitle mb-2 text-muted">image to jpg</h6>
              <p class="card-text">Convert all types of images to jpg </p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Convert image to tiff</h5>
              <h6 class="card-subtitle mb-2 text-muted">image to tiff</h6>
              <p class="card-text">Convert all types of images to tiff  </p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
          
           </div>
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
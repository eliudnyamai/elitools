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
display_head('Bulk Grayscale Images Online','toolske, toolske.com, grayscale multiple images, convert images to black and white');
?>
<body>
   <?php include '../includes/header.php';?>
   <?php include '../includes/sidebar.php';?>

   <!-- HTML code for the popup -->
<div id="popup" >
<button id="close-btn" style="">X</button>
  <h4>Be the first to know when we release a new tool</h4>
  <div class="text-info status"></div>						
  <form action="" id="subscribeForm" method="post">							
  <div class="col-12">
                  <label for="inputNanme4"  class="form-label">Your Name</label>
                  <input type="text" class="form-control"  name="name" id="name" >
                  <span class="text-danger hidden" id="nameError"></span>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="email">
                  <span class="text-danger hidden" id="emailError"></span>
                </div>
                <div class="text-center">
                  <button type="submit" name="subscribe" id="subscribe" class="btn btn-primary">Subscribe Now</button>
                </div> 
  </form>
</div>

<!-- JavaScript code to open and close the popup -->
<script>
if (document.cookie.indexOf("subemail") < 0) {
setTimeout(function() {
  document.getElementById("popup").style.display = "block";
}, 5000); // 5000ms = 5 seconds
}
document.getElementById("close-btn").addEventListener("click", function() {
  document.getElementById("popup").style.display = "none";
});
</script>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Bulk Grayscale Images</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Toolske.com</a></li>
          <li class="breadcrumb-item active">Bulk Grayscale Images</li>
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
            <div class="advert">

            </div>
           <h2>Upload your Images to convert to Grayscale</h2> <br>
<div class="row">
            <div class="card-body col-md-6">
              <h5 class="card-title">Upload Your Images to Grayscale </h5>
              <form id="uploadForm" action="php/upload.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <div class="">
                  <input class="form-control" style="" required type="file" name="files[]" multiple>
                  </div>
                </div>
                <div class="row mb-3">          
                  <div class="row mt-3 mb-3">
                  <div class="col-sm-10">
                    <button id="convert" type="submit" class="btn btn-primary">Grayscale</button>
                  </div>
                </div>
</form>
</div>
</div>

<div id="" class="col-md-6">
  <h5 class="card-title" >The zip with your files will appear here <span>If you upload too many files or files with a big bundle size, it will take longer. Please wait</span></h5>
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
                <a href="https://www.upwork.com/freelancers/~019e7ab551fe9fb113" target="_blank" class="text-white"><i class="bi bi-linktree"></i>Upwork|  </a>
</div>
                <button id="close" type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div id="zip-fail" class="alert mt-3 alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                
      </div>
</div>
<div class=" col-12 mt-3">
            <div class="card-body">
              <h5 class="animated  card-title">How to Grayscale Images online in bulk - 3 easy steps </h5>
              <div class="row align-items-top">
                  <div class="col-12 col-md-4">
                  <!-- Card with an image on bottom -->
                  <div class="">
                  <img src="assets/img/one.png" class="card-img-bottom" alt="...">
                    <h5 class="card-title text-center">Choose files</h5>
                  </div><!-- End Card with an image on bottom -->
                  </div>
                  <div class="col-12 col-md-4">
                       <!-- Card with an image on bottom -->
                  <div class="">
                  <img src="assets/img/two.png" class="card-img-bottom" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Grayscale</h5>
                  </div>
                  </div><!-- End Card with an image on bottom -->
                  </div>
                  <div class="col-12 col-md-4">
                   <!-- Card with an image on bottom -->
                   <div class="">
                  <img src="assets/img/three.png" class="card-img-bottom" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center ">Download</h5>
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
              <h5 class="card-title animated">Grayscale PNG Images</h5>
              <h6 class="card-subtitle mb-2 text-muted">Grayscale PNG</h6>
              <p class="card-text">Grayscale PNG images for free online</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
           
                <!-- Card with titles, buttons, and links -->
          <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Grayscale Avif Images</h5>
              <h6 class="card-subtitle mb-2 text-muted">Grayscale AVIF</h6>
              <p class="card-text">Grayscale Avif images for free online</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
                <!-- Card with titles, buttons, and links -->
          <div class="card col-lg-4 ">
          <div class="card-body">
              <h5 class="card-title animated">Grayscale webp Images</h5>
              <h6 class="card-subtitle mb-2 text-muted">Grayscale webp</h6>
              <p class="card-text">Grayscale webp images for free online</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
               <div class="card-body">
              <h5 class="card-title animated">Grayscale jpeg Images</h5>
              <h6 class="card-subtitle mb-2 text-muted">Grayscale jpg</h6>
              <p class="card-text">Grayscale jpeg images for free online</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
               <div class="card-body">
              <h5 class="card-title animated">Grayscale Tiff Images</h5>
              <h6 class="card-subtitle mb-2 text-muted">Grayscale Tiff</h6>
              <p class="card-text">Grayscale Tiff images for free online</p>
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
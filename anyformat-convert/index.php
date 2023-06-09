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
display_head('Convert images to any format for free','toolske, toolske.com, Convert images in bulk, convert  any image to png in bulk, convert any image to png in bulk,  convert any image to webp, convert any image to wbmp in bulk');
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
      <h1>Convert Image Formats</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Toolske.com</a></li>
          <li class="breadcrumb-item active">Convert Image Formats</li>
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
           <h2>Upload your Images to Convert</h2> <br>
<div class="row">
            <div class="card-body col-md-6">
              <h5 class="card-title">Upload Your Images to Convert </h5>
              <form id="uploadForm" action="php/upload.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <div class="">
                  <input class="form-control" style="" required type="file" name="files[]" multiple>
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
</div>
                <button id="close" type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div id="zip-fail" class="alert mt-3 alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                
      </div>
</div>
<div class=" col-12 mt-3">
  <div class="ad-big ">
  <a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1160033.10002749&subid=0&type=4"><IMG border="0"   alt="Microsoft" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1160033.10002749&subid=0&type=4&gridnum=16"></a>
  </div>
  <div class="mx-auto ad-small">
  <a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1160033.10002744&subid=0&type=4"><IMG border="0"   alt="Microsoft" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1160033.10002744&subid=0&type=4&gridnum=13"></a> 
 </div>
            <div class="card-body">
              <h5 class="animated  card-title">How to Convert Images to Any Format in bulk - 4 easy steps </h5>
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
              <h5 class="card-title animated">Convert images to PNG</h5>
              <h6 class="card-subtitle mb-2 text-muted">images to PNG</h6>
              <p class="card-text">Convert all types of images to PNG in bulk</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
           
                <!-- Card with titles, buttons, and links -->
          <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Convert images to AVIF</h5>
              <h6 class="card-subtitle mb-2 text-muted">images to AVIF</h6>
              <p class="card-text">Convert all types of images to AVIF in bulk</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
                <!-- Card with titles, buttons, and links -->
          <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Convert images to webp</h5>
              <h6 class="card-subtitle mb-2 text-muted">images to Webp</h6>
              <p class="card-text">Convert all types of images to webp in bulk</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Convert images to wbmp</h5>
              <h6 class="card-subtitle mb-2 text-muted">images to Wbmp</h6>
              <p class="card-text">Convert all types of images to wbmp in bulk</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Convert images to jpg</h5>
              <h6 class="card-subtitle mb-2 text-muted">images to jpg</h6>
              <p class="card-text">Convert all types of images to jpg IN BULK</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Convert images to tiff</h5>
              <h6 class="card-subtitle mb-2 text-muted">images to tiff</h6>
              <p class="card-text">Convert all types of images to tiff in bulk</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
          
           <!-- Card with titles, buttons, and links -->
           <div class="card col-lg-4 ">
           <a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1160033.10002816&subid=0&type=4"><IMG border="0"   alt="Microsoft Workplace Discount Program" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1160033.10002816&subid=0&type=4&gridnum=13"></a>
          </div><!-- End Card with titles, buttons, and links -->
           <!-- Card with titles, buttons, and links -->
           <div class="card col-lg-4 ">
           <a href="https://click.linksynergy.com/link?id=MyzlSQhI*M8&offerid=1160033.245422769478538&type=2&murl=https%3A%2F%2Fwww.microsoft.com%2Fen-us%2Fstore%2Fp%2Fstriker-zone-war-shooting-games%2F9PPFRZB5MJRQ"><IMG border=0 src="https://store-images.s-microsoft.com/image/apps.4439.14325729045794215.f6d41da9-4999-4d14-8307-607ab94fbcb5.4c3d87a4-2d5a-4880-b50a-a62c1bb93553" ></a><IMG border=0 width=1 height=1 src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1160033.245422769478538&type=2&subid=0" >
                    </div><!-- End Card with titles, buttons, and links -->
           <!-- Card with titles, buttons, and links -->
           <div class="card col-lg-4 ">
           <a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1234368.15&subid=0&type=4"><IMG border="0"   alt="Quizplus for an A+" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1234368.15&subid=0&type=4&gridnum=13"></a>          </div><!-- End Card with titles, buttons, and links -->

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
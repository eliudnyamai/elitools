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
display_head('Bulk verify emails Online','toolske, toolske.com, grayscale multiple images, convert images to black and white');
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
      <h1>Bulk verify emails</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Toolske.com</a></li>
          <li class="breadcrumb-item active">Bulk verify emails</li>
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
           <h2>Upload A CSV With Emails To Verify</h2> <br>
<div class="row">
            <div class="card-body col-md-6">
              <h5 class="card-title">Upload Your CSV <span>As long as the csv has an email somewhere the email will be verified</span></h5>
              <form id="uploadForm" action="php/upload.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <div class="">
                  <input class="form-control" style=""name="file" required type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                  </div>
                </div>
                <div class="row mb-3">          
                  <div class="row mt-3 mb-3">
                  <div class="col-sm-10">
                    <button id="verify" type="submit" class="btn btn-primary">Verify Emails</button>
                  </div>
                </div>
</form>
</div>
</div>

<div id="" class="col-md-6">
<script data-cfasync="false" type="text/javascript" src="//predictivadvertising.com/a/display.php?r=7270410"></script>
</div>

<div style="overflow-x:auto; max-height: 300px;">
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Your Verified Emails Will Appear Here</h5>
  <table class="table table-striped" id="csvTable">

</table>
</div>

</div>
</div>
<div id="zip">

</div>
<div id="zip-success" class="alert mt-3 alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                Your zip is ready for download. close this to start afresh
              
                <button id="close" type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div id="zip-fail" class="alert mt-3 alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                
      </div>
<div class=" col-12 mt-3">
<div class="ad-big ">
<div style="text-align:center;">
  <a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1160033.10002749&subid=0&type=4"><IMG border="0"   alt="Microsoft" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1160033.10002749&subid=0&type=4&gridnum=16"></a>
  </div>
</div>
  <div class="ad-small">
  <div style="text-align:center;">

  <a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1160033.10002744&subid=0&type=4"><IMG border="0"   alt="Microsoft" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1160033.10002744&subid=0&type=4&gridnum=13"></a> 
 </div>
</div>

            <div class="card-body">
              <h5 class="animated  card-title">How to verify emails online in bulk - 3 easy steps </h5>
              <div class="row align-items-top">
                  <div class="col-12 col-md-4">
                  <!-- Card with an image on bottom -->
                  <div class="">
                  <img src="assets/img/one.png" class="card-img-bottom" alt="...">
                    <h5 class="card-title text-center">Upload CSV file</h5>
                  </div><!-- End Card with an image on bottom -->
                  </div>
                  <div class="col-12 col-md-4">
                       <!-- Card with an image on bottom -->
                  <div class="">
                  <img src="assets/img/two.png" class="card-img-bottom" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Click verify emails</h5>
                  </div>
                  </div><!-- End Card with an image on bottom -->
                  </div>
                  <div class="col-12 col-md-4">
                   <!-- Card with an image on bottom -->
                   <div class="">
                  <img src="assets/img/three.png" class="card-img-bottom" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center ">Download CSV report</h5>
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
<!-- Card with titles, buttons, and links -->
<div class="card container bg-transparent shadow-none  col-lg-4 ">
<div style="text-align:center;">

<a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1327140.3&subid=0&type=4"><IMG border="0"   alt="GAMIVO" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1327140.3&subid=0&type=4&gridnum=13"></a> 
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
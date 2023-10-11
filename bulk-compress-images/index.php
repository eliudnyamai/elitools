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
display_head('Bulk compress Images Online','toolske, toolske.com, batch compress images, reduce image size, compress multiple images');
?>
<body>
   <?php include '../includes/header.php';?>
   <?php include '../includes/sidebar.php';?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Bulk compress Images</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Toolske.com</a></li>
          <li class="breadcrumb-item active">Bulk compress Images</li>
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
              <a target="_blank" href="https://kinsta.com?kaid=BNQBFXIKNLGZ"><img style="width:100%" src="assets/img/728x90 - optimized - dark.jpg" /></a>
              </div>
           <h2>Upload your Images to compress</h2> <br>
<div class="row">
            <div class="card-body col-md-6">
              <h5 class="card-title">Upload Your Images to compress <small class="text-muted"><a href="/compress-single-image">>>Compress A Single Image Instead<<</a></small> </h5>
              <form id="uploadForm" action="php/upload.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <div class="">
                  <input class="form-control" style="" required type="file" name="files[]" multiple>
                  </div>
                </div>
                <div class="row mb-3">          
                  <div class="row mt-3 mb-3">
                  <div class="col-sm-10">
                    <button id="convert" type="submit" class="btn btn-primary">compress Images</button>
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
                <button id="close" type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                <div class=" social-links mt-2">
  Liked It? Check Our Online Profiles
                <a href="https://twitter.com/Toolskecom" target="_blank" class="text-white"><i class="bi bi-twitter"></i>Twitter |</a>
                <a href="https://www.tiktok.com/@eliudmitau" target="_blank" class="text-white"><i class="bi bi-tiktok"></i>Tiktok  |</a>
                <a href="https://www.youtube.com/channel/UCo1pKQOzTy0wU3WyOAD3PKQ" target="_blank" class="text-white"><i class="bi bi-youtube"></i>Youtube  |</a>
                <a href="https://linktr.ee/eliud_mitau?subscribe" target="_blank" class="text-white"><i class="bi bi-linktree"></i>Linktree  |</a>
</div>
              </div>
      <div id="zip-fail" class="alert mt-3 alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                
      </div>
</div>
<div class="row my-5">
                <div class="col-md-6 border border-info border-2 rounded-start">
                    <p><Strong>Bulk Compress Images:</strong> Our Bulk Image Compressor simplifies the process of reducing image file sizes efficiently.</p> <p>Follow these three steps: Choose files, compress, and download. </p>Supported formats are PNG, AVIF, WebP, JPEG, and TIFF.                </div>
                <div class="col-md-6">
                With this tool, you can effortlessly decrease the size of multiple images, making them ideal for web use or conserving storage space. Whether you have a large batch of images for your website, blog, or personal collection, our Bulk Images Compressor simplifies the compression process, ensuring your images load quickly and efficiently without sacrificing quality.
                </div>
              </div>  
            <div class="card-body">
            <div class="ad-big">
            <div style="text-align:center;">
            <a target="_blank" href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI%2aM8&offerid=1410710.32&bids=1410710.32&subid=0&type=4"><IMG border="0" alt="Careerist" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI%2aM8&offerid=1410710.32&bids=1410710.32&subid=0&type=4&gridnum=0"></a>
</div>
</div>
<div class="ad-small">
<div style="text-align:center;">
<a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1327140.19&subid=0&type=4"><IMG border="0"   alt="GAMIVO" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1327140.19&subid=0&type=4&gridnum=13"></a>
</div>
</div>
              <h5 class="animated  card-title">How to compress Images online in bulk - 3 easy steps </h5>
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
                    <h5 class="card-title text-center">compress</h5>
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
              <h5 class="card-title animated">compress PNG Images</h5>
              <h6 class="card-subtitle mb-2 text-muted">compress PNG</h6>
              <p class="card-text">compress PNG images for free online</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
           
                <!-- Card with titles, buttons, and links -->
          <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">compress Avif Images</h5>
              <h6 class="card-subtitle mb-2 text-muted">compress AVIF</h6>
              <p class="card-text">compress Avif images for free online</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
                <!-- Card with titles, buttons, and links -->
          <div class="card col-lg-4 ">
          <div class="card-body">
              <h5 class="card-title animated">compress webp Images</h5>
              <h6 class="card-subtitle mb-2 text-muted">compress webp</h6>
              <p class="card-text">compress webp images for free online</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
               <div class="card-body">
              <h5 class="card-title animated">compress jpeg Images</h5>
              <h6 class="card-subtitle mb-2 text-muted">compress jpg</h6>
              <p class="card-text">compress jpeg images for free online</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
               <div class="card-body">
              <h5 class="card-title animated">compress Tiff Images</h5>
              <h6 class="card-subtitle mb-2 text-muted">compress Tiff</h6>
              <p class="card-text">compress Tiff images for free online</p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
<!-- Card with titles, buttons, and links -->
<div class="card container bg-transparent shadow-none   col-lg-4 ">
<div style="text-align:center;">

           <a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1321193.407&subid=0&type=4"><IMG border="0"   alt="Microsoft for Business" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1321193.407&subid=0&type=4&gridnum=12"></a>          
          </div>
           </div><!-- End Card with titles, buttons, and links -->

          </div>
          <div>
          
        </div>
        <a href="https://www.producthunt.com/products/bulk-images-compressor/reviews?utm_source=badge-product_review&utm_medium=badge&utm_souce=badge-bulk&#0045;images&#0045;compressor" target="_blank"><img src="https://api.producthunt.com/widgets/embed-image/v1/product_review.svg?product_id=537081&theme=light" alt="Bulk&#0032;Images&#0032;Compressor - Compress&#0032;with&#0032;zero&#0032;quality&#0032;loss | Product Hunt" style="width: 250px; height: 54px;" width="250" height="54" /></a>  
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
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
<?php include 'includes/head.php';

display_head('Free Online Tools','toolske, toolske.com, Resize an image online for free,you can resizea jpg image online for free, resize a photo online for free, resize a png image online for free,resize a tiff image online for free. Text to sql, No signup needed');
?>
<body>
   <?php include 'includes/header.php';?>
   <?php include 'includes/sidebar.php';?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Home</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Toolske.com</a></li>
          <li class="breadcrumb-item active">Home</li>
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
            <!-- Default Card -->
            <div class=" col-12 mt-3">
            <div class="card-body">
              <h5 class="animated  card-title">Welcome To Toolske.com!!</h5>
              <div>
              <a target="_blank" href="https://kinsta.com?kaid=BNQBFXIKNLGZ"><img style="width:100%" src="assets/img/728x90 - premium - dark.png" /></a>
              </div>
              <div class="row align-items-top">
                  <div class="col-3">
                  <!-- Card with an image on bottom -->
                  <div class="">
                  <img src="assets/img/time.png" class="card-img-bottom" alt="...">
                    <h5 class="card-title text-center">Time Saving</h5>
                  </div><!-- End Card with an image on bottom -->
                  </div>
                  <div class="col-3">
                       <!-- Card with an image on bottom -->
                  <div class="">
                  <img src="assets/img/money.png" class="card-img-bottom" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Free</h5>
                  </div>
                  </div><!-- End Card with an image on bottom -->
                  </div>
                  <div class="col-3">
                   <!-- Card with an image on bottom -->
                   <div class="">
                  <img src="assets/img/quick.png" class="card-img-bottom" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Quick</h5>
                  </div>
                  </div><!-- End Card with an image on bottom -->
                  </div>
                  <div class="col-3">
                       <!-- Card with an image on bottom -->
                  <div class="">
                  <img src="assets/img/easy.png" class="card-img-bottom" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Easy</h5>
                  </div>
                  </div><!-- End Card with an image on bottom -->
                  </div>
              </div>
            </div>
          </div><!-- End Default Card -->
          <div class="text-center mb-5">
          <a href="https://www.producthunt.com/posts/toolske-2?utm_source=badge-featured&utm_medium=badge&utm_souce=badge-toolske&#0045;2" target="_blank"><img src="https://api.producthunt.com/widgets/embed-image/v1/featured.svg?post_id=414226&theme=light" alt="toolske - A&#0032;collection&#0032;of&#0032;free&#0032;online&#0032;tools | Product Hunt" style="width: 250px; height: 54px;" width="250" height="54" /></a>
          </div>
          <div class="row mx-auto align-items-top">
 <!-- Card with titles, buttons, and links -->
   <div class="card container shadow-none bg-transparent col-lg-4 ">
            <div class="card-body">
            <div style="text-align:center;">
            <div style="text-align:center;">
            <div style="text-align:center;">
                  <a href="https://www.aweber.com/easy-email.htm?id=544297&utm_source=advocate&utm_medium=banner&utm_campaign=static&utm_content=free">
                  <img src="https://www.aweber.com/banners/free/aweber-free-250x250.jpg" alt="AWeber Free: Email marketing for free. No credit card required." style="border:none;" /></a>
                  </div>
              </div>
            </div>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
          <!-- Card with titles, buttons, and links -->
   <div class="card container shadow-none bg-transparent col-lg-4 ">
   <div style="text-align:center;">
            <a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI%2aM8&offerid=1321193.58&bids=1321193.58&subid=0&type=4"><IMG border="0" alt="Microsoft365 for Business" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI%2aM8&offerid=1321193.58&bids=1321193.58&subid=0&type=4&gridnum=13"></a>                
            </div>
          </div><!-- End Card with titles, buttons, and links -->
           <!-- Card with titles, buttons, and links -->
   <div class="card container shadow-none bg-transparent col-lg-4 ">
   <div style="text-align:center;">

            <a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI%2aM8&offerid=1321193.109&bids=1321193.109&subid=0&type=4"><IMG border="0" alt="Microsoft365 for Business" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI%2aM8&offerid=1321193.109&bids=1321193.109&subid=0&type=4&gridnum=13"></a>   
            </div>
            </div><!-- End Card with titles, buttons, and links -->

                <!-- Card with titles, buttons, and links -->
          <div class="card  col-lg-4 ">
            <div class="card-body">
            <span class="badge rounded-pill bg-info">AD</span>

              <h5 class="card-title animated">Free Online Store Builder</h5>
              <h6 class="card-subtitle mb-2 text-muted">Ecwid</h6>
              <p class="card-text">Become the next online success story — sell anything, anywhere, to anyone.</p>
              <p class="card-text"><a href="http://go.ecwid.com/6s66z2" class="btn btn-primary">Start Selling!!</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
                <!-- Card with titles, buttons, and links -->
          <div class="card  col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Free Online Image Resizer</h5>
              <h6 class="card-subtitle mb-2 text-muted">Resize Images</h6>
              <p class="card-text">Resize all types of images you want online. Use the preset social media image sizes to make your work fast.</p>
              <p class="card-text"><a href="/resize-image" class="btn btn-primary">Resize Now!!</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
           
                <!-- Card with titles, buttons, and links -->
          <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Free Text To SQL Converter</h5>
              <h6 class="card-subtitle mb-2 text-muted">Convert Text To SQL</h6>
              <p class="card-text">English text to SQL for free. Describe what you would like your query to do</p>
              <p class="card-text"><a href="/text2sql" class="btn btn-primary">Convert Now!!</a></p>
            </div>
          </div><!-- End Card with titles, butt, and links -->

          <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Convert Single Image Format</h5>
              <h6 class="card-subtitle mb-2 text-muted">Convert Image</h6>
              <p class="card-text">Convert an image to various formats for free online. Eg png to jpg, png to bmp, tiff to png etc.</p>
              <p class="card-text"><a href="/convert-image-format" class="btn btn-primary" disabled>Convert Single Image!!</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
          <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Bulk Convert Images</h5>
              <h6 class="card-subtitle mb-2 text-muted">Convert Images</h6>
              <p class="card-text">Convert images to various formats for free online. Eg png to jpg, png to bmp, tiff to png etc.</p>
              <p class="card-text"><a href="/bulk-convert-images" class="btn btn-primary" disabled>Convert Now!!</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

                <!-- Card with titles, buttons, and links -->
                <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Bulk Image Resizer</h5>
              <h6 class="card-subtitle mb-2 text-muted">Bulk Resize Images</h6>
              <p class="card-text">Bulk resize PNG, JPG, WEBP, AVIF, TIFF and WBMP files online for free</p>
              <p class="card-text"><a href="/bulk-resize-images" class="btn btn-primary" disabled>Bulk Resize</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->

           <!-- Card with titles, buttons, and links -->
           <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Bulk Grayscale Images</h5>
              <h6 class="card-subtitle mb-2 text-muted">Grayscale Images Online</h6>
              <p class="card-text">Bulk Grayscale PNG, JPG, WEBP, AVIF, TIFF and WBMP files online for free</p>
              <p class="card-text"><a href="/bulk-grayscale-images" class="btn btn-primary" disabled>Bulk Grayscale</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
<!-- Card with titles, buttons, and links -->
<div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Compress Single Image</h5>
              <h6 class="card-subtitle mb-2 text-muted">Compress Image Online</h6>
              <p class="card-text">Compress a PNG, JPG, WEBP, AVIF, TIFF and WBMP files online for free</p>
              <p class="card-text"><a href="/compress-single-image" class="btn btn-primary" disabled>Compress Single Image</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
           <!-- Card with titles, buttons, and links -->
           <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Bulk Compress Images</h5>
              <h6 class="card-subtitle mb-2 text-muted">Compress Images Online</h6>
              <p class="card-text">Bulk Compress PNG, JPG, WEBP, AVIF, TIFF and WBMP files online for free</p>
              <p class="card-text"><a href="/bulk-compress-images" class="btn btn-primary" disabled>Compress Images</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
                 <!-- Card with titles, buttons, and links -->
                 <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Single Email Verifier</h5>
              <h6 class="card-subtitle mb-2 text-muted">Verify an Email  Online</h6>
              <p class="card-text">Verify an email online for free</p>
              <p class="card-text"><a href="/verify-single-email" class="btn btn-primary" disabled>Verify Single Email</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
           <!-- Card with titles, buttons, and links -->
           <div class="card col-lg-4 ">
            <div class="card-body">
              <h5 class="card-title animated">Bulk Email Verifier</h5>
              <h6 class="card-subtitle mb-2 text-muted">Verify Emails In Bulk Online</h6>
              <p class="card-text">Bulk verify emails online for free</p>
              <p class="card-text"><a href="/bulk-email-verifier" class="btn btn-primary" disabled>Verify Emails</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
           <!-- Card with titles, buttons, and links -->
           <div class="card col-lg-4 bg-transparent shadow-none ">
           <div style="text-align:center;">
            <a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI%2aM8&offerid=1160033.10002816&bids=1160033.10002816&subid=0&type=4"><IMG border="0" alt="Microsoft Workplace Discount Program" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI%2aM8&offerid=1160033.10002816&bids=1160033.10002816&subid=0&type=4&gridnum=13"></a>    
            </div>
          </div><!-- End Card with titles, buttons, and links -->
            <!-- Card with titles, buttons, and links -->
            <div class="card col-lg-4 bg-transparent mx-auto shadow-none ">
            <div style="text-align:center;">

            <a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI%2aM8&offerid=1160033.10002268&bids=1160033.10002268&subid=0&type=4"><IMG border="0" alt="Microsoft Surface Book 3" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI%2aM8&offerid=1160033.10002268&bids=1160033.10002268&subid=0&type=4&gridnum=13"></a>           
            </div>
          </div><!-- End Card with titles, buttons, and links -->

              <div class=" p-3 d-flex justify-content-between flex-lg-row-reverse container-fluid blog-cto">
              <button class="breathing-button" class="floatleft"><a href="https://toolske.com/blog/">VISIT BLOG</a></button>
              </div> 
          </div>
       </div>
      </div><!-- End Left side columns -->
    </div>
  </div>
  


</section>
</main><!-- End #main -->
  <!-- ======= Footer ======= -->
 <?php include 'includes/footer.php'?>
</body>
</html>
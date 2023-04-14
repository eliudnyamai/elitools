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
          <div class="row mx-auto align-items-top">
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
              <h5 class="card-title animated">Any format converter</h5>
              <h6 class="card-subtitle mb-2 text-muted">Convert Images</h6>
              <p class="card-text">Convert images to various formats for free online. Eg png to jpg, png to bmp, tiff to png etc.</p>
              <p class="card-text"><a href="/anyformat-convert" class="btn btn-primary" disabled>Convert Now!!</a></p>
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
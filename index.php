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
display_head('Free Online Tools','Resize an image online for free,you can resizea jpg image online for free, resize a photo online for free, resize a png image online for free,resize a tiff image online for free. Text to sql, No signup needed');
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
              <div class="row">
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
          <div class="row container-fluid">
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Card with titles, buttons, and links -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title animated">Free Online Image Resizer</h5>
              <h6 class="card-subtitle mb-2 text-muted">Resize Images</h6>
              <p class="card-text">Resize all types of images you want online. Use the preset social media image sizes to make your work fast.</p>
              <p class="card-text"><a href="/resize-image" class="btn btn-primary">Resize Now!!</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <!-- Card with titles, buttons, and links -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title animated">Free Text To SQL Converter</h5>
              <h6 class="card-subtitle mb-2 text-muted">Convert Text To SQL</h6>
              <p class="card-text">English text to SQL for free. Describe what you would like your query to do</p>
              <p class="card-text"><a href="/text2sql" class="btn btn-primary">Convert Now!!</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <!-- Card with titles, buttons, and links -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title animated">Any format converter</h5>
              <h6 class="card-subtitle mb-2 text-muted">Convert Images</h6>
              <p class="card-text">Convert images to various formats for free online. Eg png to jpg, png to bmp, tiff to png etc.</p>
              <p class="card-text"><a href="#" class="btn btn-primary" disabled>Coming Soon</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
              </div>
              <div class=" p-3 d-flex flex-row-reverse container-fluid blog-cto">
              <button id="breathing-button" class="floatleft"><a href="https://toolske.com/blog/">VISIT BLOG</a></button>
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
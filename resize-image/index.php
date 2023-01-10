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
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Toolske.com|Free Online Tools</title>
  <meta content="" name="Free online tools">
  <meta content="" name="free, online, resize image, remove background,resize image online">
  <meta property='og:title' content='Free online tools'/>
  <meta property='og:image' content='https://toolske.com/sm-preview.png'/>
  <meta property='og:description' content='Free Online easy and quick to use tool.'/>
  <meta property='og:url' content='toolske.com'/>
  <meta property='og:image:width' content='1200' />
  <meta property='og:image:height' content='627' />
<!-- TYPE BELOW IS PROBABLY: 'website' or 'article' or look on https://ogp.me/#types -->
<meta property="og:type" content='website'/>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Toolske.com</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            Toolske.com
          </a>
        </li>
      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/resize-image">
          <i class="bi bi-image"></i>
          <span>Resize Image</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/contact.php">
          <span>Contact Us</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/privacy_policy.php">
          <span>Privacy Policy</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <span>Terms Of Service</span>
        </a>
      </li><!-- End Register Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Resize Images</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Toolske.com</a></li>
          <li class="breadcrumb-item active">Resize Images</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Reports -->
            <div class="col-12">       
        <div class="row tool">
            <!-- ShareThis BEGIN -->
            <div class="sharethis-inline-share-buttons"></div>
            <!-- ShareThis END -->
            <div class="advert">

            </div>
          <div style="min-height:200px;" class="col-md-12">
          
           <h2>Upload your Image to resize</h2> <br>
           <form id="upload-form" action="php/upload.php" enctype="multipart/form-data" method="post">
               <input type="file" required name="file" id="">
               <input type="submit" value="Upload" id="submit-img" name="submit">
           </form> <br>
           <div id="file-upload-error"></div>
           <div class="images">
               <div class="input-image">
                   <img id="uploaded_img" src="" alt="" srcset="">
                  
<!-- HTML code for the dropdown menu -->
<div id="social-media-presets" class="social-media-presets">
<div class="dropdown">
  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

  <button class="btn-presets facebook  btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <i class="fa fa-facebook-square" aria-hidden="true"></i>
Facebook
  </button>
  </a>
  <ul class="dropdown-menu">
      <button value="820x312" class="image-presets">820x312px(coverphoto-Desktop)</button>
      <button value="640x360" class="image-presets">640x360px(coverphoto-Mobile)</button>
      <button value="180x180" class="image-presets">180x180px(profilephoto-Desktop)</button>
      <button value="140x140" class="image-presets">140x140px(coverphoto-Mobile)</button>
      <button value="1200x630" class="image-presets">1200x630px(Banner)</button>
  </ul>
</div>

<div class="dropdown">
  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

  <button class="btn-presets twitter btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <i class="fa fa-twitter" aria-hidden="true"></i>
    Twitter
  </button>
  </a>
  <ul class="dropdown-menu">
      <button value="1500x500" class="image-presets" >1500x500px(coverphoto)</button>
      <button value="400x400" class="image-presets" >400x400px(profilepicture)</button>
      <button value="900x450" class="image-presets">900x450px(shared image)</button>
      <button value="440x220" class="image-presets">440x220px(instream photo)</button>
  </ul>
</div>
<div class="dropdown">
  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

  <button class="btn-presets linkedin btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <i class="fa fa-linkedin" aria-hidden="true"></i>
    Linkedin
  </button>
  </a>
  <ul class="dropdown-menu">
      <button value="1584x396" class="image-presets">1584x396px(coverphoto-personal)</button>
      <button value="400x400" class="image-presets">400x400px(profilephoto-personal)</button>
      <button value="1128x191" class="image-presets" >1128x191px(coverphoto-company)</button>
      <button value="300x300" class="image-presets">300x300px(profilephoto-company)</button>
      <button value="1350x440" class="image-presets">1350x440px(Blogpostimage)</button>
      <button value="1128x376" class="image-presets">1128x376px(Hero-company)</button>
      <button value="300x300" class="image-presets">300x300px(profilephoto-company)</button>
      <button value="502x282" class="image-presets">502x282px(Moduleimage-company)</button>
      <button value="300x300" class="image-presets">300x300px(profilephoto-company)</button>
      <button value="900x600" class="image-presets">900x600px(companyphotos-company)</button>
  </ul>
</div>
<div class="dropdown">
  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

  <button class="btn-presets tumblr btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <i class="fa fa-tumblr" aria-hidden="true"></i>
Tumblr
  </button>]
  </a>
  <ul class="dropdown-menu">
    <button value="128x128" class="image-presets" >128x128px(profilephoto)</button>
    <button value="500x750" class="image-presets">500x750px(ImagePost)</button>
  </ul>
</div>
<div class="dropdown">
  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

  <button class="btn-presets btn-primary youtube dropdown-toggle" type="button" data-toggle="dropdown">
  <i class="fa fa-youtube-play" aria-hidden="true"></i>
 Youtube
  </button>
  </a>
  <ul class="dropdown-menu">
    <button value="800x800" class="image-presets">800x800px(ChannelIcon)</button>
    <button value="2500x1440" class="image-presets">2560x1440(coverphoto)</button>
  </ul>
</div>
<div class="dropdown">
  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
    <button class="btn-presets btn-primary pintrest dropdown-toggle" type="button">
      <i class="fa fa-pinterest" aria-hidden="true"></i>
      Pintrest
      </button>
  </a>
  <ul class="dropdown-menu">
    <button value="165x165" class="image-presets">165x165PX(profileImage)</button>
    <button value="222x150" class="image-presets">222x150px(BoardImageSize)</button>
  </ul>
</div>
</div>



<form method="post" action="php/resize.php" id="resize-form" class="">

                       <p>Choose image width in px:</p>
                       <div class="img-dimensions" >
                          <input type="range"  min="1" max="3000" value="50" class="slider" id="width-range">
                          <input type="number" name="width"  id="width-input">
                       </div>
                       <p>Choose image height in px:</p>
                       <div class="img-dimensions" >
                          <input type="range"  min="1" max="3000" value="50" class="slider" id="height-range">
                          <input type="number" name="height" id="height-input">
                       </div>
                       <input id="resize-submit" class="resize-btn btn" name="resize" value="resize image" type="submit">
                   </form>
               </div>

               <div  class="output-image">
                   <div class="output-image-container">
                      <img id="resized_img" src="" alt="" srcset="">
                   </div>
                   <div id="output-image-info"></div>
                   <form id="download-form" method="post" action="php/download.php">
                      <button class="download-btn btn" type="submit">Download</button>    
                   </form>
               </div>
           </div>    
          </div>
            </div><!-- End Reports -->



          </div>
        </div><!-- End Left side columns -->

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="js/script.js"></script>
  <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=63930d9865735e001232d844&product=inline-share-buttons" async="async"></script>'
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
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
    <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <img src="assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">NiceAdmin</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
  </form>
</div><!-- End Search Bar -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->

    <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number">4</span>
      </a><!-- End Notification Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <li class="dropdown-header">
          You have 4 new notifications
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-exclamation-circle text-warning"></i>
          <div>
            <h4>Lorem Ipsum</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>30 min. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-x-circle text-danger"></i>
          <div>
            <h4>Atque rerum nesciunt</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>1 hr. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-check-circle text-success"></i>
          <div>
            <h4>Sit rerum fuga</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>2 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-info-circle text-primary"></i>
          <div>
            <h4>Dicta reprehenderit</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>4 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="dropdown-footer">
          <a href="#">Show all notifications</a>
        </li>

      </ul><!-- End Notification Dropdown Items -->

    </li><!-- End Notification Nav -->

    <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-chat-left-text"></i>
        <span class="badge bg-success badge-number">3</span>
      </a><!-- End Messages Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
        <li class="dropdown-header">
          You have 3 new messages
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Maria Hudson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>4 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Anna Nelson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>6 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
            <div>
              <h4>David Muldon</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>8 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="dropdown-footer">
          <a href="#">Show all messages</a>
        </li>

      </ul><!-- End Messages Dropdown Items -->

    </li><!-- End Messages Nav -->

    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>Kevin Anderson</h6>
          <span>Web Designer</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
            <i class="bi bi-question-circle"></i>
            <span>Need Help?</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->
   <?php include 'includes/sidebar.php';?>
  <main id="main" class="main ">
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
        <div class="">
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



          <section class="section">
      <div class="row align-items-top">
        <div class="col-lg-4">
    <!-- Card with titles, buttons, and links -->
    <div class="card container-fluid">
            <div class="card-body">
              <h5 class="card-title animated">Free Online Image Resizer</h5>
              <h6 class="card-subtitle mb-2 text-muted">Resize Images</h6>
              <p class="card-text">Resize all types of images you want online. Use the preset social media image sizes to make your work fast.</p>
              <p class="card-text"><a href="/resize-image" class="btn btn-primary">Resize Now!!</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
</div>
            <!-- Card with titles, buttons, and links -->
            <div class="col-lg-4">
<div class="card container-fluid">
            <div class="card-body">
              <h5 class="card-title animated">Free Online Image Resizer</h5>
              <h6 class="card-subtitle mb-2 text-muted">Resize Images</h6>
              <p class="card-text">Resize all types of images you want online. Use the preset social media image sizes to make your work fast.</p>
              <p class="card-text"><a href="/resize-image" class="btn btn-primary">Resize Now!!</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
            </div>
    

            <!-- Card with titles, buttons, and links -->
            <div class="col-lg-4">
 <div class="card container-fluid">
            <div class="card-body">
              <h5 class="card-title animated">Free Online Image Resizer</h5>
              <h6 class="card-subtitle mb-2 text-muted">Resize Images</h6>
              <p class="card-text">Resize all types of images you want online. Use the preset social media image sizes to make your work fast.</p>
              <p class="card-text"><a href="/resize-image" class="btn btn-primary">Resize Now!!</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
            </div>
   
        </div>
        <div class=" p-3 d-flex flex-row-reverse container-fluid blog-cto">
              <button id="breathing-button" class="floatleft"><a href="https://toolske.com/blog/">VISIT BLOG</a></button>
              </div> 
      </div>
    </section>



          <div class="row align-items-top">
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Card with titles, buttons, and links -->
          <div class="card container-fluid">
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
          </div>

       </div>
       <div class=" p-3 d-flex flex-row-reverse container-fluid blog-cto">
              <button id="breathing-button" class="floatleft"><a href="https://toolske.com/blog/">VISIT BLOG</a></button>
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
<?php
if(basename(getcwd())=='resize-image'||basename(getcwd())=='elitools'){
    $resize_image="active";
}else{
    $resize_image="";
}
if(basename(getcwd())=='remove-background'){
    $remove_background="active";
}else{
    $remove_background="";
}
echo '  <!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-heading">Images</li>
    <li class="nav-item">
      <a class="nav-link " href="/resize-image/">
        <i class="bi bi-image"></i>
        <span>Resize Image</span>
      </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link " href="/anyformat-convert/">
        <i class="bi bi-image"></i>
        <span>Convert Images</span>
      </a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="/convert-image-format/">
      <i class="bi bi-image"></i>
      <span>Convert Single Image</span>
    </a>
  </li>

    <li class="nav-item">
    <a class="nav-link " href="/bulk-resize-images/">
      <i class="bi bi-image"></i>
      <span>Bulk Resize Images</span>
    </a>
  </li>
  
  <li class="nav-item">
  <a class="nav-link " href="/bulk-grayscale-images/">
    <i class="bi bi-image"></i>
    <span>Bulk Grayscale Images</span>
  </a>
</li>

<li class="nav-item">
<a class="nav-link " href="/bulk-compress-images/">
  <i class="bi bi-image"></i>
  <span>Bulk compress Images</span>
</a>
</li>

<li class="nav-item">
<a class="nav-link " href="/compress-single-image/">
  <i class="bi bi-image"></i>
  <span>compress Single Image</span>
</a>
</li>
  
    <li class="nav-heading">Code</li>
    <li class="nav-item">
      <a class="nav-link " href="/text2sql/">
        <i class="bi bi-server"></i>
        <span>Text To SQL</span>
      </a>
    </li>
    
    <li class="nav-heading">Stores</li>
    <li class="nav-item">
      <a class="nav-link " href="http://go.ecwid.com/6s66z2">
        <i class="bi bi-shop"></i>
        <span>Ecwid Store Builder<span class="badge rounded-pill bg-info">AD</span></span>
      </a>
    </li>

     
    <li class="nav-heading">Email</li>
    <li class="nav-item">
    <a class="nav-link " href="/bulk-email-verifier/">
      <i class="bi bi-envelope"></i>
      <span>Bulk Email Verifier
      </span>
    </a>
  </li>
  <li class="nav-item">
  <a class="nav-link " href="/verify-single-email/">
    <i class="bi bi-envelope"></i>
    <span>Verify Single Email</span>
  </a>
</li>
    <li class="nav-item">
      <a class="nav-link " href="https://www.aweber.com/easy-email.htm?id=544297">
        <i class="bi bi-envelope"></i>
        <span>Free Email Marketing <span class="badge rounded-pill bg-info">AD</span>
        </span>
      </a>
    </li>
    <li class="nav-heading">Video</li>
    <li class="nav-item">
      <a class="nav-link " href="https://fliki.ai/?via=eliud">
        <i class="bi bi-camera-video-fill "></i>
        <span>Create Tiktoks Fast<span class="badge rounded-pill bg-info">AD</span>
        </span>
      </a>
    </li>

    <li class="nav-heading">Pages</li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="/contact.php">
        <span>Contact Us</span>
      </a>
    </li><!-- End contact -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="/privacy_policy.php">
        <span>Privacy Policy</span>
      </a>
    </li><!-- End privacy policy -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="/about.php">
        <span>About Us</span>
      </a>
    </li><!-- End Contact  -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="/tos.php">
        <span>Terms Of Service</span>
      </a>
    </li><!-- End TOS -->
   
  </ul>



</aside>';
?>



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

    <li class="nav-item">
      <a class="nav-link " href="/resize-image/">
        <i class="bi bi-image"></i>
        <span>Resize Image</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link " href="/text2sql/">
        <i class="ri-database-2-fill"></i>
        <span>Text To SQL</span>
      </a>
    </li>
    
    <!-- End Dashboard Nav -->
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



<?php
define ('SITE_ROOT', realpath(dirname(__FILE__)));
$home= SITE_ROOT;

echo '<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href='.$home.' class="simple-text logo-normal">
          Toolske
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="/resize-image">  
              <i class="nc-icon nc-image"></i>
              <p>Resize Images</p>
            </a>
          </li>
        </ul>
      </div>
    </div>';
?>
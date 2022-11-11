<?php
if(basename(getcwd())=='resize-image'){
    $resize_image="active";
}else{
    $resize_image="";
}
if(basename(getcwd())=='remove-background'){
    $remove_background="active";
}else{
    $remove_background="";
}
echo '<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="/" class="simple-text logo-normal">
          Toolske
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li  class="'.$resize_image.'">
            <a href="/resize-image">  
              <i class="nc-icon nc-image"></i>
              <p>Resize Images</p>
            </a>
          </li>
          <li class="'.$remove_background.'">
            <a href="/">  
              <i class="nc-icon nc-image"></i>
              <p>Remove Background</p>
            </a>
          </li>
        </ul>
      </div>
    </div>';
?>



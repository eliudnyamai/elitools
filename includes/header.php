<?php
function display_header($tool_function){
echo '<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-toggle">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <a class="headline"">'.$tool_function.'</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navigation">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="contact.php" class="nav-link">
           Contact
          </a>
        </li>
        <li class="nav-item">
          <a href="about.php" class="nav-link "  >
            About
          </a>
        </li>
        <li class="nav-item">
          <a href="privacy_policy.php" class="nav-link">
           Privacy Policy
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>';
}
?>
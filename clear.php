<?php
include 'php/functions.php';
$dir = 'php/uploads';
  $files = glob('php/uploads/*'."*");
  $now   = time();
  $x=0;
  foreach ($files as $file) {
    if (is_file($file)) {
      if ($now - filemtime($file) >= 60) { // 1 days
        unlink($file);
        $x++;
      }
    }
  }

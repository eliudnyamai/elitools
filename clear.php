<?php
include 'php/functions.php';
$dir = 'php/uploads';
  $files = glob('php/uploads/*'."*");
  $now   = time();
  foreach ($files as $file) {
    if (is_file($file)) {
      if ($now - filemtime($file) >= 60*60*24) { // 1 days
        echo filemtime($file).'<br>';
        unlink($file);
      }
    }
  }

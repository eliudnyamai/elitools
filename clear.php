<?php
include 'php/functions.php';
$dir = 'php/uploads';
  $files = glob('php/uploads/*'."*");
  $now   = time();
  foreach ($files as $file) {
    if (is_file($file)) {
      if ($now - filemtime($file) >= 60*60*24) { // 1 days
        unlink($file);
      }
    }
  }

  $files = glob('resize-image/php/uploads/*'."*");
  $now   = time();
  foreach ($files as $file) {
    if (is_file($file)) {
      if ($now - filemtime($file) >= 60*60*24) { // 1days
        unlink($file);
      }
    }
  }

  $files = glob('anyformat-convert/php/uploads/*'."*");
  $now   = time();
  foreach ($files as $file) {
    if (is_file($file)) {
      if ($now - filemtime($file) >= 60*60*24) { // 1days
        unlink($file);
      }
    }
  }

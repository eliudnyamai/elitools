<?php
include "../Database.php";
  $files = glob('uploads/*'."*");

  foreach ($files as $file) {
    if (is_file($file)) {
        unlink($file);
    }
  }
  //pdo delete everything in column pdfs in users table
  $query = "UPDATE users SET pdf = NULL";
  $stmt = $pdo->prepare($query);
  $stmt->execute();
  echo "PDFS CLEARED";
?>
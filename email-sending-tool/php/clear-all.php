<?php
include "../Database.php";
  $files = glob('uploads/*'."*");

  foreach ($files as $file) {
    if (is_file($file)) {
        unlink($file);
    }
  }
  //pdo delete everything in column pdfs in users table
  //Fresh send
$query = "TRUNCATE TABLE failed_emails";
$pdo->exec($query);
$query = "TRUNCATE TABLE successfull_emails";
$pdo->exec($query);
$query = "TRUNCATE TABLE users";
$pdo->exec($query);
echo "ALL DATA CLEARED";
?>
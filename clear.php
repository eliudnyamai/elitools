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

// Function to delete all files and folders older than 24 hours in a directory
function deleteOldContents($dir) {
    if (!is_dir($dir)) {
        return false;
    }

    $files = array_diff(scandir($dir), array('.','..'));

    foreach ($files as $file) {
        $path = $dir . '/' . $file;

        if (is_dir($path)) {
            if (time() - filemtime($path) >= 86400) { // Check if directory is older than 24 hours
                deleteOldContents($path); // Recursively delete subdirectories and their contents
                rmdir($path);
            }
        } else {
            if (time() - filemtime($path) >= 86400) { // Check if file is older than 24 hours
                unlink($path);
            }
        }
    }

    return true;
}



  
// call the function with the path to the folder you want to delete its contents
deleteOldContents('bulk-resize-images/php/uploads/');
deleteOldContents('anyformat-convert/php/uploads/');
deleteOldContents('bulk-grayscale-images/php/uploads/');
deleteOldContents('bulk-email-verifier/php/uploads/');
deleteOldContents('bulk-compress-images/php/uploads/');



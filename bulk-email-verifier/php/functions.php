<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
// Returns a file size limit in bytes based on the PHP upload_max_filesize
// and post_max_size
function file_upload_max_size() {
    static $max_size = -1;
  
    if ($max_size < 0) {
      // Start with post_max_size.
      $post_max_size = parse_size(ini_get('post_max_size'));
      if ($post_max_size > 0) {
        $max_size = $post_max_size;
      }
  
      // If upload_max_size is less, then reduce. Except if upload_max_size is
      // zero, which indicates no limit.
      $upload_max = parse_size(ini_get('upload_max_filesize'));
      if ($upload_max > 0 && $upload_max < $max_size) {
        $max_size = $upload_max;
      }
    }
    return $max_size;
  }
  
  function parse_size($size) {
    $unit = preg_replace('/[^bkmgtpezy]/i', '', $size); // Remove the non-unit characters from the size.
    $size = preg_replace('/[^0-9\.]/', '', $size); // Remove the non-numeric characters from the size.
    if ($unit) {
      // Find the position of the unit in the ordered string which is the power of magnitude to multiply a kilobyte by.
      return round($size * pow(1024, stripos('bkmgtpezy', $unit[0])));
    }
    else {
      return round($size);
    }
  }
 function validateDate($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

function filenameWithoutExtension($file_name){
  $filenamewithextension = basename($file_name);
  $fileextenstion = pathinfo($filenamewithextension, PATHINFO_EXTENSION);
  $filenameminusextension = basename($file_name,$fileextenstion);
  // $filenameminusextension = trim(preg_replace('/[0-9]+/', '', $filenameminusextension));
  return $filenameminusextension;
}
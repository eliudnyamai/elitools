<?php
include 'php/functions.php';
define ('SITE_ROOT', realpath(dirname(__FILE__)));
$home= SITE_ROOT;
echo phpinfo();
echo file_upload_max_size();
echo $home;
?>
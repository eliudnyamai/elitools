<?php
session_start();
 set_time_limit(0);
 include 'functions.php';
 if(isset($_SESSION['user'])){
  $user=$_SESSION['user'];
 }
 else{
  header("Location: ../");
exit;
 }
define ('SITE_ROOT', realpath(dirname(__FILE__)));
$target_dir = SITE_ROOT.'/uploads/';
$target_file = $target_dir .basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$data=array();

if(!isset($_FILES["file"])) {
  header('location: ../');
  exit();
}

// Check file size
if ($_FILES["file"]["size"] > file_upload_max_size() ) {
  $data["error"]="Sorry, your file is too large.";
  $data["success"]=false;
  echo json_encode($data);
  exit();
}

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    $_SESSION["uploaded_file_path"]='uploads/'.basename( $_FILES["file"]["name"]);
    $_SESSION["filename"]=basename( $_FILES["file"]["name"]);
    $data["success"]=true;
    $data["uploaded_file"]='php/uploads/'.basename( $_FILES["file"]["name"]);
  }


require '../../vendor/autoload.php'; // Assuming Guzzle is installed via Composer

use GuzzleHttp\Client;

$filePath= $_SESSION["uploaded_file_path"];

    $client = new Client(array( 'curl' => array( CURLOPT_SSL_VERIFYPEER => false, ), ));

    // Read the CSV file
    $file = fopen($filePath, 'r');

    if ($file === false) {
        $data["error"]="Unable to open the file";
        $data["success"]=false;
        echo json_encode($data);
        exit();
    }

    // Open a new file for writing the updated rows
    $outputFile = fopen('uploads/'.$user.'.csv', 'w');

    if ($outputFile === false) {
        $data["error"]="Unable to output the file";
            $data["success"]=false;
            echo json_encode($data);
            exit();;
    }

    while (($row = fgetcsv($file)) !== false) {
        $verifiedEmail = false;

        foreach ($row as &$cell) {
            $email = trim($cell);

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Send GET request to the email verifier API
                $response = $client->get('https://api.eva.pingutil.com/email?email=' . urlencode($email));

                // Parse the response and get the verification result
                $result = json_decode($response->getBody(), true);
                $verificationStatus = $result['data']['deliverable'] == 'true' ? 'verified' : 'not verified';

                // Update the cell with the verification status
                $row[] = $verificationStatus;
                $verifiedEmail = true;
                break;
            }
        }

        if (!$verifiedEmail) {
            // No valid email found in the row
            $row[] = 'No Email';
        }

        // Write the updated row to the output file
        fputcsv($outputFile, $row);
    }

    fclose($file);
    fclose($outputFile);

    $data["message"]="<a href='php/uploads/$user.csv'  download><button  id='download-btn' class='btn btn-primary'>Download Your CSV</button></a>";
    $data["success"]=true;
    echo json_encode($data);
    exit();


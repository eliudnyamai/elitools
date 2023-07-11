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
require '../../vendor/autoload.php'; // Assuming Guzzle is installed via Composer

use GuzzleHttp\Client;

function verifyEmails($filePath)
{
    $client = new Client(array( 'curl' => array( CURLOPT_SSL_VERIFYPEER => false, ), ));

    // Read the CSV file
    $file = fopen($filePath, 'r');

    if ($file === false) {
        die("Unable to open the file.");
    }

    // Open a new file for writing the updated rows
    $outputFile = fopen('uploads/'.$user.'.csv', 'w');

    if ($outputFile === false) {
        die("Unable to open the output file.");
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
            $row[] = 'no email';
        }

        // Write the updated row to the output file
        fputcsv($outputFile, $row);
    }

    fclose($file);
    fclose($outputFile);

    echo "Verification completed. Output file created.";
}

// Example usage
verifyEmails('uploads/subscriber.csv');

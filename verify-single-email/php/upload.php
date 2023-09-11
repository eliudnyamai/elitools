<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(!isset($_SESSION['user'])){
    exit();
  }
  if(isset($_POST['email'])){
    $email=$_POST['email'];
    echo "here";
exit();
  }
  else{
    exit();
  }
require '../vendor/autoload.php'; // Assuming Guzzle is installed via Composer
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $client = new Client(array( 'curl' => array( CURLOPT_SSL_VERIFYPEER => false, ), ));
                $response = $client->get('https://api.eva.pingutil.com/email?email=' . urlencode($email));
                $result = json_decode($response->getBody(), true);
                $verificationStatus = $result['data']['deliverable'] == 'true' ? 'verified' : 'undeliverable';
                $spam = $result['data']['spam'] == 'true' ? 'True' : 'False';
                $webmail = $result['data']['webmail'] == 'true' ? 'True' : 'False';
                $catchall = $result['data']['catch_all'] == 'true' ? 'True' : 'False';
                $gibberish = $result['data']['gibberish'] == 'true' ? 'True' : 'False';
                $valid_syntax = $result['data']['valid_syntax'] == 'true' ? 'True' : 'False';
                $disposable = $result['data']['disposable'] == 'true' ? 'True' : 'False';
                $webmail = $result['data']['webmail'] == 'true' ? 'True' : 'False';
                echo "
                <table class='w-50 mx-auto table table-striped'>
                <h4 class='text-success text-center' >Result Are Ready</h4>
                <tbody>
                  <tr>
                    <td>Verification Status</td>
                    <td>".$verificationStatus."</td>
                    </tr>
                    <tr>
                    <td>Spam</td>
                    <td>".$spam."</td>
                    </tr>
                    <tr>
                    <td>Webmail</td>
                    <td>".$webmail."</td>
                    </tr>
                    <tr>
                    <td>Catchall</td>
                    <td>".$catchall."</td>
                    </tr>
                    <tr>
                    <td>Gibberish</td>
                    <td>".$gibberish."</td
                    </tr>
                    <tr>
                    <td>Valid Syntax</td>
                    <td>".$valid_syntax."</td>
                    </tr>
                    <tr>
                    <td>Disposable</td>
                    <td>".$disposable."</t
                  </tr>
                </tbody>
              </table>";
            }
        }
?>
<?php
 session_start();
 use GuzzleHttp\Client;
 include 'php/functions.php';
 if(isset($_SESSION['uploaded_file_path'])){
      $uploaded_file=$_SESSION['uploaded_file_path'];
 }
 else{
     $uploaded_file="placeholder.png";
 }

 if(isset($_SESSION['resized_img'])){
     $resized_img=$_SESSION['resized_img'];
}
else{
    $resized_img="php/uploads/germany.png";
}
$_SESSION['user']=generateRandomString();
$user=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php';
display_head('verify email Online','toolske, toolske.com, verify email');
?>
<body>
   <?php include '../includes/header.php';?>
   <?php include '../includes/sidebar.php';?>
						
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Verify email</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Toolske.com</a></li>
          <li class="breadcrumb-item active">Verify emails</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Tool -->
            <div class="col-12">       
        <div class="row tool">
            <div class="advert">

            </div>
           <h2>Upload A CSV With Emails To Verify</h2> <br>
<div class="row">
            <div class="card-body col-md-6">
              <h5 class="card-title">Provide Your Email</h5>
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="post">     
                <div class="row mb-3">
                  <div class="">
                  <input class="form-control" style="" name="email" required type="email" >
                  </div>
                </div>
                <div class="row mb-3">          
                  <div class="row mt-3 mb-3">
                  <div class="col-sm-10">
                    <button  type="submit" class="btn btn-primary">Verify Email</button>
                  </div>
                </div>
</form>
</div>
</div>
<div id="" class="col-md-6">
<div style="text-align:center;">
    <a target="_blank" href="https://www.aweber.com/easy-email.htm?id=544297&utm_source=advocate&utm_medium=banner&utm_campaign=static&utm_content=free">
    <img src="https://www.aweber.com/banners/free/aweber-free-320x100.jpg" alt="AWeber Free: Email marketing for free. No credit card required." style="border:none;" /></a>
</div>  
<div id="aff" style="text-align:center;">
<img style="width:50px" src="assets/img/pointupindex.gif" alt="" srcset=""><br>
  As You Wait Check Out Affiliate offer. Opens In A New Page.
</div>


</div>

    
</div> 
  <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(!isset($_SESSION['user'])){
    exit();
  }
  if(isset($_POST['email'])){
    $email=$_POST['email'];
  }
  else{
    exit();
  }
require '../vendor/autoload.php'; // Assuming Guzzle is installed via Composer
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $client = new Client(array( 'curl' => array( CURLOPT_SSL_VERIFYPEER => false, ), ));
                $response = $client->get('https://api.eva.pingutil.com/email?email=' . urlencode($email));
                $result = json_decode($response->getBody(), true);
               
                $email=$result['data']['email_address'];
                $verificationStatus = $result['data']['deliverable'] == 'true' ? 'verified' : 'undeliverable';
                $spam = $result['data']['spam'] == 'true' ? 'True' : 'False';
                $webmail = $result['data']['webmail'] == 'true' ? 'True' : 'False';
                $catchall = $result['data']['catch_all'] == 'true' ? 'True' : 'False';
                $gibberish = $result['data']['gibberish'] == 'true' ? 'True' : 'False';
                $valid_syntax = $result['data']['valid_syntax'] == 'true' ? 'True' : 'False';
                $disposable = $result['data']['disposable'] == 'true' ? 'True' : 'False';
                $webmail = $result['data']['webmail'] == 'true' ? 'True' : 'False';
                echo "<table class='w-50 mx-auto table table-striped'>
                <h4 class='text-success text-center' >Results Are Ready</h4>
                <tbody>
                <tr>
                    <td>Email</td>
                    <td>".$email."</td>
                    </tr>
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
</div>
<div class="text-center">
  <a href="/bulk-email-verifier" target="_blank" rel="noopener noreferrer">Try Out The Bulk Email Verifier</a>
</div>
<div class=" col-12 mt-3">
<div class="ad-big ">
<div style="text-align:center;">
  <a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1160033.10002749&subid=0&type=4"><IMG border="0"   alt="Microsoft" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1160033.10002749&subid=0&type=4&gridnum=16"></a>
  </div>
</div>
  <div class="ad-small">
  <div style="text-align:center;">

  <a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1160033.10002744&subid=0&type=4"><IMG border="0"   alt="Microsoft" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1160033.10002744&subid=0&type=4&gridnum=13"></a> 
 </div>
</div>

            <div class="card-body">
              <h5 class="animated  card-title">How to verify emails online in bulk - 3 easy steps </h5>
              <div class="row align-items-top">
                  <div class="col-12 col-md-4">
                  <!-- Card with an image on bottom -->
                  <div class="">
                  <img src="assets/img/one.png" class="card-img-bottom" alt="...">
                    <h5 class="card-title text-center">Upload CSV file</h5>
                  </div><!-- End Card with an image on bottom -->
                  </div>
                  <div class="col-12 col-md-4">
                       <!-- Card with an image on bottom -->
                  <div class="">
                  <img src="assets/img/two.png" class="card-img-bottom" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Click verify emails</h5>
                  </div>
                  </div><!-- End Card with an image on bottom -->
                  </div>
                  <div class="col-12 col-md-4">
                   <!-- Card with an image on bottom -->
                   <div class="">
                  <img src="assets/img/three.png" class="card-img-bottom" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center ">Download CSV report</h5>
                  </div>
                  </div><!-- End Card with an image on bottom -->
                  </div>
              </div>
            </div>
          </div><!-- End Default Card -->     
           <!-- Accordion without outline borders -->
 <h3 class="text-center my-5" >Frequently Asked Questions</h3>
 <div class="accordion accordion-flush mb-5 mx-auto" id="accordionFlushExample">
                <div class="accordion-item">
                  <h5 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      What Is The Toolske Bulk Email Verifier Tool?
                    </button>
                  </h5>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">This bulk email verifier will help you check if an email is deliverable online. You only upload a csv file and wait. Then you download the verified emails report as a CSV</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h5 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Is There a specific format for the uploaded CSV?
                    </button>
                  </h5>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">No, there is no specific format. As long as your CSV has an email somewhere the tool will look for it and verify it</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h5 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Is The Bulk Email Verifier tool free
                    </button>
                  </h5>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Yes, The bulk email verifier tool is 100% free</div>
                  </div>
                </div>
              </div><!-- End Accordion without outline borders -->
          <div class="row mx-auto align-items-top">
                <!-- Card with titles, buttons, and links -->
          
          </div><!-- End Card with titles, buttons, and links -->
          </div>
          <div>
        </div>
        <p><strong>All your uploads are deleted automatically after 24 hours. We do not keep them.</strong></p>
        </div><!-- End Reports -->
       </div>
      </div><!-- End Left side columns -->
    </div>
  </div>
</section>
</main><!-- End main -->
  <!-- ======= Footer ======= -->
 <?php include '../includes/footer.php'?>
</body>
</html>
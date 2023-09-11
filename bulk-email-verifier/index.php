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
display_head('Bulk verify emails Online','toolske, toolske.com, verify emails, verify emails in bulk online');
?>
<body>
   <?php include '../includes/header.php';?>
   <?php include '../includes/sidebar.php';?>
						
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Bulk verify emails</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Toolske.com</a></li>
          <li class="breadcrumb-item active">Bulk verify emails</li>
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
              <h5 class="card-title">Upload Your CSV <span>As long as the csv has an email somewhere the email will be verified</span></h5>
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="post">                <div class="row mb-3">
                  <div class="">
                  <input class="form-control" style=""name="file" required type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                  </div>
                </div>
                <div class="row mb-3">          
                  <div class="row mt-3 mb-3">
                  <div class="col-sm-10">
                    <button  type="submit" class="btn btn-primary">Verify Emails</button>
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
<h4 class="text-success text-center" id="e"></h4>
<div class="card">
<div class="progress" style="height: 20px;">
  <div id="progress-bar" class="progress-bar text-center" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
  <div id="table-container" class="card table-responsive" id="x">
  <table class="table table-striped" id="emails-table">
      <tbody></tbody>
  </table>
  </div>
  <div id="download-csv"><a href="php/uploads/<?php echo $user?>.csv" download><button  id='download-btn' class='btn btn-primary'>Download Your CSV</button></a></div>
  <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  define ('SITE_ROOT', realpath(dirname(__FILE__)));
$target_dir = SITE_ROOT.'/php/uploads/';
$target_file = $target_dir .basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$data=array();
$user=$_SESSION['user'];
if(!isset($_FILES["file"])) {
  header('location: ../');
  exit();
}
if ($_FILES["file"]["size"] > file_upload_max_size() ) {
  echo  "<script>
  var e=document.getElementById('e');
  e.classList.remove('text-success');
  e.classList.add('text-danger');
   e.innerHTML='Sorry, your file is too large.';
  </script>";
  exit();
}
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    $_SESSION["uploaded_file_path"]='php/uploads/'.basename( $_FILES["file"]["name"]);
    $_SESSION["filename"]=basename( $_FILES["file"]["name"]);
    $data["success"]=true;
    $data["uploaded_file"]='php/uploads/'.basename( $_FILES["file"]["name"]);
  }
require '../vendor/autoload.php'; // Assuming Guzzle is installed via Composer
$filePath= $_SESSION["uploaded_file_path"];
    $client = new Client(array( 'curl' => array( CURLOPT_SSL_VERIFYPEER => false, ), ));
    $rowCount = 0;
if (($handle = fopen($filePath, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $rowCount++;
    }
    fclose($handle);
}
$file = fopen($filePath, 'r');
    if ($file === false) {
        echo  "<script>
       var e=document.getElementById('e');
        e.innerHTML='Unable to open the file';
        e.classList.remove('text-success');
        e.classList.add('text-danger');
       </script>";
        exit();
    }
    // Open a new file for writing the  rows
    $outputFile = fopen('php/uploads/'.$user.'.csv', 'w');

    if ($outputFile === false) {
       echo  "<script>
       var e=document.getElementById('e');
       e.classList.remove('text-success');
       e.classList.add('text-danger');
        e.innerHTML='Unable to output the file';

       </script>";
      exit();;
    }
    $x=1;
    while (($row = fgetcsv($file)) !== false) {
    
        $verifiedEmail = false;
      
        foreach ($row as &$cell) {
            $email = trim($cell);

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $response = $client->get('https://api.eva.pingutil.com/email?email=' . urlencode($email));
                $result = json_decode($response->getBody(), true);
                $verificationStatus = $result['data']['deliverable'] == 'true' ? 'verified' : 'undeliverable';
                $row[] = $verificationStatus;
                $verifiedEmail = true;
                $perc=round(($x/$rowCount)*100);
                echo "<script>
                var download= document.getElementById('download-csv');
                download.style.display='none';
                var progress=document.getElementById('progress-bar');
                var e=document.getElementById('e');
                e.innerHTML='Now Verifying: ".$email."';
                progress.innerHTML='Percentage Verified: ".$perc."%';
                progress.style.width = '".$perc."%';
                var aff = document.getElementById('aff');
                aff.style.display='block';
                </script>";
                ob_flush();
                flush();
                echo "<script>
                      document.addEventListener('DOMContentLoaded', function() {
                      var selectedRow =".json_encode($row).";
                      var table = document.getElementById('emails-table');
                      var tbody = table.getElementsByTagName('tbody')[0];
                          if (selectedRow && selectedRow.length > 0) {
                              var row = document.createElement('tr');
                              selectedRow.forEach(function(cellData) {
                                  var cell = document.createElement('td');
                                  cell.textContent = cellData;
                                  row.appendChild(cell);
                              });
                              tbody.appendChild(row);
                          } else {
                              tbody.innerHTML = '<tr><td>No CSV data available for the selected row.</td></tr>';
                          }
                          var e=document.getElementById('e');
                          e.innerHTML='Verifying Done Successfully';
                          var download= document.getElementById('download-csv');
                          download.style.display='block';
                      });
                  </script>";
                break;
            }
        }
        if (!$verifiedEmail) {
            $row[] = 'No Email';
            $tr=json_encode($row);  
        }
        fputcsv($outputFile, $row);
    $x++; 
    }
 }?>
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
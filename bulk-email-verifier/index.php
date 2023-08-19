<?php
 session_start();
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
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php';
display_head('Bulk verify emails Online','toolske, toolske.com, grayscale multiple images, convert images to black and white');
?>
<body>
   <?php include '../includes/header.php';?>
   <?php include '../includes/sidebar.php';?>

   <!-- HTML code for the popup -->
<div id="popup" >
<button id="close-btn" style="">X</button>
  <h4>Be the first to know when we release a new tool</h4>
  <div class="text-info status"></div>						
  <form action="" id="subscribeForm" method="post">							
  <div class="col-12">
                  <label for="inputNanme4"  class="form-label">Your Name</label>
                  <input type="text" class="form-control"  name="name" id="name" >
                  <span class="text-danger hidden" id="nameError"></span>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="email">
                  <span class="text-danger hidden" id="emailError"></span>
                </div>
                <div class="text-center">
                  <button type="submit" name="subscribe" id="subscribe" class="btn btn-primary">Subscribe Now</button>
                </div> 
  </form>
</div>

<!-- JavaScript code to open and close the popup -->
<script>
if (document.cookie.indexOf("subemail") < 0) {
setTimeout(function() {
  document.getElementById("popup").style.display = "block";
}, 5000); // 5000ms = 5 seconds
}
document.getElementById("close-btn").addEventListener("click", function() {
  document.getElementById("popup").style.display = "none";
});
</script>

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
              <form id="uploadForm" action="php/upload.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <div class="">
                  <input class="form-control" style=""name="file" required type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                  </div>
                </div>
                <div class="row mb-3">          
                  <div class="row mt-3 mb-3">
                  <div class="col-sm-10">
                    <button id="verify" type="submit" class="btn btn-primary">Verify Emails</button>
                  </div>
                </div>
</form>
</div>
</div>

<div id="" class="col-md-6">
<div style="text-align:center;">
    <a href="https://www.aweber.com/easy-email.htm?id=544297&utm_source=advocate&utm_medium=banner&utm_campaign=static&utm_content=free">
    <img src="https://www.aweber.com/banners/free/aweber-free-320x100.jpg" alt="AWeber Free: Email marketing for free. No credit card required." style="border:none;" /></a>
</div>
      
</div>

<div class="card">

            <div class="card-body">
            <div style="overflow-x:auto; max-height: 300px;">
              <h5 class="card-title">Your Verified Emails Will Appear Here [Time taken depends on the No of emails and network speed]</h5>
              <div id="zip-success" class="alert mt-3 alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                Your verified emails CSV is ready for download. close this to start afresh
                <button id="close" type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div id="zip-fail" class="alert mt-3 alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                
      </div>
  <table class="table table-striped" id="csvTable">

</table>
</div>
</div>
</div>
<div id="zip">

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
           
                <!-- Card with titles, buttons, and links -->
          <div class="card col-lg-4 ">
          <script data-cfasync="false" type="text/javascript" src="//predictivadvertising.com/a/display.php?r=7270414"></script>          
          </div><!-- End Card with titles, buttons, and links -->

                <!-- Card with titles, butand links -->
          <div class="card col-lg-4 ">
          <script data-cfasync="false" type="text/javascript" src="//predictivadvertising.com/a/display.php?r=7270414"></script>          

          </div><!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
               <script data-cfasync="false" type="text/javascript" src="//predictivadvertising.com/a/display.php?r=7280362"></script>              </div>
              <!-- End Card with titles, buttons, and links -->

               <!-- Card with titles, buttons, and links -->
               <div class="card col-lg-4 ">
               <script data-cfasync="false" type="text/javascript" src="//predictivadvertising.com/a/display.php?r=7270414"></script>     
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
</main><!-- End #main -->
  <!-- ======= Footer ======= -->
 <?php include '../includes/footer.php'?>
</body>

</html>
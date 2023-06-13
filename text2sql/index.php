<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php';
display_head('text to sql online free','toolske, toolske.com, Convert text to sql online for free, no signup needed');
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
      <h1>Text To SQL</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Toolske.com</a></li>
          <li class="breadcrumb-item active"> Text To SQL</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <!-- Left side columns -->
         <!-- ShareThis BEGIN -->
         <div class="sharethis-inline-share-buttons"></div>
            <!-- ShareThis END -->
            <div class="advert">

            </div>
            <br>
        <div class="row">
         <div class="col-6">
          <form id="generate-sql-form" action="php/generatesql.php" method="post">
          <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="" required name="sql-query" id="sql-query" style="height: 100px;"></textarea>
                      <label for="floatingTextarea">E.G create a query to output all students whose age is greater than 2</label>
                    </div> 
          <button id="generate-sql" class="btn" type="submit">Generate SQL!</button>
          </form>   
          </div>   
         <div class="col-6 " >
          <!-- <div class="border border-info" id="generated-sql" style="height: 100px;"> -->
          <textarea class="form-control"  id="generated-sql" style="height: 100px;">
          Your sql will appear here
          </textarea>
          <div class="d-flex">
              <button onclick="copy()" id="copy" class="btn mt-3">Copy Text</button>
              <div id="copy-success" class="alert alert-success" role="alert">
                Copied!
              </div>
              <div class="mt-1">

              </div>

          </div>
         </div>

         <div>
         <div class=" social-links mt-2">
  Liked It? Check Our Online Profiles
                <a href="https://twitter.com/Toolskecom" target="_blank" class=""><i class="bi bi-twitter"></i>Twitter |</a>
                <a href="https://www.tiktok.com/@eliudmitau" target="_blank" class=""><i class="bi bi-tiktok"></i>Tiktok  |</a>
                <a href="https://www.youtube.com/channel/UCo1pKQOzTy0wU3WyOAD3PKQ" target="_blank" class=""><i class="bi bi-youtube"></i>Youtube  |</a>
                <a href="https://linktr.ee/eliud_mitau?subscribe" target="_blank" class=""><i class="bi bi-linktree"></i>Linktree  |</a>
                <a href="https://www.upwork.com/freelancers/~019e7ab551fe9fb113" target="_blank" class=""><i class="bi bi-linktree"></i>Upwork|  </a>
</div>
<br>
<div class="ad-big">
<div style="text-align:center;">
<a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1321193.415&subid=0&type=4"><IMG border="0"   alt="Microsoft for Business" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1321193.415&subid=0&type=4&gridnum=0"></a>
</div>
</div>
<div class="ad-small">
<div style="text-align:center;">
<a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1321193.407&subid=0&type=4"><IMG border="0"   alt="Microsoft for Business" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1321193.407&subid=0&type=4&gridnum=12"></a>
</div>
</div>
          <br> <br>
         <h2>How To convert Text To SQL Online-No Sign Up Needed</h2>
        <p> With the text2sql tool from toolske.com, you can now convert natural language to an SQL query free online.  With text2sql you can create a simple select query as well as more complicated queries such as joins.</p>
<OL>
<li>Type the text you would like converted to sql</li>
<li>Click generate sql</li>
<li>Copy your generated sql query</li>
</OL>

        </div>
 <div class="row mx-auto align-items-top">
                     <!-- Card with titles, buttons, and links -->
<div class="card container bg-transparent shadow-none   col-lg-4 ">
<div style="text-align:center;">
<a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI%2aM8&offerid=1160033.10002816&bids=1160033.10002816&subid=0&type=4"><IMG border="0" alt="Microsoft Workplace Discount Program" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI%2aM8&offerid=1160033.10002816&bids=1160033.10002816&subid=0&type=4&gridnum=13"></a>    
  </div>
</div><!-- End Card with titles, buttons, and links -->
          <div class="card container shadow-none bg-transparent  col-lg-4">
          <div style="text-align:center;">
            <a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1160033.10002744&subid=0&type=4"><IMG border="0"   alt="Microsoft" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1160033.10002744&subid=0&type=4&gridnum=13"></a>  
            </div>
          </div><!-- End Card with titles, buttons, and links -->
              

              

          <!-- Card with titles, buttons, and links -->
          <div class="card container bg-transparent shadow-none  col-lg-4 ">
          <div style="text-align:center;">
                <a href="https://click.linksynergy.com/fs-bin/click?id=MyzlSQhI*M8&offerid=1160033.10002804&subid=0&type=4"><IMG border="0"   alt="Microsoft" src="https://ad.linksynergy.com/fs-bin/show?id=MyzlSQhI*M8&bids=1160033.10002804&subid=0&type=4&gridnum=13"></a>          
              </div>
</div><!-- End Card with titles, buttons, and links -->
          </div>
          <div>
          
        </div>
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
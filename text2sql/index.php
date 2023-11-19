<?php
 session_start();
 include 'php/functions.php';
$_SESSION['user']=generateRandomString();
?>
<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php';
display_head('text to sql online free','toolske, text2sql, toolske.com, Convert text to sql online for free, no signup needed');
?>
<body>
   <?php include '../includes/header.php';?>
   <?php include '../includes/sidebar.php';?>
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
            <div class="ad-big">
<div style="text-align:center;">
<a target="_blank" href="https://kinsta.com/wordpress-hosting/?kaid=BNQBFXIKNLGZ"><img style="width:100%" src="assets/img/728x90 - secure - dark.jpg" /></a>
</div>
</div>
<div class="ad-small">
<div style="text-align:center;">
<a target="_blank" href="https://kinsta.com/wordpress-hosting/?kaid=BNQBFXIKNLGZ"><img style="width:100%" src="assets/img/728x90 - secure - dark.jpg" /></a>

</div>
</div>
          <br>
        <div class="row">
   
         <div class="col-6">
          <form id="generate-sql-form" action="php/generatesql.php" method="post">
          <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="" required name="sql-query" id="sql-query" style="height: 100px;"></textarea>
                      <label for="floatingTextarea">E.G create a query to output all students whose age is greater than 2</label>
                    </div> 
                    <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LcU76UnAAAAABRWJKENJzeSpmkY5sp_F8ILpfog"></div>

          <button id="generate-sql" disabled class="btn" type="submit">Generate SQL!</button>
          </form>   
          </div>   
         <div class="col-6 " >
          <!-- <div class="border border-info"-sql" style="height: 100px;"> -->
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
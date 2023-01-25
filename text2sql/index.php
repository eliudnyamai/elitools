<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php';
display_head('Convert text to SQL online for free');
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
        <div class="row">
         <div class="col-6">
          <form id="generate-sql-form" action="php/generatesql.php" method="post">
          <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="" required name="sql-query" id="sql-query" style="height: 100px;"></textarea>
                      <label for="floatingTextarea">E.G output all students whose age is greater than 2</label>
          </div> 
          <button id="generate-sql" class="btn" type="submit">Generate SQL!</button>
          </form>   
          </div>   
         <div class="col-6 " >
          <!-- <div class="border border-info" id="generated-sql" style="height: 100px;"> -->
          <textarea class="form-control"  id="generated-sql" style="height: 100px;">
          Your sql will appear here
          </textarea>
          <div>
          <button onclick="copy()" id="copy" class="btn mt-3">Copy Text</button>
          <div id="copy-success" class="alert alert-success" role="alert">
            Copied!
</div>
          </div>
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
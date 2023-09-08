<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';
display_head('Contact Us','Text to sql for free online, image resizing free online');
?>
<body>
   <?php include 'includes/header.php';?>
   <?php include 'includes/sidebar.php';?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Contact Us</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Toolske.com</a></li>
          <li class="breadcrumb-item active">Contact Us</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
          <section class="mb-4">

<!--Section heading-->
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">
    Do you have any questions? Do you want a new tool or suggesting an improvement? 
    Please do not hesitate to contact us directly. Our team will come back to you within 24 hours
</p>

<div class="row">

    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form"  action="php/send_mail.php" method="post">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                    <label for="name" class="">Your name</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                    <label for="email" class="">Your email</label>
                        <input type="text" id="email" name="email" class="form-control">
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                    <label for="subject" class="">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control">
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">
                    <div class="md-form">
                        <label for="message">Your message</label>
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                    </div>

                </div>
            </div>
            <!--Grid row-->



        <div class="text-center text-md-left">
            <input class="btn" type="submit" value="Send email" id="send-email" name="submit">

        </div>
        <div class="status text-green"></div>
        </form>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
            <li><i class="fa fa-map-marker alt fa-2x"></i>
                <p>Nairobi, Kenya</p>
            </li>

            <li><i class="fa fa-phone mt-4 fa-2x"></i>
                <p>+254790508982</p>
            </li>

            <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                <p>eliud@toolske.com</p>
            </li>
        </ul>
    </div>
    <!--Grid column-->

</div>

</section>
        </div><!-- End Reports -->
       </div>
      </div><!-- End Left side columns -->
    </div>
  </div>
</section>
</main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php include 'includes/footer.php' ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<!--Head start  -->
  <?php include 'includes/head.php';
  display_head('Contact Us');
  ?>
<!-- Head end -->
<body class="">
   <!-- Sidebar start -->
     <?php include 'includes/sidebar.php';?>
    <!-- Side bar end -->

    <div class="main-panel">
      <!-- Navbar -->
        <?php include 'includes/header.php';
        display_header('Get Done Quickly');
       ?>
      <!-- End Navbar -->

      <div class="content">

          <!-- ShareThis BEGIN -->
          <div class="sharethis-inline-share-buttons"></div>
          <!-- ShareThis END -->
          <ht>
 <!--Section: Contact v.2-->
<section class="mb-4">

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
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
                        <input type="text" id="name" name="name" class="form-control">
                        <label for="name" class="">Your name</label>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control">
                        <label for="email" class="">Your email</label>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" id="subject" name="subject" class="form-control">
                        <label for="subject" class="">Subject</label>
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        <label for="message">Your message</label>
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
                <p>elitools@gmail.com</p>
            </li>
        </ul>
    </div>
    <!--Grid column-->

</div>

</section>
<!--Section: Contact v.2-->
    <Div class="footer-offset">
&nbsp;    
</Div>
           </div>    
          </div>
        </div>
<?php include 'includes/footer.php'?>
</body>

</html>

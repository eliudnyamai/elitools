<?php 
include_once 'config/Database.php';
include_once 'class/Subscribe.php';

$database = new Database();
$db = $database->getConnection();

$subscriber = new Subscribe($db);
$statusMsg = '';
if(!empty($_GET['email_verify'])){     
	$verifyToken = $_GET['email_verify']; 	
	$subscriber->verify_token = $verifyToken;
    if($subscriber->verifyToken()){ 
       	$subscriber->is_verified = 1;        
        if($subscriber->update()) { 
            $statusMsg = '<p class="text-success">Your email address has been verified successfully. </br> <a href="toolske.com">Toolske.com Home</a></p>'; 
        } else { 
            $statusMsg = '<p class="text-danger">Some problem occurred on verifying your email, please try again.</p>'; 
        } 
    } else { 
        $statusMsg = '<p class="text-danger">You have clicked on the wrong link, please check your email and try again.</p>'; 
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php';
display_head('verify Email', 'Toolske.com-newsletter');?>
<body>
   <?php include '../includes/header.php';?>
   <?php include '../includes/sidebar.php';?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Verify Email</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Toolske.com</a></li>
          <li class="breadcrumb-item active">Verify Email</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <!-- Left side columns -->
        <div class="col-lg-12">
		<div class="content"> 
	<div class="container-fluid">
		<h2 class="text-success">Verify Success Subscription to Toolske.com newsletter</h2>
		<div class="row">
			<div class="col-lg-12">
				<?php echo $statusMsg; ?>
			</div>
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
  <?php include '../includes/footer.php' ?>
</body>

</html>




<?php 
include('inc/header.php');
?>
<title>webdamn.com : Demo Build Newsletter System with PHP and MySQL</title>
<link rel="stylesheet" href="css/style.css">
<!-- <script src="js/subscribe.js"></script> -->
<?php include('inc/container.php');?>
<div class="content"> 
	<div class="container-fluid">
		<h2>Example: Build Newsletter System with PHP and MySQL</h2>
		<div class="row">
			<div class="col-lg-12">
				<div class="main-content">
					<div class="susbcribe-container">
						<div class="top">
							<h2>Subscribe Now</h2>
							<h3>Enroll for our <span>free</span> updates</h3>
							<li>We will send you weekly updates</li>
							<li>Get daily articles and latest news</li>
						</div>
						<div class="bottom">							
							<div class="status"></div>						
							<form action="subscription.php" id="subscribeForm" method="post">							
								<input type="text" class="form-control" name="name" id="name" placeholder="Full Name" required="">	
								<span class="text-danger hidden" id="nameError"></span>
								<input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required="">
								<span class="text-danger hidden" id="emailError"></span>
								<input type="submit" name="subscribe" id="subscribe" value="Subscribe Now">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	 
	</div>       
</div>   		
<?php include('inc/footer.php');?>


<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Saifee Decor | Contact</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header / Header Style Two-->
	<?php 
		include "header.php";
	?>
    <!--End Main Header -->
	
	<!--Page Title-->
	<section class="page-title" style="background-image: url(images/background/6.jpg)">
		<div class="auto-container">
			<h1>Contact Us</h1>
			<div class="text">Highlight your writing with beautiful, expressive featured images.</div>
		</div>
	</section>
	<!--End Page Title-->
	
	<!--Contact Page Section-->
	<section class="contact-page-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!--Form Column-->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Leave A Reply</h2>
						
						<!--Contact Form-->
						<div class="contact-form">

							<form method="post" action="https://wpkoder.com/html/dizital/sendemail.php" id="contact-form">
								<div class="row clearfix">
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="name" value="" placeholder="Name" required>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="email" name="email" value="" placeholder="Email" required>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="phone" value="" placeholder="Phone" required>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="subject" value="" placeholder="Subject" required>
									</div>
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<textarea name="message" placeholder="Comment..."></textarea>
									</div>
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<button type="submit" class="theme-btn btn-style-two">Submit</button>
                                    </div>
								</div>
							</form>

						</div>
						
					</div>
				</div>
				
				<!--Map Column-->
				<div class="map-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!--Map Info Section-->
						<section class="map-section">

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29556.702696520664!2d76.04826424633477!3d22.179755854927453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962986b196b566b%3A0xd421d81aba6baa9c!2sSanawad%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1577000932502!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

						</section>
						<!--End Map Info Section-->
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!--End Contact Page Section-->
	
	<!--Main Footer-->
	<?php 
		include "footer.php";
	?>		
	
</div>
<!--End pagewrapper-->

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/validate.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</body>

</html>
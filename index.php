<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Saifee Decor</title>
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
 	
	<?php 
		include "header.php";
	?>
	<!--Banner Section-->
	<section class="banner-section style-two" style="background-image: url(images/background/2.jpg)">
		<div class="auto-container">
			<h2>Find Your Story From Our Marvelous Collection</h2>
			<!--Search Form-->
			<div class="search-form">
				<form method="post" action="#">
					
					<div class="form-group clearfix">
						<select class="custom-select-box">
							<option>All</option>
							<option>3D</option>
							<option>Vinyl</option>
							<option>Flock</option>
							<option>Bamboo</option>
						</select>
						<input type="text" name="firstname" value="" placeholder="Searh here...." required>
						<button type="submit" class="theme-btn dripicons-search"></button>
					</div>

				</form>
			</div>
			<!--End Search Form-->
			
		</div>
	</section>
	<!--End Banner Section-->
	
	<!--Gallery Section-->
    <section class="gallery-section">
    	<div class="auto-container">
        	
        	<!--MixitUp Galery-->
            <div class="mixitup-gallery">
                
                <!--Filter-->
                <div class="filters text-center clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All</li>
                        <li class="filter" data-role="button" data-filter=".food">Vinyl</li>
                        <li class="filter" data-role="button" data-filter=".people">3D</li>
                        <li class="filter" data-role="button" data-filter=".nature">Flock</li>
                        <li class="filter" data-role="button" data-filter=".animals">Bamboo</li>
                    </ul>
                </div>
                
                <div class="filter-list row clearfix">
					
					<!--Gallery Block-->
					<div class="gallery-block mix col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/1.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="shop-single.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="images/gallery/1.jpg" data-fancybox="gallery" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!--Gallery Block-->
					<div class="gallery-block mix nature food col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/2.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="shop-single.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="images/gallery/2.jpg" data-fancybox="gallery" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!--Gallery Block-->
					<div class="gallery-block mix animals people col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/3.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="shop-single.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="images/gallery/3.jpg" data-fancybox="gallery" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!--Gallery Block-->
					<div class="gallery-block mix nature animals col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/4.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="shop-single.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="images/gallery/4.jpg" data-fancybox="gallery" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!--Gallery Block-->
					<div class="gallery-block mix animals food col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/5.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="shop-single.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="images/gallery/5.jpg" data-fancybox="gallery" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!--Gallery Block-->
					<div class="gallery-block mix nature people col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/6.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="shop-single.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="images/gallery/6.jpg" data-fancybox="gallery" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!--Gallery Block-->
					<div class="gallery-block mix animals people col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/7.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="shop-single.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="images/gallery/7.jpg" data-fancybox="gallery" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!--Gallery Block-->
					<div class="gallery-block mix nature food col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/8.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="shop-single.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="images/gallery/8.jpg" data-fancybox="gallery" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!--Gallery Block-->
					<div class="gallery-block mix animals col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/9.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="shop-single.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="images/gallery/9.jpg" data-fancybox="gallery" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!--Gallery Block-->
					<div class="gallery-block mix people col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/10.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="shop-single.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="images/gallery/10.jpg" data-fancybox="gallery" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!--Gallery Block-->
					<div class="gallery-block mix people col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/11.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="shop-single.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="images/gallery/11.jpg" data-fancybox="gallery" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!--Gallery Block-->
					<div class="gallery-block mix col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/12.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<a href="shop-single.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="images/gallery/12.jpg" data-fancybox="gallery" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
				</div>
				
				
				<div class="btn-box text-center">
					<a href="#" class="theme-btn btn-style-two">Load more</a>
				</div>
				
			</div>
		</div>
	</section>
	<!--End Gallery Section-->
	
	<!--News Section-->
	<section class="news-section">
		<div class="auto-container">
			<div class="row clearfix">
					
				<!--News Block-->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="post-date">18.09.2018</div>
						<h3><a href="blog-single.html">We create websites that have it all: Beauty and Brains.</a></h3>
						<div class="text">Lorem Ipsum proin gravida nibh vel velit aucsollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.  Morbi accumsan ipsum velit.</div>
						<div class="author">
							<div class="author-image"><img src="images/resource/author-2.jpg" alt="" /></div>
							by Ronald Austin
						</div>
					</div>
				</div>
				
				<!--News Block-->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="post-date">18.09.2018</div>
						<h3><a href="blog-single.html">Good design is obvious. Great design is transparent.</a></h3>
						<div class="text">Lorem Ipsum proin gravida nibh vel velit aucsollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.  Morbi accumsan ipsum velit.</div>
						<div class="author">
							<div class="author-image"><img src="images/resource/author-2.jpg" alt="" /></div>
							by Ronald Austin
						</div>
					</div>
				</div>
				
				<!--News Block-->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="post-date">18.09.2018</div>
						<h3><a href="blog-single.html">This is how I feel when I am not making the internet.</a></h3>
						<div class="text">Lorem Ipsum proin gravida nibh vel velit aucsollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.  Morbi accumsan ipsum velit.</div>
						<div class="author">
							<div class="author-image"><img src="images/resource/author-2.jpg" alt="" /></div>
							by Ronald Austin
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!--End News Section-->
	
	<!--Testimonial Section-->
	<section class="testimonial-section-two" style="background-image: url(images/background/1.jpg)">
		<div class="auto-container">
			<!--Sec Title-->
			<div class="sec-title centered light">
				<h2>Happy Customers</h2>
			</div>
			
			<div class="single-item-carousel owl-carousel owl-theme">
				
				<!--Testimonial Block Two-->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/author-6.jpg" alt="" />
						</div>
						<div class="text">“I have gotten at least 50 times the value from Digital. We’ve seen amazing results already. Thank you so much for your help! ”</div>
						<div class="author">Madison Barnes</div>
						<div class="designation">Designer@Google</div>
					</div>
				</div>
				
				<!--Testimonial Block Two-->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/author-6.jpg" alt="" />
						</div>
						<div class="text">“I have gotten at least 50 times the value from Digital. We’ve seen amazing results already. Thank you so much for your help! ”</div>
						<div class="author">Madison Barnes</div>
						<div class="designation">Designer@Google</div>
					</div>
				</div>
				
				<!--Testimonial Block Two-->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/author-6.jpg" alt="" />
						</div>
						<div class="text">“I have gotten at least 50 times the value from Digital. We’ve seen amazing results already. Thank you so much for your help! ”</div>
						<div class="author">Madison Barnes</div>
						<div class="designation">Designer@Google</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!--End Testimonial Section-->
	
	<?php 
		include "footer.php";
	?>		
	
</div>
<!--End pagewrapper-->

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>

</html>
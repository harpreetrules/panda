<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Pixels Panda - UI/UX Solutions</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>	
</head>

<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-sm-4 logo"><a href="index"><img src="images/logo.png" alt="" /></a>
				</div>
				<div class="col-lg-9 col-sm-8 xs-full">
					<!-- Collect the nav links, forms, and other content for toggling -->
					<nav class="navbar navbar-nav">
						<div class="container-fluid">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
							


							</div>
							<div class="collapse navbar-collapse" id="myNavbar">
								<?php include('navigation.php'); ?>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>


	</header>

	<!--<section class="banner-area" style="">

		<div class="container top-padding50">
			<div class="row">
			<div class="col-lg-6 top-padding50">
		<p style="color: #000; font-size: 19px; font-weight: 500;"><img src="images/panda-icon.png" width="40px" alt="">Welcome to Pixels Panda</p>
		<h1>I'm a UI/UX Designer <br>
			Based in New Delhi</h1>
				<button style="background: #ffa500; padding: 8px 22px; font-weight: 500; border: 0px; color: #000; font-size: 14px;">My Portfolio</button>
		</div>
		<div class="col-lg-6"><img src="images/banner-laptop.png" alt=""></div>
			</div>
		</div>

	</section>
-->


	<!--	<section class="banner-box" style=" padding-top: 90px; padding-bottom: 90px; background: url(images/banner-bg1.jpg) no-repeat; background-size: cover;">

		<div class="container-fluid">
			<div class="row" style="display: flex; align-items: center;">
			<div class="col-lg-5" style="padding-left: 150px;">
		<p style="color: #000; font-size: 19px; font-weight: 500;"><img src="images/panda-icon2.png" width="35px" alt="" style="margin-right: 10px;">Welcome to Pixels Panda</p>
		<h1 style="font-size: 40px; font-weight: 600;">I'm a UI/UX Designer <br>
			Based in New Delhi</h1>
				<button class="black-button">Portfolio</button>
				<button class="white-button">Contact</button>
		</div>
		<div class="col-lg-7"><img src="images/banner-laptop2.png" alt=""></div>
			</div>
		</div>

	</section>-->

	<section id="banner-area">
		
		<div class="container-fluid">
			<div class="row" style="position:relative;">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active slide1">
							<div class="row">
								<div class="col-lg-5 col-sm-6 banner-text">
									<p><img src="images/panda-icon2.png" alt="">Welcome to Pixels Panda</p>
									<h1>I'm a UI/UX Designer <br>Based in New Delhi</h1>
									<button class="black-button">Portfolio</button>
									<button class="white-button">Contact</button>
								</div>
								<div class="col-lg-7 col-sm-6 banner-image"><img src="images/banner-laptop2.png" alt="">
								</div>
							</div>
						</div>
						<div class="item slide2">
							<div class="row">
								<div class="col-lg-5 col-sm-6 banner-text">
									<p><img src="images/panda-icon2.png" alt="">Welcome to Pixels Panda</p>
									<h1>I'm a UI/UX Designer <br>Based in New Delhi</h1>
									<button class="black-button">Portfolio</button>
									<button class="white-button">Contact</button>
								</div>
								<div class="col-lg-7 col-sm-6 banner-image"><img src="images/banner-laptop3.png" alt="">
								</div>
							</div>
						</div>
						<div class="item slide3">
							<div class="row">
								<div class="col-lg-5 col-sm-6 banner-text">
									<p><img src="images/panda-icon2.png" alt="">Welcome to Pixels Panda</p>
									<h1>I'm a UI/UX Designer <br>Based in New Delhi</h1>
									<button class="black-button">Portfolio</button>
									<button class="white-button">Contact</button>
								</div>
								<div class="col-lg-7 col-sm-6 banner-image"><img src="images/table3.png" alt="">
								</div>
							</div>
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>

			</div>
		</div>
	</section>


	<!--<section class="top-padding200 bottom-padding100 light-grey-bg">
	<div class="container text-center">
		<div class="row">
		<h1 class="icon-head">Our Experience</h1>
		<p class="top-padding20 font14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit laboriosam iusto repellendus earum atque qui quisquam at labore quasi ea assumenda quam quo tempore, velit officia voluptatem illo sed aliquid.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit laboriosam iusto repellendus earum atque qui quisquam at labore quasi ea assumenda quam quo tempore, velit officia voluptatem illo sed aliquid.</p>
		</div>
		
		<div class="row text-center top-padding20">
		<div class="col-md-4 col-sm-6">
			<div class="icon-box">
			<div class="img"><img src="images/panda-icon.png" alt=""></div>
			<div class="content"><strong>Web Design</strong><br>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
			</div></div>
		<div class="col-md-4 col-sm-6">
			<div class="icon-box">
			<div class="img"><img src="images/panda-icon.png" alt=""></div>
			<div class="content"><strong>Web Design</strong><br>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
			</div></div>
		<div class="col-md-4 col-sm-6">
			<div class="icon-box">
			<div class="img"><img src="images/panda-icon.png" alt=""></div>
			<div class="content"><strong>Web Design</strong><br>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
			</div></div>
		<div class="col-md-4 col-sm-6">
			<div class="icon-box">
			<div class="img"><img src="images/panda-icon.png" alt=""></div>
			<div class="content"><strong>Web Design</strong><br>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
			</div></div>
		<div class="col-md-4 col-sm-6">
			<div class="icon-box">
			<div class="img"><img src="images/panda-icon.png" alt=""></div>
			<div class="content"><strong>Web Design</strong><br>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
			</div></div>
		<div class="col-md-4 col-sm-6">
			<div class="icon-box">
			<div class="img"><img src="images/panda-icon.png" alt=""></div>
			<div class="content"><strong>Web Design</strong><br>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
			</div></div>
		</div>
		
	</div>
	</section>-->
	

	<section class="top-padding100 bottom-padding100">
		<h1 class="back">Our Experience</h1>
		<div class="container text-center">
			<div class="row">
				<h1 class="icon-head">Our Experience</h1>
				<p class="top-padding20 font14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit laboriosam iusto repellendus earum atque qui quisquam at labore quasi ea assumenda quam quo tempore, velit officia voluptatem illo sed aliquid.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit laboriosam iusto repellendus earum atque qui quisquam at labore quasi ea assumenda quam quo tempore, velit officia voluptatem illo sed aliquid.</p>
			</div>

			<div class="row text-center top-padding50">
				<div class="col-lg-4 col-sm-12 section-image">
					<img src="images/design.jpg" alt="" class="top-padding50">
				</div>
				<div class="col-lg-8 col-sm-12">
					<div class="col-sm-6 col-xs-6">
						<div class="icon-box">
							<div class="img">
								<i aria-hidden="true" class="fa fa-desktop"></i>
							</div>
							<div class="content"><strong>UI/UX Design</strong><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
						</div>
					</div>
					<div class="col-sm-6 col-xs-6">
						<div class="icon-box">
							<div class="img">
								<i aria-hidden="true" class="fa fa-tablet" style="font-size: 22px;"></i>
							</div>
							<div class="content"><strong>Responsive Web Design</strong><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
						</div>
					</div>
					<div class="col-sm-6 col-xs-6">
						<div class="icon-box">
							<div class="img">
								<i aria-hidden="true" class="fa fa-paint-brush"></i>
							</div>
							<div class="content"><strong>Wireframing / Prototyping</strong><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
						</div>
					</div>
					<div class="col-sm-6 col-xs-6">
						<div class="icon-box">
							<div class="img">
								<i aria-hidden="true" class="fa fa-html5"></i>
							</div>
							<div class="content"><strong>PSD to HTML</strong><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	
	<section class="top-padding100 bottom-padding100 light-grey-bg">
	<div class="container animated slideInUp 3s">
			<div class="row">
			<div class="col-lg-7">
			<h1><img src="images/panda-icon.png" alt="" style="margin-right: 10px;">Responsive Website Design</h1>	
				<p class="top-margin30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iure cupiditate amet voluptates consequuntur autem rerum fugiat! Facilis quas ipsam tenetur officia dolore, impedit est possimus nihil quam deleniti, quod.</p>
				<div class="responsive-box" style="display: flex;">
				<img src="images/iphone.png" alt="" style="width: 20%; display: none;">
				<ul style="width: 80%; margin-left: 0px;">
					<li><i aria-hidden="true" class="fa fa-bandcamp right-margin10" style="line-height: 30px; color: #ffa500;"></i>Mobile Friendly</li>
					<li><i aria-hidden="true" class="fa fa-bandcamp right-margin10" style="line-height: 30px; color: #ffa500;"></i>Responsive Design</li>
					<li><i aria-hidden="true" class="fa fa-bandcamp right-margin10" style="line-height: 30px; color: #ffa500;"></i>Reliable</li>
					<li><i aria-hidden="true" class="fa fa-bandcamp right-margin10" style="line-height: 30px; color: #ffa500;"></i>Hassle Free</li>
					<li><i aria-hidden="true" class="fa fa-bandcamp right-margin10" style="line-height: 30px; color: #ffa500;"></i>100% Satisfaction</li>
				</ul>
				</div>
				<div class="clearfix"></div>
				<p class="top-margin30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt saepe amet cupiditate deleniti voluptatum eum blanditiis eveniet mollitia minima magni.</p>
				<button class="yellow-button">Contact Now</button>
			</div>
			<div class="col-lg-5 animate__animated animate__zoomInRight"><img src="images/iphone.png" alt=""  width="75%"></div>
			</div>
	</div>
	</section>
	
	
	<section class="top-padding100 bottom-padding100">
		<h1 class="back">Our Services</h1>
		<div class="container text-center">
			<div class="row">
				
				<h1 class="icon-head">Our Services</h1>
				<p class="top-padding20 font14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit laboriosam iusto repellendus earum atque qui quisquam at labore quasi ea assumenda quam quo tempore, velit officia voluptatem illo sed aliquid.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit laboriosam iusto repellendus earum atque qui quisquam at labore quasi ea assumenda quam quo tempore, velit officia voluptatem illo sed aliquid.</p>
			</div>
			<div class="row text-left top-padding20 feature-box-big">
				<div class="col-lg-3 col-sm-6">
					<div class="feature-box-back">
						<div class="feature-box"><img src="images/ui-icon.png" alt=""><br>
						<strong>UI/UX Design</strong> <br><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit laboriosam iusto repel</div>
						<div class="feature-box-hover">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, ullam. Lorem ipsum dolor sit amet</p>
							<button class="black-button">Contact</button>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="feature-box"><img src="images/ui-icon.png" alt=""><br>
						<strong>UI/UX Design</strong> <br><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit laboriosam iusto repel</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="feature-box"><img src="images/ui-icon.png" alt=""><br>
						<strong>UI/UX Design</strong> <br><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit laboriosam iusto repel</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="feature-box"><img src="images/ui-icon.png" alt=""><br>
						<strong>UI/UX Design</strong> <br><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit laboriosam iusto repel</div>
				</div>
			</div>
		</div>
	</section>

	<section class="top-padding100 bottom-padding100 light-grey-bg">
		<h1 class="back-w">Work Experience</h1>
		<div class="container text-center">
			<div class="row">
				<h1 class="icon-head">Work Experience</h1>
				<p class="top-padding20 font14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit laboriosam iusto repellendus earum atque qui quisquam at labore quasi ea assumenda quam quo tempore, velit officia voluptatem illo sed aliquid.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit laboriosam iusto repellendus earum atque qui quisquam at labore quasi ea assumenda quam quo tempore, velit officia voluptatem illo sed aliquid.</p>
			</div>

			<div class="row top-padding25 experience">
				<div class="col-lg-4 col-xs-6"><img src="images/web-design1.jpg" alt="">
					<button class="white-button">Web Design</button>
				</div>
				<div class="col-lg-4 col-xs-6"><img src="images/mobile-responsive1.jpg" alt="">
					<button class="white-button">Mobile First</button>
				</div>
				<div class="col-lg-4 col-xs-6"><img src="images/experience-3.jpg" alt="">
					<button class="white-button">Responsive</button>
				</div>
			</div>
		</div>
	</section>

<section class="contact-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>Got a Project for us</h1>
				<p class="top-margin20 white-text"> Eggs Media will make your idea a reality! We have been successfully serving a broad range of industries, and our designs have been driving business growth.</p>
			</div>

			<div class="col-lg-12 top-margin50">
				<form>

					<div class="input-container">
						<input type="text"/>
						<label class="head">Full Name</label>
					</div>
					<div class="input-container">
						<input type="mail"/>
						<label class="head">Email</label>
					</div>
					<div class="input-container">
						<input type="mail"/>
						<label class="head">Message</label>
					</div>
					<div><button type="button" class="yellow-btn">Submit</button></div>
				</form>
			</div>


		</div>
	</div>
</section>
	
	<section class="top-padding100 bottom-padding100 light-grey-bg">
	<h1 class="back-w">Industries we Serve</h1>
		<div class="container">
		<div class="row text-center">
		<h1 class="icon-head">Industries we Serve</h1>
			<p class="top-padding20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam excepturi, rerum ullam quam harum dolorem, rem saepe alias nam non cupidi</p>
			<div class="industry">
			<ul>
				<li><img src="images/icons/holiday.svg" alt=""><br>Travel</li>
				<li><img src="images/icons/cutlery.svg" alt=""><br>F&amp;B</li>
				<li><img src="images/icons/home.svg" alt=""><br>Real Estate</li>
				<li><img src="images/icons/hospitality.svg" alt=""><br>Hospitality</li>
				<li><img src="images/icons/books.svg" alt=""><br>Education</li>
				<li><img src="images/icons/devices.svg" alt=""><br>Technology</li>
				<li><img src="images/icons/football.svg" alt=""><br>Sports</li>
				<li><img src="images/icons/law.svg" alt=""><br>Law</li>
				<li>and<br>many<br>more...</li>
			</ul>
			</ul>
			</div>
		</div>
	</div>
	</section>

	<section class="social-media top-padding100 bottom-padding100">
		<h1 class="back">Connect With Us</h1>
		<div class="container-fluid">
			<div class="row text-center">
				<h1 class="icon-head">Connect With us</h1>
				<p class="top-padding20 font14">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<div class="social-box">
					<div class="line"><img src="images/black-dot.jpg" width="100%" height="1" alt="">
					</div>
					<div>
						<ul>
							<li><img src="images/icons/facebook.svg" alt=""></i>
							</li>
							<li><img src="images/icons/behance.svg" alt=""></i>
							</li>
							<li><img src="images/icons/linkedin.svg" alt=""></i>
							</li>
							<li><img src="images/icons/instagram.svg" alt=""></i>
							</li>
							<li><img src="images/icons/mail.svg" alt=""></i>
							</li>
						</ul>
					</div>
					<div class="line"><img src="images/black-dot.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer style="color: #ffffff;">
		<div class="upper top-bottom-padding50" style="background: #23272a; display: flex;">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<h3 class="bottom-margin20">About Us</h3>
						<p style="width: 75%">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic obcaecati iste dolorum quam deleniti neque nisi velit qui vero ab culpa ad laborum, perferendis explicabo ratione eaque repellat deserunt et.</p>
					</div>
					<div class="col-sm-4">
					<h3 class="bottom-margin20">Services</h3>
						<ul>
							<li>Website Design</li>
							<li>PSD to HTML</li>
							<li>Responsive Websites</li>
							<li>UI/UX Design</li>
							<li>Prototyping/Wireframing</li>
						</ul>
					</div>
					<div class="col-sm-4">
					<h3 class="bottom-margin20">Contact</h3>
						<ul>
							<li><span><i aria-hidden="true" class="fa fa-envelope" style="width: 25px;"></i>info@pixelspanda.com</span></li>
							<li><span><i aria-hidden="true" class="fa fa-phone" style="width: 25px;"></i>+91-9999090909</span></li>
							<li></li>
							<li></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="lower text-center" style="background: #000000; padding-top: 30px; padding-bottom: 30px; color: #ffffff;">&copy; Copyright 2020 Pixels Panda | Privacy Policy</div>
	</footer>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<script>
		$( document ).ready( function () {
			//FANCYBOX
			//https://github.com/fancyapps/fancyBox
			$( ".fancybox" ).fancybox( {
				openEffect: "none",
				closeEffect: "none"
			} );
		} );
	</script>
	<script>
		$( document ).ready( function () {

			$( '#carousel-example-generic' ).carousel( {
				interval: 5000
			} )
			$( '#myCarousel1, #carousel-example-generic' ).carousel();

		} );
	</script>
	<script>
		$( document ).ready( function () {
			$( "#btn1" ).click( function () {
				$( "#img1" ).toggle();
			} );
		} );
		$( document ).ready( function () {
			$( "#btn2" ).click( function () {
				$( "#img2" ).toggle();
			} );
		} );
		$( document ).ready( function () {
			$( "#btn3" ).click( function () {
				$( "#img3" ).toggle();
			} );
		} );
	</script>
	
	<script>	
		$(document).ready(function(){
		$('.experience').waypoint(function(direction){
		$('.experience').addClass('animated slideInUp')},
						  {
		offset:'500px'		
		})
		});
	</script>
</body>
</html>
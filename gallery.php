<?php 
require_once("functions.php");
require_once("db_const.php");
session_start();
?>
<!--Design Based on W3layouts
Adapted by Adin Biederman, 2017
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gallery</title>
<link rel="icon" type="image/ico" href="favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Agrico Farm Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //font -->
<!-- light-box -->
<link rel="stylesheet" href="css/lightbox.css">
<!-- //light-box -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="index.php"><span>Denney Road Rowhomes Homeowners Association</span></a>
						</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a href="index.php">Home</a></li>
									<li><a class="active" href="gallery.php">Gallery</a></li>
									<li><a href="calendar.php">Calendar</a></li>
									<li class="dropdown">
										<a href="codes.html" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Member Pages <b class="caret"></b></a>
										<ul class="dropdown-menu">
										<?php
										if (logged_in() == true) {
											$menuitem = "Home";
										} else {
											$menuitem = "Login";
										}
										?>
											<li><a href="login.php"><?php echo $menuitem; ?></a></li>
											<li><a href="documents.php">Documents</a></li>
										</ul>
									</li>
									<li><a href="contact.php">Contact</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
				</div>
				<!-- agileits-top-heading -->
				<div class="agileits-top-heading">
					<h2>Gallery</h2>
				</div>
				<!-- //agileits-top-heading -->
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!--gallery-->
	<div class="gallery">
		<div class="container">
			<div class="agileinfo-gallery">
				<div class="col-md-3 w3-agileits-gallery-grids">
					<a class="w3 wow zoomIn animated" data-wow-delay=".5s" href="images/housephoto1.jpg" data-lightbox="example-set" data-title="The exterior design of the Denney Road Rowhomes creates a welcoming atmosphere for the community.">
						<img src="images/housephoto1.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery-grids">
					<a class="wow zoomIn animated" data-wow-delay=".7s" href="images/leaf.jpg" data-lightbox="example-set" data-title="During the fall months, the Denney Road Rowhomes become beautiful with leaves.">
						<img src="images/leaf.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="col-md-6 w3-agileits-gallery-grids gallery-two wthree">
					<a class="wow zoomIn animated" data-wow-delay=".9s" href="images/fireplace.jpg" data-lightbox="example-set" data-title="The fireplaces at the Denney Road Rowhomes provide both beauty and heat. ">
						<img src="images/fireplace.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery-grids agileits-gallery-grids">
					<a class="wow zoomIn animated" data-wow-delay=".5s" href="images/tree.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
						<img src="images/tree.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery-grids agileits-gallery-grids">
					<a class="wow zoomIn animated" data-wow-delay=".7s" href="images/stairs.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
						<img src="images/stairs.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="col-md-6 w3-agileits-gallery-grids agileits-gallery-grids gallery-two">
					<a class="wow zoomIn animated" data-wow-delay=".9s" href="images/lights.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also essentially unchanged. ">
						<img src="images/lights.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>	
				<div class="col-md-6 w3-agileits-gallery-grids gallery-two w3agile-two">
					<a class="wow zoomIn animated" data-wow-delay=".5s" href="images/g7.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, remaining essentially unchanged. ">
						<img src="images/g7.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>	
				<div class="col-md-3 w3-agileits-gallery-grids">
					<a class="wow zoomIn animated" data-wow-delay=".7s" href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
						<img src="images/g4.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery-grids">
					<a class="wow zoomIn animated" data-wow-delay=".9s" href="images/g9.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
						<img src="images/g9.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>	
				<div class="clearfix"> </div>
				<script src="js/lightbox-plus-jquery.min.js"> </script>
			</div>	
		</div>	
	</div>	
	<!--//gallery-->
	<!-- footer -->
	<footer>
		<div class="container">
			<div class="w3-agileits-footer-grids">
				<div class="col-md-3 w3ls-footer-grid">
					<h4>About The <span>Denney Road Rowhomes</span></h4>
					<div class="wthree-footer-info">
						<p>The Denney Road Rowhomes are a planned community consisting of 14 homes located in Beaverton, OR.</p>
						<ul>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i> : <a href="https://goo.gl/maps/UaVQYGjzSR52">10337 SW Denney Rd<br> Beaverton, OR 97008</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i> : <a href="tel:+15037035128">503-703-5128</a></li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i> : <a href="mailto:carollc@comcast.net">carollc@comcast.net</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 w3ls-footer-grid">
					<h4>Upcoming <span>Events</span></h4>
					<div class="agile-post-grids">
				<div id="with-my-template" style="width: 100%; height: 180px;">
		<style type="text/css">
      #gcf-design {
        height: 275px;
        width: 225px;
        background: #d4d4d4;
        filter: none;
      }
      #gcf-design .gcf-header-block { background: #2AABEB; filter:none; }
    </style>
    <div id="gcf-design">
    </div>
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.gcal_flow.js"></script>
<link href="js/jquery.gcal_flow.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
      $('#gcf-design').gCalFlow({
        calid: 'ie7gi2soi06ghb3i5e13b03fkc@group.calendar.google.com',
        maxitem: 10
      });
    </script>
    </div>

				</div>
				</div>
				<div class="col-md-3 w3ls-footer-grid">
				<center><h4>Quick <span>Links</span></h4>
					<ul>
						<li><a href="index.php">Site Home</a></li>
						<li><a href="calendar.php">Calendar</a></li>
						<li><a href="documents.php">Documents</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<?php
										if (logged_in() == true) {
											$menuitem = "Home";
										} else {
											$menuitem = "Login";
										}
										?>
											<li><a href="login.php"><?php echo $menuitem; ?></a></li>
					</ul></center>
				</div>
				<div class="col-md-3 w3ls-footer-grid">
					<h4>Questions or <span>Comments?</span></h4>
					<div class="w3l-footer-popular">
					<div class="wthree-footer-info">
					<p>If you have any questions, <br>comments, or concerns, feel<br> free to contact us through<br> any of the means linked <a href="contact.php">here</a>.</p>
					</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="agileits-w3layouts">
		<div class="container">
			<p> Copyright © <?php echo date("Y"); ?> Denney Road Rowhomes HOA | All rights reserved.</p>
		</div>
	</div>
	<!-- //copyright -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
</body>	
</html>
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
<title>Denney Road HOA</title>
<link rel="icon" type="image/ico" href="favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Denney Road Home Owners Association, DRHOA, Denney, Rd, Beaverton, HOA, Oregon, U" />
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
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.gcal_flow.js"></script>
<link href="js/jquery.gcal_flow.css" rel="stylesheet" type="text/css">
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
									<li><a class="active" href="index.php">Home</a></li>
									<li><a href="gallery.php">Gallery</a></li>
									<li><a href="calendar.php">Calendar</a></li>
									<li class="dropdown">
										<a href="login.php" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Member Pages <b class="caret"></b></a>
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
				<!-- w3-banner -->
				<div class="w3-banner">
					<div class="w3layouts-border"> </div>
					<h2>Come<span>Explore!</span></h2>
					<p>Welcome to the Website of <span>the Denney Road Homeowners Association.</span></p>
					<div class="w3layouts-border agileits-border"> </div>
				</div>
				<!-- //w3-banner -->
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="agileits-heading">
				<h3>Overview</h3>
			</div>
			<div class="w3_welcome_grids">
				<div class="col-md-6 w3_welcome_grid_left">
					<h5>What are the Denney Road Rowhomes?</h5>
					<p>The Denney Road Rowhomes are a planned community consisting of 14 rowhomes. Our location provides easy access to downtown Portland, Mount Hood, the coast, and the Silicon Forest in Hillsboro. Beaverton parks including Fanno Creek Trail and Camille Park are reached easily by foot.</p>
					<div class="panel-group welcome_panel" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
						  <h4 class="panel-title asd">
							<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Location
							</a>
						  </h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						  <div class="panel-body panel_text">
							We are located in the city of Beaverton, Washington County, near the intersection of Denney Rd and Highway 217.
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
						  <h4 class="panel-title asd">
							<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Schools and Local Area
							</a>
						  </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						   <div class="panel-body panel_text">
							<a href="https://www.beaverton.k12.or.us/schools/mckay/">McKay Elementary</a><br>
							<a href="https://www.beaverton.k12.or.us/schools/whitford">Whitford Middle School</a><br>
							<a href="https://www.beaverton.k12.or.us/schools/southridge">Southridge High School</a><br>
							<a href="https://www.beaverton.k12.or.us/">Multiple Options Schools</a><br><br>
							<b>Also Nearby:</b><br><a href="https://www.beavertonoregon.gov/">City of Beaverton</a><br>
							<a href="http://www.thprd.org/">Tualatin Hills Park and Recreation District </a>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
						  <h4 class="panel-title asd">
							<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Things To Do
							</a>
						  </h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
						   <div class="panel-body panel_text">
							Washington Square Mall <br>
							Beaverton Farmer's Market <br>
							Multnomah Village <br>
							Hillsdale<br>
						  </div>
						</div>
					  </div>
					</div>
				</div>
				<div class="col-md-6 w3_welcome_grid_right">
					<img src="images/bridge.jpg" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- subscribe -->
	<div class="wthree-subscribe">
		<div class="container">
			<div class="agileits-heading">
				<h3>Subscribe</h3>
			</div>
			<div class="w3-agileits-subscribe-form">
				<p>Subscribe to our email newsletter to receive updates - NOTE: Not Yet Live</p>
				<form action="#" method="post">
					<input type="text" placeholder="Subscribe" name="Subscribe" required="">
					<button class="btn1">Subscribe</button>
				</form>
			</div>
		</div>
	</div>
	<!-- //subscribe -->

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
	<script src="js/responsiveslides.min.js"></script>
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
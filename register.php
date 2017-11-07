<?php 
 // Get Needed DB info & redirect if already logged in
	require_once("functions.php");
	require_once("db_const.php");
	session_start();
	if (logged_in() == true) {
		redirect_to("home.php");
	}
if (isset($_POST['submit'])) {
#Get data ready for insertion
$options = [
    'cost' => 12,
];
	$rawpwd	= $_POST['password'];
	$pwd = password_hash($rawpwd, PASSWORD_BCRYPT, $options);
	$first_name	= $_POST['first_name'];
	$last_name	= $_POST['last_name'];
	$house_number = $_POST['house_number'];
	$phone = $_POST['phone'];
	$email		= $_POST['email'];
	$invitecode = $_POST['invitecode'];
 
# Check if Email already exists (Prepared stmnt)
$exists = "";	
$sql = 'SELECT email from users WHERE email = :email LIMIT 1';
$sth = $dbh->prepare($sql);
if ($sth === false) {
    die("Server error. We apologize for the inconvenience. ");
}
$ok = $sth->execute(array(':email' => $email));
if (!$ok) {
    die("Server error. We apologize for the inconvenience.");
}
//If email doesn't exist, continue. 
	if ($sth->rowCount() == 1) {
		$exists .= "e";
	}
// If the email is found in the DB, set URL param and refresh while exiting
	if ($exists == "e") {
	 	$Message = urlencode("EmailExists");
		redirect_to("register.php?Message=".$Message);
		exit(1);
}
	else 
#Verify Invite Code (Prepared stmnt)
$exists1 = "";	
$sql = 'SELECT invitecode from regcodes WHERE invitecode = :invitecode LIMIT 1';
$sth = $dbh->prepare($sql);
if ($sth === false) {
    die("Server error. We apologize for the inconvenience.");
}
$ok = $sth->execute(array(':invitecode' => $invitecode));
if (!$ok) {
    die("Server error. We apologize for the inconvenience.");
}
	if ($sth->rowCount() == 1) {
		$exists1 .= "e";
	}
	if ($exists1 == "e"){
#Insert Data into Database (Prepared stmnt)
$sth = $dbh->prepare("INSERT INTO users
	(uid, email, pwd, first_name, last_name, house_number, phone, date_entered) 
	VALUES (NULL, :email, :pwd, :first_name, :last_name, :house_number, :phone, NULL)");
if ($sth === false) {
    die("Server error. We apologize for the inconvenience.");
}
$ok = $sth->execute(array(':email' => $email, ':pwd' => $pwd, ':first_name' => $first_name, 
':last_name' => $last_name, ':house_number' => $house_number, ':phone' => $phone));
if (!$ok) {
    die("Server error. We apologize for the inconvenience.");
}
		if ($ok) {
		//If all's good, redirect to login with URL param to be handled there
		$Message = urlencode("RegConfirm");
		redirect_to("login.php?Message=".$Message);
} 
		else {
			echo "Server error. We apologize for the inconvenience.";
			exit();
		}
	}
	else {
	$Message = urlencode("RegCodeError");
			redirect_to("register.php?Message=".$Message); 
			}
}
?> 
<!--Design Based on W3layouts
Adapted by Adin Biederman, 2017
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Register</title>
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
							<a href="index.php">Denney Road <span>Homeowners Association</span></a>
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
									<li><a href="about.html">About</a></li>
									<li><a href="codes.html">Community</a></li>
									<li class="dropdown">
										<a href="codes.html" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Member Pages <b class="caret"></b></a>
										<ul class="dropdown-menu">
										<?php
										//Change the dropdown from Login to Home if logged in
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
									<li><a href="contact.html">Contact</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
				</div>
				<!-- agileits-top-heading -->
				<div class="agileits-top-heading">
					<h2>Register</h2>
				</div>
				<!-- //agileits-top-heading -->
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	<!-- main-textgrids -->
	<div class="main-textgrids">
		<div id="page" class="container">
	<center>
		<div class="column1">
			<div class="title">
				<br>
<!-- The HTML registration form -->
<!-- TODO: Fix Formatting, so not fully centered -->
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
	Email: <input type="type" name="email" /><br />
	Password: <input type="password" name="password" /><br />
	First name: <input type="text" name="first_name" /><br />
	Last name: <input type="text" name="last_name" /><br />
	House Number: <input type="text" name="house_number" /><br />
	Phone Number: <input type="text" name="phone" /><br />
	Registration Code: <input type="text" name="invitecode" /><br />
	
 
	<input type="submit" name="submit" value="Register" />
	<br><br>
	<?
//Check URL param for string, and present corresponding banner in response
if(isset($_GET["Message"])) {
  if($_GET["Message"] == 'RegCodeError') {
    echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Invalid Registration Code!</strong> To get a registration code, please email carollc@comcast.net.</div>";
      } else if ($_GET["Message"] == 'EmailExists') {
    echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Email already in use!</strong> Please use a different email.</div>"; 
}
}
?> <br><br>
	<a href="login.php">Back</a>
</form>
</center>
		</div>
		</div>
	<!-- //main-textgrids -->
	<!-- footer -->
	<footer>
		<div class="container">
			<div class="w3-agileits-footer-grids">
				<div class="col-md-3 w3ls-footer-grid">
					<h4>About <span>Agrico Farm</span></h4>
					<div class="wthree-footer-info">
						<p>Etiam feugiat malesuada arcu, eget eleifend eros interdum vel. Duis sit amet nisl in urna vulputate sodales sit amet sed enim.</p>
						<ul>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i> : Inclore Place,Kingsport 56777.</li>
							<li><i class="fa fa-phone" aria-hidden="true"></i> : +1 234 567 9871</li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i> : <a href="mailto:info@example.com">mail@example.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 w3ls-footer-grid">
					<h4>Recent <span>Posts</span></h4>
					<div class="agile-post-grids">
						<div class="agile-post-grid">
							<div class="col-md-5 agile-post-left">
								<a href="single.html">
									<img src="images/p1.jpg" alt="" />
								</a>
							</div>
							<div class="col-md-7 agile-post-right">
								<h5><a href="single.html">Nulla at arcu eu justo blandit.</a></h5>
								<p><i class="fa fa-calendar-o" aria-hidden="true"></i> 03 Jan 2017</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="agile-post-grid">
							<div class="col-md-5 agile-post-left">
								<a href="single.html">
									<img src="images/p2.jpg" alt="" />
								</a>
							</div>
							<div class="col-md-7 agile-post-right">
								<h5><a href="single.html">Nulla at arcu eu justo blandit.</a></h5>
								<p><i class="fa fa-calendar-o" aria-hidden="true"></i> 24 Jan 2017</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 w3ls-footer-grid">
					<h4>Our <span>Navigation</span></h4>
					<ul>
						<li><a href="about.html">About</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="icons.html">Icons</a></li>
						<li><a href="codes.html">Short Codes</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3ls-footer-grid">
					<h4>Flickr <span>Images</span></h4>
					<div class="w3l-footer-popular">
						<div class="popular-grids">
							<div class="popular-grid">
								<a href="single.html"><img src="images/p1.jpg" alt=""></a>
							</div>
							<div class="popular-grid">
								<a href="single.html"><img src="images/p2.jpg" alt=""></a>
							</div>
							<div class="popular-grid">
								<a href="single.html"><img src="images/p3.jpg" alt=""></a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="popular-grids">
							<div class="popular-grid">
								<a href="single.html"><img src="images/p4.jpg" alt=""></a>
							</div>
							<div class="popular-grid">
								<a href="single.html"><img src="images/p1.jpg" alt=""></a>
							</div>
							<div class="popular-grid">
								<a href="single.html"><img src="images/p2.jpg" alt=""></a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="popular-grids">
							<div class="popular-grid">
								<a href="single.html"><img src="images/p3.jpg" alt=""></a>
							</div>
							<div class="popular-grid">
								<a href="single.html"><img src="images/p4.jpg" alt=""></a>
							</div>
							<div class="popular-grid">
								<a href="single.html"><img src="images/p1.jpg" alt=""></a>
							</div>
							<div class="clearfix"> </div>
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
			<p>© 2017 Agrico Farm. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
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
	<script src="js/jarallax.js"></script>
	<script type="text/javascript">
				/* init Jarallax */
				$('.jarallax').jarallax({
					speed: 0.5,
					imgWidth: 1366,
					imgHeight: 768
				})
			</script>
</body>	
</html>
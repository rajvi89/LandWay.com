<?php
include('include/db.php');

if(isset($_POST['btnsubmit']))
{
	$client = $_POST['clientname'];
	$mailid = $_POST['mailid'];
	$message = $_POST['message'];

	$insert = mysqli_query($conn,"INSERT INTO client_contact_tbl(clientname,emailid,message) VALUES('$client','$mailid','$message')");

	if($insert)
	{
		echo "<script>alert('Message Sent Successfully')</script>";
	}
	else
	{
		echo "<script>alert('Error, Try Again')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Grand Villa a Real Estate</title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grand Villa Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/smoothbox.css" type='text/css' media="all" /> 
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">  <!-- font-awesome icons --> 
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>   
<!-- //js -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
<!-- //web-fonts --> 
</head>
<body>
<!-- header-top -->
	<div class="header-top">
		<!-- container -->
		<div class="container">
			<div class="navbar-header">
				<h1><a href="index.html">Land<span>way</span></a></h1>
			</div>
			<div class="nav-top-right">
				<div class="w3layouts-details">
					<ul>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:@example.com">landwayestate@gmail.com</a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(+91) 123 56 8790</li>
					</ul>
				</div>
				<div class="social w3-agileitsicons"> 
					<ul>
						<li><a href="SignIn.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>  
				</div>
				<div class="clearfix"> </div>
			</div>	
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //header-top -->
	<!-- header start here --> 
	<div class="header w3l w3header">  
		<div class="container">
			<nav class="navbar navbar-inverse">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>			              
				</div> 
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
					<ul class="nav navbar-nav ">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li> 
						<li><a href="Gallery.php">Gallery</a></li>
						<li><a href="Pricing.php">Pricing</a></li>
						<li><a href="Agent.php">Agents</a></li>
						<li><a href="Services.php">Services</a></li>
					    <li><a href="Contact.php" class="active">Contact Us</a></li>
						<li><a href="Postproperty.php">Post Property</a></li>
					</ul> 
					<div class="clearfix"> </div>	
				</div>  
			</nav> 
		</div>
		<div class="clearfix"> </div> 
	</div>
	<!-- header end here -->  
<!-- contact -->
	<div class="jarallax w3_agileits-contact w3ls-section text-center" id="contact">
		<div class="container">
			<div class="wthree-contact-top">
			  <div class="col-md-6">	
				<h3 class="agileits-title"><span>C</span>ontact us</h3>
				<p>Landway The Realestate Managment </p>
				<div class="w3_agile-address">
					<h5>Address</h5>
					<span>304 Arohi Complex.</span>
					<span>Vijay Cross Road,Nr.Rasranjan Sweet Mart,<br>NavrangPura,Ahmedabad-380009</span>
					<h5>Get in touch</h5>
					<span>Tel:121 2348 2134 </span>
					<a href="mailto:grandvilla@info.com">landwayestste@info.com</a>
				</div>	
			  </div>
			  <div class="col-md-6">	
				<div class="contact-right-w3l">
					<form method="post">
						<input type="text" class="name" name="clientname" placeholder="Your Name" required="">
						<input type="email" class="name" name="mailid" placeholder="Email" required="">
						<textarea placeholder="Your Message" required="" name="message"></textarea>
						<input type="submit" value="SEND MESSAGE" name="btnsubmit">
					</form>
				</div>
			  </div>
			</div>	
	 </div>
</div>	
<!-- //contact -->
	<!-- jarallax -->
	<script src="js/SmoothScroll.min.js"></script> 
	<script src="js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>  
	<!-- //jarallax --> 
	<!-- start-smooth-scrolling --> 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	 
	<!-- smooth-scrolling-of-move-up -->
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
	<!-- //smooth-scrolling-of-move-up -->  		
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
  </body>
 </html> 
  

<?php
	session_start();
	include('include/db.php');
	if(isset($_POST['btnsubmit']))
	{
		$uname = $_POST['uname'];
		$pw = $_POST['pwd'];
		$role = $_POST['role'];

		$select = mysqli_query($conn,"SELECT * FROM registration_tbl WHERE uname='$uname' AND password='$pw' AND role = '$role'");
		$row = mysqli_num_rows($select);
		

		$select1 = mysqli_query($conn,"SELECT * from login_tbl WHERE username = '$uname' AND password = '$pw'");		
           
        $row1 = mysqli_num_rows($select1);
		
		if($row==1)
		{
				$_SESSION['loginuser'] = $uname;
				echo "<script>alert('Login Successfully')</script>";

				if($role == "Ordinary User")
				{
					header('location:Customer/customerhome.php');
				}
				else if($role == "Agent")
				{
					header('location:Agent/agenthome.php');	
				}
				else
				{
					header('location:Builder/builder_home.php');
				}

		}
		else if($row1==1)
		{
			$_SESSION['login_user'] = $username;   // initializing session
   			header("location: admin/admin_home.php");
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
<link href="css/font-awesome.css" rel="stylesheet"> 

 <!-- font-awesome icons --> 
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
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(+91) 123 456 7890</li>
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
					    <li><a href="Contact.php">Contact Us</a></li>
						<li><a href="#myModal2" data-toggle="modal">Post Property</a></li>
					</ul> 
					<div class="clearfix"> </div>	
				</div>  
			</nav> 
		</div>
		<div class="clearfix"></div>
		<div class="container">
		<div id="container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; transition: transform linear -1ms, -webkit-transform linear -1ms; visibility: hidden; z-index: -100;"><div style="background-position: 50% 50%; background-repeat: no-repeat; background-image: url(&quot;http://localhost/Landwayfinal/images/b1.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 1349px; height: 637px; overflow: hidden; pointer-events: none; transition: transform linear -1ms, -webkit-transform linear -1ms; background-size: 1349px 674.5px; visibility: visible; transform: translate3d(0px, 77.96px, 0px);"></div></div>  
		<!--<div style="background-position: 50% 50%; background-repeat: no-repeat; background-image: url(&quot;http://localhost/Landwayfinal/images/b2.jpg&quot;); position: fixed; top: 0px; left: 50px; width:100%; right: 50px; height: 637px; overflow: hidden; pointer-events: none; transition: transform linear -1ms, -webkit-transform linear -1ms; background-size: 1349px 674.5px; visibility: visible; transform: translate3d(0px, 77.96px, 0px);"></div>-->
			<div class="w3ls-title col-md-6"> 
				
			</div>
			<div class="col-md-6">
				<h3 class="agileits-title" style="margin-top: 15px;"><span>L</span>og <span>i</span>n</h3>
				<div class="row" style="background-color: rgba(225, 214, 214, 0.39);margin-top: 15px;box-shadow: 2px 0px 15px 5px #434040; padding: 10px;">
				<form class="form-horizontal" method="post">
                
                <div class="form-group">
                  <label class="control-label col-sm-4" style="text-align: left;">User Name:</label>
                  <div class="col-sm-8">
                    <input type="textbox" class="form-control" placeholder="User Name" name="uname" required>
                  </div>
                </div>

        
                <div class="form-group">
                  <label class="control-label col-sm-4" for="pwd" style="text-align: left;">Password:</label>
                  <div class="col-sm-8">          
                    <input type="password" class="form-control"  placeholder="Enter password" name="pwd" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-4" for="pwd" style="text-align: left;">Login As:</label>
                  <div class="col-sm-8">   
                      <select class="form-control" name="role" required>
                        <option selected="selected">Select Role</option>
                        <option value="Agent">Agent</option>
			            <option value="Builder">Builder</option>
			            <option value="Ordinary User">Ordinary User</option>
			            <option value="Admin">Admin</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-4" for="pwd" style="text-align: left;"></label>
                  	<div class="col-sm-8">   
 						<input type="checkbox" name="remember"><label class="control-label">Remember me</label>
 						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="fpassword.php">Forgot Password?</a>
                   </div>
                </div>
				<div class="form-group place-grid">
			         <div class="col-sm-4 col-md-offset-4 " align="center">          
			            <input type="submit" value="Submit" name="btnsubmit">
			          </div>
		        </div>
				
			</form>
			</div>
	</div>
	<!-- header end here -->  
					
	<!-- //banner-bottom --> 	
	<script src="js/responsiveslides.min.js"></script> 
	<!-- //menu-js -->
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
  

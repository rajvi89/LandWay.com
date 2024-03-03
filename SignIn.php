<?php
	include('include/db.php');
	$fnameErr = $lnameErr = $unameErr = $pwErr = $cpwErr = $emailErr = $genderErr = $dobErr = $cityErr = $mnoErr = $roleErr = "";
	if($_SERVER["REQUEST_METHOD"] == "POST") 
	{
			  /*if (empty($_POST["fname"]))
			  {
			    	$fnameErr = "Required";
			  }
			  else
			  {
			    $name = test_input($_POST["fname"]);
			  }
			  if (empty($_POST["fname"]))
			  {
			    	$fnameErr = "Required";
			  }
			  else
			  {
			    $name = test_input($_POST["lname"]);
			  }
			  if (empty($_POST["city"]))
			  {
			    	$cityErr = "Required";
			  }
			  else
			  {
			    $name = test_input($_POST["city"]);
			  }
			  if (empty($_POST["email"]))
			  {
			    	$emailErr = "Required";
			  }
			  else
			  {
			    $name = test_input($_POST["email"]);
			  }
			  if (empty($_POST["pwd"]))
			  {
			    	$pwErr = "Required";
			  }
			  else
			  {
			    $name = test_input($_POST["pwd"]);
			  }
			  if (empty($_POST["role"]))
			  {
			    	$roleErr = "Required";
			  }
			  else
			  {
			    $name = test_input($_POST["role"]);
			  }
			  if (empty($_POST["lname"]))
			  {
			    	$lnameErr = "Required";
			  }
			  else
			  {
			    $name = test_input($_POST["lname"]);
			  }
			  if (empty($_POST["dob"]))
			  {
			    	$dobErr = "Required";
			  }
			  else
			  {
			    $name = test_input($_POST["dob"]);
			  }
			  if (empty($_POST["mno"]))
			  {
			    	$mnoErr = "Required";
			  }
			  else
			  {
			    $name = test_input($_POST["mno"]);
			  }
			  if (empty($_POST["uname"]))
			  {
			    	$unameErr = "Required";
			  }
			  else
			  {
			    $name = test_input($_POST["uname"]);
			  }
			  if (empty($_POST["cpwd"]))
			  {
			    	$cpwErr = "Required";
			  }
			  else
			  {
			    $name = test_input($_POST["cpwd"]);
			  }

		  
			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
	 
	}*/
	
		if(isset($_POST['btnsub']))
		{

			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$uname = $_POST['uname'];
			$pw = $_POST['pwd'];
			$cpw = $_POST['cpwd'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$dob = $_POST['dob'];
			$city = $_POST['city'];
			$mno = $_POST['mno'];
			$role = $_POST['role'];

			
			$fname = $lname = $uname = $pw = $cpw = $email = $gender = $dob = $city = $mno = $role ="";

			



			$insert = mysqli_query($conn,"INSERT INTO registration_tbl(fname,lname,uname,password,confpassword,emailid,gender,dob,city,mobile,role)
					VALUES('$fname',
						   '$lname',
						   '$uname',
						   '$pw',
						   '$cpw',
						   '$email',
						   '$gender',
						   '$dob',
						   '$city',
						   '$mno',
						   '$role')");
			if($insert)
			{
				echo "<script>alert('Register Successfully')</script>";
			}
			else
			{
				echo "<script>alert('Error In Registration, Try Again')</script>";	
			}
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
<style type="text/css">
	.error {color: #FF0000;}
</style> 
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
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:@example.com">landwayestate.com</a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(+91) 123 456 7890</li>
					</ul>
				</div>
				<div class="social w3-agileitsicons"> 
					<ul>
						<li><a href="SignIn.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
		<div id="container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; transition: transform linear -1ms, -webkit-transform linear -1ms; visibility: hidden; z-index: -100;"><div style="background-position: 50% 50%; background-repeat: no-repeat; background-image: url(&quot;http://localhost/Landwayfinal/images/b1.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 1349px; height: 637px; overflow: hidden; pointer-events: none; transition: transform linear -1ms, -webkit-transform linear -1ms; background-size: 1349px 674.5px; visibility: visible; transform: translate3d(0px, 77.96px, 0px);"></div>
		</div>  

			<div class="w3ls-title col-md-9"> 
				<h3 class="agileits-title" style="margin-top: 5px;"><span>R</span>egistar <span>H</span>ere</h3>
					<div class="row">
					
					</div>					
				</div>
			</div>
			<div class="col-md-6">
				
			</div>
			<div class="container">
					<div class="row" >
							<div class="col-md-3">
					</div>	
				<div class="col-md-12" style="background-color: #ffffff;margin-top: 5px;box-shadow: 2px 0px 15px 5px #8d8888bf; padding: 15px; width: 100%;">
							<div class="col-md-6">
								<form class="form-horizontal" method="post" style="text-align: justify;" r>
									<div class="form-group">
									    <label class="control-label col-sm-4" for="email" style="text-align: left;">First Name:</label>
										 <div class="col-sm-5">
										   <input type="text" class="form-control" name="fname" placeholder="Fname" pattern="[a-zA-Z]+" title="Only Alphbates">
										    </div>
										   <div class="col-md-3">
										   		
										   </div>
									</div>
									<div class="form-group">
									    <label class="control-label col-sm-4" for="email" style="text-align: left;">Gender:</label>
										    <div class="col-sm-8">
										     <input  type="radio" name="gender" value="Male">  Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					           				 <input type="radio" name="gender" value="Female">  Female
										    </div>
										</div>
									<div class="form-group">
									    <label class="control-label 	col-sm-4" for="email" style="text-align: left;">	City:
									    </label>
										 <div class="col-sm-5">
										   <input type="text" class="form-control" name="city" placeholder="City" pattern="[a-zA-Z]+" title="Please Provide Correct City Name">
										 </div>
										 <div class="col-md-3">
										   		<span class="error"></span>
										 </div>
									</div>
									<div class="form-group">
									    <label class="control-label 	col-sm-4" for="email" style="text-align: left;">	Email:
									    </label>
										 <div class="col-sm-5">
										   <input type="email" class="form-control" name="email" placeholder="Mailid">
										 </div>
										 <div class="col-md-3">
										   		<span class="error"></span>
										 </div>
									</div>
									<div class="form-group">
									    <label class="control-label 	col-sm-4" for="email" style="text-align: left;">	Password:
									    </label>
										 <div class="col-sm-5">
										   <input type="password" class="form-control" name="pwd" placeholder="password">
										 </div>
										 <div class="col-md-3">
										   		<span class="error"></span>
										 </div>
									</div>
									<div class="form-group">
						                  <label class="control-label col-sm-4" for="pwd" style="text-align: left;">Register As:</label>

						                  <div class="col-sm-5">   
						                      <select class="form-control" name="role">
						                        		<option selected="selected"> Select</option>
						                        	   <option value="Agent">Agent</option>
									                   <option value="Builder">Builder</option>
									                   <option value="Ordinary User">Ordinary User</option>
						                      </select>
						                    </div>
						                    <div class="col-md-3">
										   		<span class="error"></span>
										 </div>
						                </div>
								

							</div>
							<div class="col-md-6">
						     <div class="form-horizontal">
								<div class="form-group">
									    <label class="control-label 	col-sm-4" for="email" style="text-align: left;">	Last Name:
									    </label>
										 <div class="col-sm-5">
										   <input type="text" class="form-control" name="lname'" placeholder="Lname" pattern="[a-zA-Z]+" title="Only Alphbates">
										 </div>
										 <div class="col-md-3">
										   		<span class="error"></span>
										 </div>
									</div>
									<div class="form-group">
									    <label class="control-label 	col-sm-4" for="email" style="text-align: left;">	Date of birth:
									    </label>
										 <div class="col-sm-5">
										   <input type="date" class="form-control" name="dob" placeholder="dob">
										 </div>
										 <div class="col-md-3">
										   		<span class="error"></span>
										 </div>
									</div>
									<div class="form-group">
									    <label class="control-label 	col-sm-4" for="email" style="text-align: left;">	Mobile No:
									    </label>
										 <div class="col-sm-5">
										   <input type="text" class="form-control" name="mno" placeholder="Mobile" pattern="[0-9]+10" title="Mobile No Shoulde be 10 Digits Only">
										 </div>
										 <div class="col-md-3">
										   		<span class="error"></span>
										 </div>
									</div>
									<div class="form-group">
									    <label class="control-label 	col-sm-4" for="email" style="text-align: left;">	User Name:
									    </label>
										 <div class="col-sm-5">
										   <input type="text" class="form-control" name="uname" placeholder="abc@ymail.com">
										 </div>
										 <div class="col-md-3">
										   		<span class="error"></span>
										 </div>
									</div>
									<div class="form-group">
									    <label class="control-label 	col-sm-4" for="email" style="text-align: left;">	Confirm Password:
									    </label>
										 <div class="col-sm-5">
										   <input type="password" class="form-control" name="cpwd" placeholder="confirmpassword">
										 </div>
										 <div class="col-md-3">
										   		<span class="error"></span>
										 </div>
									</div>
									<div class="form-group place-grid" style="margin:0px;">
									    	<div class="col-md-offset-4 col-md-8" style="">          
 						            		<input type="submit"  name="btnsub" value="Submit">
						          			</div>
										</div>
								</div>	
																
							</div>
							</form>
							<div class="col-md-3"></div>
					</div>
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
  

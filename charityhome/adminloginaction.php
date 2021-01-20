
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FoodForAll &mdash; We Care</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,500|Dosis:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
	
	<!--css for login and signup-->
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts2/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css2/style.css">
	<!--end css for login and signup-->

  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light ftco-navbar-dark" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">FoodForAll</a>
    </div>
  </nav>
  <!-- END nav -->
  <article>
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
	  
	  
    <div class="main">
<article> 
						 <?php 
							  include 'conn.php';

							  $conn=OpenCon();
							  session_start();
							  
							  $adminid=$_POST["adminid"];
							  $adminpassword=$_POST["adminpassword"];

							  $sql="SELECT * FROM `admin` a WHERE `adminid` = '$adminid' and `adminpassword`='$adminpassword'";
							  
							  $result=$conn->query($sql);
							  //output data
							  if($result->num_rows > 0)
							  {													  
								   while($row=$result->fetch_assoc())
								   {
										$_SESSION['login_user']=$adminid;
										
										header("location:adminhome.php");
								   }
							  }
							  else {
								  ?>
								  <section class="sign-in">
									<div class="container">
										<div class="signin-content">
											<div class="signin-image">
												<figure><img src="images2/signin-image.jpg" alt="sing up image"></figure>
												<a href="index.php" class="signup-image-link">Back To Homepage</a>
											</div>

											<div class="signin-form">
												<h2 class="form-title">Invalid Admin ID or Password !</h2>
												<h2 class="form-title">Sign In</h2>
												<h4 class="form-title">Admin (Authorized Staff Only)</h4>
												<form method="POST" class="register-form" id="login-form" action="adminloginaction.php">
													<div class="form-group">
														<label for="adminid"><i class="zmdi zmdi-account material-icons-name"></i></label>
														<input type="text" name="adminid" id="adminid" placeholder="Admin ID"/>
													</div>
													<div class="form-group">
														<label for="adminpassword"><i class="zmdi zmdi-lock"></i></label>
														<input type="password" name="adminpassword" id="adminpassword" placeholder="Password"/>
													</div>
													<div class="form-group form-button">
														<input type="submit" name="submit" id="signin" class="form-submit" value="Log in"/>
													</div>
												</form>
											   
											</div>
										</div>
									</div>
								</section>
								<?php
								//  echo "<script type='text/javascript'>alert('Failed!')</script>";
								//$_SESSION['message']="Incorrect Username or Password.";
							  	//header("location:participantlogin.php");
								//echo "<script type='text/javascript'>alert('Failed!')</script>";
								//echo '<h3>Invalid username or password</h3>';		
								
							   }

							  CloseCon($conn);
						 ?>
				 </article>

        

    </div>
      
    </div>
  </div>
  <!-- JS -->
			<script src="vendor2/jquery/jquery.min.js"></script>
			<script src="js2/main.js"></script>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>

  <script src="js/jquery.fancybox.min.js"></script>
  
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
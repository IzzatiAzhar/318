<?php
	
$conn = mysqli_connect("localhost","root","","ffa") or die("Database Not Connected");


if($_SERVER['REQUEST_METHOD'] == 'POST')
{

	if(isset($_POST['submit']))
	{

		if(isset($_POST['term']))
		{

			$orgid = mysqli_escape_string($conn, $_POST['orgid']);
			$orgname = mysqli_escape_string($conn, $_POST['orgname']);
			$orgtelno = mysqli_escape_string($conn, $_POST['orgtelno']);
			$orgemail = mysqli_escape_string($conn, $_POST['orgemail']);
			$orgaddress = mysqli_escape_string($conn, $_POST['orgaddress']);
			$orgpassword = mysqli_escape_string($conn, $_POST['orgpassword']);
			

			function validate($form_data)
			{
				$form_data = trim( stripcslashes( htmlspecialchars($form_data) ) );
				return $form_data;
			}

			$orgid = validate($orgid);
			$orgname = validate($orgname);
			$orgtelno = validate($orgtelno);
			$orgemail = validate($orgemail);
			$orgaddress = validate($orgaddress);
			$orgpassword = validate($orgpassword);
			

			if(!empty($orgid) && !empty($orgname) && !empty($orgtelno) && !empty($orgemail) && !empty($orgaddress)  && !empty($orgpassword))
			{

				$pass = password_hash($orgpassword, PASSWORD_DEFAULT);

				$insert = "INSERT INTO `organizer`(`orgid`,`orgname`,`orgtelno`,`orgemail`,`orgaddress`,`orgpassword`) VALUES('$orgid','$orgname','$orgtelno','$orgemail','$orgaddress','$orgpassword')";

				if(mysqli_query($conn, $insert))
				{
					echo "<script type='text/javascript'>alert('Registered successfully!')</script>";
					
					
				}
				else
				{
					echo "<script type='text/javascript'>alert('Failed!')</script>";
				}

			}
			else
			{
				echo "<script type='text/javascript'>alert('Empty field found!')</script>";
			}

		}
		else
		{
			echo "<script type='text/javascript'>alert('Please check term and condition!')</script>";
		}

	}

}

?>




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
    <title>Sign Up</title>

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

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">SIGN UP</h2>
						<h4 class="form-title">Come and Join Us As Our Event Organizer !</h4>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="orgid"><i class="zmdi zmdi-account-box-o"></i></label>
                                <input type="text" name="orgid" id="orgid" placeholder="Organizer ID"/>
                            </div>
                            <div class="form-group">
                                <label for="orgname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="orgname" id="orgname" placeholder="Organization Name"/>
                            </div>
                            <div class="form-group">
                                <label for="orgtelno"><i class="zmdi zmdi-account-calendar"></i></label>
                                <input type="text" name="orgtelno" id="orgtelno" placeholder="Contact Number"/>
                            </div>
                            <div class="form-group">
                                <label for="orgemail"><i class="zmdi zmdi-sort-amount-desc"></i></label>
                                <input type="text" name="orgemail" id="orgemail" placeholder="xxxx@gmail.com"/>
                            </div>
							<div class="form-group">
                                <label for="orgaddress"><i class="zmdi zmdi-view-stream"></i></label>
                                <input type="text" name="orgaddress" id="orgaddress" placeholder="Organization Address"/>
                            </div>
							<div class="form-group">
                                <label for="orgpassword"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="orgpassword" id="orgpassword" placeholder="*****"/>
                            </div>
						
                            <div class="form-group">
                                <input type="checkbox" name="term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images2/signup-image.jpg" alt="sing up image"></figure>
                        <a href="loginorg.php" class="signup-image-link">I have an account</a>
						<a href="index.php" class="signup-image-link">Back To Homepage</a>

                    </div>
                </div>
            </div>
        </section>

        

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
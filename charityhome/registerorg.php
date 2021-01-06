	<?php
	
$conn = mysqli_connect("localhost","root","","food") or die("Database Not Connected");


if($_SERVER['REQUEST_METHOD'] == 'POST')
{

	if(isset($_POST['submit']))
	{

		if(isset($_POST['term']))
		{

			$orgID = mysqli_escape_string($conn, $_POST['orgID']);
			$orgName = mysqli_escape_string($conn, $_POST['orgName']);
			$orgPersonInCharge = mysqli_escape_string($conn, $_POST['orgPersonInCharge']);
			$orgpassword = mysqli_escape_string($conn, $_POST['orgpassword']);

			function validate($form_data)
			{
				$form_data = trim( stripcslashes( htmlspecialchars($form_data) ) );
				return $form_data;
			}

			$vorgid = validate($orgID);
			$vorgname = validate($orgName);
			$vorgpic = validate($orgPersonInCharge);
			$vorgpass = validate($orgpassword);

			if(!empty($vorgid) && !empty($vorgname) && !empty($vorgpic) && !empty($vorgpass))
			{

				$pass = password_hash($vorgpass, PASSWORD_DEFAULT);

				$insert = "INSERT INTO `organizer`(`orgID`,`orgName`,`orgPersonInCharge`,`orgpassword`)";

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
    <title>Sign Up Form by Colorlib</title>

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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="registerparticipant.php" class="nav-link">Sign Up</a></li>
          <li class="nav-item"><a href="participantlogin.php" class="nav-link">Sign In</a></li>
        </ul>
      </div>
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
                        <body>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-5">
					<h1>Register Now</h1>
					<form method="post">
						<div class="form-group">
							<label>Organizer ID</label>
							<input type="text" name="orgID" placeholder="Enter ID" class="form-control">
						</div>
						<div class="form-group">
							<label>Organization Name</label>
							<input type="text" name="orgName" placeholder="Enter Organization Name" class="form-control">
						</div>
					
						<div class="form-group">
							<label>Organization Representative</label>
							<input type="text" name="empTell" placeholder="Enter Telephone Number" class="form-control">
						</div>
						
						<div class="form-group">
							<label>Organization Password</label>
							<input type="Password" name="password" placeholder="*******" class="form-control">
						</div>
						<input type="checkbox" name="term"> I Follow All Term & Condition <br>
						<br>
						<input type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary mt-3"> <br>
						<input type="button" value="Back" class="btn btn-lg btn-primary mt-3" onclick="window.location.href='index.php'" />
					</form>
					<h3 style="color:red;"><?php echo @$msg; ?></h3>
				</div>
			</div>
		</div>



		

                    </div>
                    <div class="signup-image">
                        <figure><img src="images2/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
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
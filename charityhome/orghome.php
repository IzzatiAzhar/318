<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="images/favicon.png"/>
</head>
  <head>
    <title>FoodForAll &mdash; We Care</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="icon" href="images/LOGO.jpg">
	<link rel="icon" href="images/LOGO.jpg">
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

  </head>
  <body>
    
  <?php include 'orgnav.php'; ?>
  <!-- END nav -->
  
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/home.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h2 class="heading mb-5">Food For All</h2>
              <p style="display: inline-block;color:white">We Care. We Share. We Love.</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
   <div class="site-section fund-raisers">
    <div class="container">
      <div class="row mb-3 justify-content-center">
        <div class="col-md-8 text-center">
          <h2>FOOD FOR ALL</h2>
          <p class="lead">We are committed to reduce waste and feeding the less fortunate. By the platform that we created, our charity partners are able to provide about of 33,000 meals a week for thousands of Malaysian’s living on or below the poverty line.</p>
		  
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-3 mb-5">
          <div class="person-donate text-center">
		  <!-- Event 1 -->
			<div class="text-box">
			
					<?php
					
						include 'conn.php';

							  $conn=OpenCon();
							  session_start();
							

						
						$orgid = $_SESSION['login_user'];
				
						$sql = "SELECT `eventname`,`eventid` FROM `event` where `eventid` = 'E001'";
						$result = $conn->query($sql);
				
						if ($result->num_rows > 0) {
							//output data of each row
												
							while($row = $result->fetch_assoc())
							{                              
									
									$eventname = $row["eventname"];
									$eventid = $row["eventid"];
							}
						}
						else {
							echo "Error in fetching data";
						}
						
						$sql2 = "SELECT SUM(`amtdonation`) AS totaldonation
								FROM `donation` 
								where `eventid` = 'E001'";
						
						$result2 = $conn->query($sql2);
						
						  if($result2-> num_rows > 0) {
							//output data of each row
							while($row = $result2->fetch_assoc()){
								
									$donate = $row["totaldonation"];
							}
						}

						
						CloseCon($conn);			
					?>
					
					<img src="images/kbk.png" alt="Image placeholder" class="img-fluid">
						<div class="donate-info">
						  <h2>#KITAPRIHATIN</h2><br>
						  <p class="main-text">Total Donation</p>
						  <p class="main-text"><?php echo "RM ", $donate ?></p>
						  
						  
						</div>
						
			</div>
				
          </div>    
        </div>

        <div class="col-md-6 col-lg-3 mb-5">
          <div class="person-donate text-center">
		  <!-- Event 2 -->
			<div class="text-box">
					<?php
						
						$conn = OpenCon();

						
						$orgid = $_SESSION['login_user'];
				
						$sql = "SELECT `eventname`,`eventid` FROM `event` where `eventid` = 'E002'";
						$result = $conn->query($sql);
				
						if ($result->num_rows > 0) {
							//output data of each row
												
							while($row = $result->fetch_assoc())
							{                              
									
									$eventname = $row["eventname"];
									$eventid = $row["eventid"];
							}
						}
						else {
							echo "Error in fetching data";
						}
						
						$sql2= "SELECT SUM(`amtdonation`) AS totaldonation
								FROM `donation` 
								where `eventid` = 'E002'";
						
						$result2 = $conn->query($sql2);
						
						  if($result2-> num_rows > 0) {
							//output data of each row
							while($row = $result2->fetch_assoc()){
								
									$donate = $row["totaldonation"];
							}
						}
						
						CloseCon($conn);			
					?>
					 <img src="images/stls.png" alt="Image placeholder" class="img-fluid">
						<div class="donate-info">
						  <h2>#WeCare</h2><br>
						   <p class="main-text">Total Donation</p>
						   <p class="main-text"><?php echo "RM ", $donate ?></p>
						  
						</div>
            </div>
          </div>    
        </div>

        <div class="col-md-6 col-lg-3 mb-5">
          <div class="person-donate text-center">
			<!-- Event 3 -->
			<div class="text-box">
				<?php
					
					$conn = OpenCon();

					
					$orgid = $_SESSION['login_user'];
			
					$sql = "SELECT `eventname`,`eventid` FROM `event` where `eventid` = 'E003'";
					$result = $conn->query($sql);
			
					if ($result->num_rows > 0) {
						//output data of each row
											
						while($row = $result->fetch_assoc())
						{                              
								
								$eventname = $row["eventname"];
								$eventid = $row["eventid"];
						}
					}
					else {
						echo "Error in fetching data";
					}
					
					$sql2= "SELECT SUM(`amtdonation`) AS totaldonation
								FROM `donation` 
								where `eventid` = 'E003'";
						
						$result2 = $conn->query($sql2);
						
						  if($result2-> num_rows > 0) {
							//output data of each row
							while($row = $result2->fetch_assoc()){
								
									$donate = $row["totaldonation"];
							}
						}
					
					CloseCon($conn);			
				?>
				<img src="images/stlj.png" alt="Image placeholder" class="img-fluid">
				<div class="donate-info">
				  <h2>#WeLove</h2><br>
				  <p class="main-text">Total Donation</p>
				  <p class="main-text"><?php echo "RM ", $donate ?></p>
				</div>
            </div>
          </div>    
        </div>

        <div class="col-md-6 col-lg-3 mb-5">
          <div class="person-donate text-center">
			<!-- Event 4 -->
			<div class="text-box">
				<?php
					
					$conn = OpenCon();

					
					$orgid = $_SESSION['login_user'];
			
					$sql = "SELECT `eventname`,`eventid` FROM `event` where `eventid` = 'E004'";
					$result = $conn->query($sql);
			
					if ($result->num_rows > 0) {
						//output data of each row
											
						while($row = $result->fetch_assoc())
						{                              
								
								$eventname = $row["eventname"];
								$eventid = $row["eventid"];
						}
					}
					else {
						echo "Error in fetching data";
					}
					$sql2= "SELECT SUM(`amtdonation`) AS totaldonation
								FROM `donation` 
								where `eventid` = 'E004'";
						
						$result2 = $conn->query($sql2);
						
						  if($result2-> num_rows > 0) {
							//output data of each row
							while($row = $result2->fetch_assoc()){
								
									$donate = $row["totaldonation"];
									
							}
						}
					
					CloseCon($conn);			
				?>
				<img src="images/stlm.png" alt="Image placeholder" class="img-fluid">
					<div class="donate-info">
					  <h2>#WeHelp</h2><br>
					  <p class="main-text">Total Donation</p>
					  <p class="main-text"><?php echo "RM ", $donate ?></p>
					</div>
            </div>
          </div>    
        </div>


        <div class="col-md-6 col-lg-3 mb-5">
          <div class="person-donate text-center">
			<!-- Event 5 -->
			<div class="text-box">
				<?php
					
					$conn = OpenCon();

					
					$orgid = $_SESSION['login_user'];
			
					$sql = "SELECT `eventname`,`eventid` FROM `event` where `eventid` = 'E005'";
					$result = $conn->query($sql);
			
					if ($result->num_rows > 0) {
						//output data of each row
											
						while($row = $result->fetch_assoc())
						{                              
								
								$eventname = $row["eventname"];
								$eventid = $row["eventid"];
						}
					}
					else {
						echo "Error in fetching data";
					}
					
					$sql2= "SELECT SUM(`amtdonation`) AS totaldonation
								FROM `donation` 
								where `eventid` = 'E005'";
						
						$result2 = $conn->query($sql2);
						
						  if($result2-> num_rows > 0) {
							//output data of each row
							while($row = $result2->fetch_assoc()){
								
									$donate = $row["totaldonation"];
							}
						}
					
					CloseCon($conn);			
				?>
				<img src="images/stlkl.png" alt="Image placeholder" class="img-fluid">
					<div class="donate-info">
					  <h2>#WeConcern</h2><br>
					  <p class="main-text">Total Donation</p>
					  <p class="main-text"><?php echo "RM ", $donate ?></p>
					</div>
			</div>    
          </div>
		</div>

        <div class="col-md-6 col-lg-3 mb-5">
          <div class="person-donate text-center">
		  <!-- Event 6 -->
			<div class="text-box">
				<?php
					
					$conn = OpenCon();

					
					$partid = $_SESSION['login_user'];
			
					$sql = "SELECT `eventname`,`eventid` FROM `event` where `eventid` = 'E006'";
					$result = $conn->query($sql);
			
					if ($result->num_rows > 0) {
						//output data of each row
											
						while($row = $result->fetch_assoc())
						{                              
								
								$eventname = $row["eventname"];
								$eventid = $row["eventid"];
						}
					}
					else {
						echo "Error in fetching data";
					}
					
					$sql2= "SELECT SUM(`amtdonation`) AS totaldonation
								FROM `donation` 
								where `eventid` = 'E006'";
						
						$result2 = $conn->query($sql2);
						
						  if($result2-> num_rows > 0) {
							//output data of each row
							while($row = $result2->fetch_assoc()){
								
									$donate = $row["totaldonation"];
									//echo $donate;
							}
						}
					
					CloseCon($conn);			
				?>
				<img src="images/pscc.png" alt="Image placeholder" class="img-fluid">
					<div class="donate-info">
					  <h2>Together We Help</h2><br>
					  <p class="main-text">Total Donation</p>
					  <p class="main-text"><?php echo "RM ", $donate ?></p>
					</div>
			</div>
          </div>    
        </div>

        <div class="col-md-6 col-lg-3 mb-5">
          <div class="person-donate text-center">
		  <!-- Event 7 -->
			<div class="text-box">
				<?php
					
					$conn = OpenCon();

					
					$partid = $_SESSION['login_user'];
			
					$sql = "SELECT `eventname`,`eventid` FROM `event` where `eventid` = 'E007'";
					$result = $conn->query($sql);
			
					if ($result->num_rows > 0) {
						//output data of each row
											
						while($row = $result->fetch_assoc())
						{                              
								
								$eventname = $row["eventname"];
								$eventid = $row["eventid"];
						}
					}
					else {
						echo "Error in fetching data";
					}
					
					$sql2= "SELECT SUM(`amtdonation`) AS totaldonation
								FROM `donation` 
								where `eventid` = 'E007'";
						
						$result2 = $conn->query($sql2);
						
						  if($result2-> num_rows > 0) {
							//output data of each row
							while($row = $result2->fetch_assoc()){
								
									$donate = $row["totaldonation"];
									//echo $donate;
							}
						}
					
					CloseCon($conn);			
				?>
				<img src="images/tlfp.png" alt="Image placeholder" class="img-fluid">
					<div class="donate-info">
					  <h2>Save The World</h2><br>
					  <p class="main-text">Total Donation</p>
					  <p class="main-text"><?php echo "RM ", $donate ?></p>
					</div>
			</div>
          </div>    
        </div>

        <div class="col-md-6 col-lg-3 mb-5">
          <div class="person-donate text-center">
		  <!-- Event 8 -->
			<div class="text-box">
				<?php
					
					$conn = OpenCon();

					
					$partid = $_SESSION['login_user'];
			
					$sql = "SELECT `eventname`,`eventid` FROM `event` where `eventid` = 'E008'";
					$result = $conn->query($sql);
			
					if ($result->num_rows > 0) {
						//output data of each row
											
						while($row = $result->fetch_assoc())
						{                              
								
								$eventname = $row["eventname"];
								$eventid = $row["eventid"];
						}
					}
					else {
						echo "Error in fetching data";
					}
					
					$sql2= "SELECT SUM(`amtdonation`) AS totaldonation
								FROM `donation` 
								where `eventid` = 'E008'";
						
						$result2 = $conn->query($sql2);
						
						  if($result2-> num_rows > 0) {
							//output data of each row
							while($row = $result2->fetch_assoc()){
								
									$donate = $row["totaldonation"];
									//echo $donate;
							}
						}
					
					CloseCon($conn);			
				?>
				<img src="images/fmkl.png" alt="Image placeholder" class="img-fluid">
					<div class="donate-info">
					  <h2>Come and Get It</h2><br>
					  <p class="main-text">Total Donation</p>
					  <p class="main-text"><?php echo "RM ", $donate ?></p>
					</div>
			</div>
          </div>    
        </div>

      </div>
    </div>
  </div> <!-- .section -->
 


  <footer class="footer">
    <?php include 'footer.php'; ?>
  </footer>

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
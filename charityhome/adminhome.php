<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FoodForAll &mdash; We Care</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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

	<style>
		#user {
		  font-family: Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		#user td, #user th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		#user tr:nth-child(even){background-color: #f2f2f2;}

		#user tr:hover {background-color: #ddd;}

		#user th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #BDB768;
		  color: white;
		}
	</style>
	

  </head>
  <body>
    <?php include 'adminheader.php'; ?>
  
  
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="adminhome.php">FoodForAll</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="adminhome.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="adminallevents.php" class="nav-link">All Events</a></li>
          <li class="nav-item"><a href="adminallorganizers.php" class="nav-link">All Organizers</a></li>
          <li class="nav-item"><a href="adminlogout.php" class="nav-link">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav --> 
 
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/banner.jpg');" data-stellar-background-ratio="0.5">
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
	  <div class="site-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          <form>
            <article>
		<h2 style="text-align:center">Food For All Profile</h2>
		<article>
		 
		<?php
		
		$adminid = $login_id;
		
		$conn = OpenCon();
		
		
		
		$sql = "select * from `admin` where `adminid` = '$adminid'";
				
		$result = $conn->query($sql);
		
		
		
		if ($result->num_rows > 0){
		//Ouput data of each row
			while($row = $result->fetch_assoc()){
				
				$adminid = $row["adminid"];
				$adminemail = $row["adminemail"];
				$admintelno = $row["admintelno"];
				
				
				echo "<table id=user>";
				echo "<tr>";
					echo "<th>Admin ID </th>";
					echo "<td>$adminid</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<th>Email </th>";
					echo "<td>$adminemail</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<th>Contact Number </th>";
					echo "<td>$admintelno</td>";
				echo "</tr>";
				
				
			}
		}else
			echo "Error in fetching data";
		echo "</table>";
		echo "<br>";
		
	
		
		
		CloseCon($conn);
		
		?>
		
		
	</article>
	</form>
        
        </div>

        <div class="col-md-6" ><img src="images/a9.png"></div>
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
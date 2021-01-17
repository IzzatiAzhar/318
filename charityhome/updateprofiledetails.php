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
	
	 <?php include 'header.php'; ?>
	 
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
    
  <?php include 'navigation.php'; ?>
  <!-- END nav -->
  
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/banner.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="heading"><?php echo "Hi,  " .$login_name ;?></h2>
		      

            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          <article>
			<h2 style="text-align:center">Updating Profile</h2><br>
			<h4 style="text-align:center">Please update your profile accordingly. Thank you</h4><br>
			<form action="updateprofileaction.php" id="updateform" method ="POST">
			<?php
			
			$conn = OpenCon();
			
			//$regid = $_GET["regid"];
			$partid = $login_id;
			$partname = $login_name;
			
			
			$sql = "select * from participant where partid = $partid";
					
			$result = $conn->query($sql);
			
			if($result->num_rows > 0){
			//Output data of each row
				while($row = $result->fetch_assoc()){
					
					$partid = $row["partid"];
					$partname = $row["partname"];
					$partage = $row["partage"];
					$partstate = $row["partstate"];
					$partoccupation = $row["partoccupation"];
					$parttelno = $row["parttelno"];
					$partemail = $row["partemail"];
					$partaddress = $row["partaddress"];
					
					
					
						echo "<table id=user>";
							echo "<tr>";
								echo "<th>User ID</th>";
								echo "<td>"?><input type="text" name="partid" value="<?php echo $partid;?>" readonly><?php "</td>" ;
							echo "</tr>";
							echo "<tr>";
								echo "<th>Name</th>";
								echo "<td>"?><input type="text" name="partname" value="<?php echo $partname;?>" readonly><?php "</td>" ;
							echo "</tr>";
							echo "<tr>";
								echo "<th>Age </th>";
								echo "<td>"?><input type="text" name="partage" value="<?php echo $partage;?>" required><?php "</td>" ;
							echo "</tr>";
							echo "<tr>";
								echo "<th>State </th>";
								echo "<td>"?><input type="text" name="partstate" value="<?php echo $partstate;?>" required><?php "</td>" ;
							echo "</tr>";
							echo "<tr>";
								echo "<th>Occupation </th>";
								echo "<td>"?><input type="text" name="partoccupation" value="<?php echo $partoccupation;?>" required><?php "</td>" ;
							echo "</tr>";
							echo "<tr>";
								echo "<th>Contact Number </th>";
								echo "<td>"?><input type="text" name="parttelno" value="<?php echo $parttelno;?>" required><?php "</td>" ;
							echo "</tr>";
							echo "<tr>";
								echo "<th>Email </th>";
								echo "<td>"?><input type="text" name="partemail" value="<?php echo $partemail;?>" required><?php "</td>" ;
							echo "</tr>";
							echo "<tr>";
								echo "<th>Address </th>";
								echo "<td>"?><textarea type="text" name="partaddress" value="<?php echo $partaddress;?>" required></textarea><?php "</td>" ;
							echo "</tr>";
							
						echo "</table>";
				}
			}else{
				echo "Data cannot be displayed";
			}
			CloseCon($conn);
			?>
			
			<table>
				<tr>
					<td colspan="2" align="center">
					<br>
						<input class="btn btn-primary px-3 py-2" type="submit" value="Submit" />
						<input class="btn btn-primary px-3 py-2" type="button" value="Cancel"  onclick="history.back()" />
					</td>
				</tr>
			</table>
				
		</article>
        
        </div>

        <div class="col-md-6" ><img src="images/a10.png"></div>
      </div>
    </div>
  </div>
  		   


  
  
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
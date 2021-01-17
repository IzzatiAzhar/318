<?php
	include 'conn.php';
	$conn1 = OpenCon();
	session_start();
	
	 /**Value is user id coming from loginparticipantaction.php**/
	$user_check = $_SESSION['login_user'];
	$error = "username/password incorrect";
	
	$sql = "select * from organizer where orgid = $user_check";
	
	$result = $conn1->query($sql);
	
	//output data
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$login_id = $row['orgid'];
			$login_name = $row['orgname'];
		}
	}
	else{
		$_SESSION["error"] = $error;
		header("location: loginorg.php"); //send user back to the login page.
	}
	
	CloseCon($conn1);
?>
<?php
include 'conn.php';
$conn1=OpenCon();
session_start();

$user_check=$_SESSION['login_user'];
$sql="select * from organizer where orgID=$user_check";

$result=$conn1->query($sql);
//output data

if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		$login_id=$row['orgID'];
		$login_password=$row['orgpassword'];
		
	}
}
else 
{
	header("location:login.php");
	die();
}

CloseCon($conn1);
?>
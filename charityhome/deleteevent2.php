<?php 
$eventname = $_GET['eventname'];
//Connect DB
//Create query based on the event name passed from you table
//query : delete where eventname = $eventname
// on success delete : redirect the page to original page using header() method
$dbname = "ffa";
 include "conn.php";
  $conn = OpenCon();
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM event WHERE eventname = $eventname"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: myevent.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>
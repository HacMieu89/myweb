<?php
    //if (!isset($_SESSION['userid']) ||(trim ($_SESSION['userid']) == '')) {
      //header('location:index.php');
      //exit();
    //}

	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$database = "myweb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
		// Check connection
 
// Check connection
if (!$conn)
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

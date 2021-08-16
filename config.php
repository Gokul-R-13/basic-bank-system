<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "bank";
	// Create a database connection
	$conn = mysqli_connect($server, $username, $password, $database);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}
?>

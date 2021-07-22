<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "grip_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		echo"<script>alert(connection not configured)</script>";
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
		
	}
		
	
	
?>
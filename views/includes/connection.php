<?php
	$dbsevername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "innoview_db";

	$conn = mysqli_connect("localhost", "root", "","innoview_db");
	
	if (!$conn) {
		echo "No Connection";
	}
	else {
		echo "Connected";
	}
?>
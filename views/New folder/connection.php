<?php
	$dbsevername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "project";

	$conn = mysqli_connect("localhost", "root", "","project");
	
	if (!$conn) {
		echo "No Connection";
	}
	else {
		echo "Connected";
	}
?>
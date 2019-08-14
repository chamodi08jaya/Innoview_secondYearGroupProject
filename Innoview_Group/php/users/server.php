<?php
	$dbsevername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "innoview";

	$conn = mysqli_connect("localhost", "root", "","innoview");
	if ($conn->connect_error){
		die("connection Fail". $conn->connect_error);
	}

?>
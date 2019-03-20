<?php 
	$host = "localhost";
	$user = "root";
	$db_name = "sayvexpenses"; 
	$password = "1234"; 
	$con = mysqli_connect($host, $user, $password, $db_name);


	if ($con == false){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();//returns error if connection failed. 
	} 
?> 
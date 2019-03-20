<?php 

	$host = "localhost";
	$user = "root";
	$db_name = "sayvexpenses"; 
	$password = ""; 
	$con = mysqli_connect($host, $user, $db_name, $password);


	if ($con == false){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();//returns error if connection failed. 
	} 
	else{
		echo "YOU HAVE SUCCESSFULLY CONNECTED TO THE DATABASE";
	}

?> 
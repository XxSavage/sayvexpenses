<?php
	if (isset($_POST['create_account'])) {
		# code...

		require_once '../inc/db_connection.php';

		$firstname = $_POST['firstname'];
		$email = $_POST['email'];
		$lastname  = $_POST['lastname'];
		$username  = $_POST['username'];
		$get_password  = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];

		$password = password_hash($get_password, PASSWORD_DEFAULT); 

		$query   = "SELECT * FROM `users` WHERE email = '$email'"; 
		$result  = mysqli_query($con,$query); 
	    if (mysqli_num_rows($result) == 0){
	    	$user_info = "INSERT into `users` (firstname, email, lastname, username, password) VALUES ('$firstname', '$email', '$lastname', '$username', '$password' )";
			// die($user_info);
			$insertion_done = mysqli_query($con, $user_info);
			if ($insertion_done) {
				# code..
				$id_query 		= "SELECT * FROM `users` WHERE email = '$email'"; 
		      	$id_query_result 		= mysqli_query($con,$id_query); 
		      	if (mysqli_num_rows($id_query_result) == 1){
		      		$result_row 	= mysqli_fetch_assoc($id_query_result);
		      		$id 			= $result_row['id'];
		      		echo "<script type='text/javascript'>window.top.location='../php/dashboard.php?id=$id';</script>"; exit;
		      	}
			}
		}	
		else{
			echo "<script type='text/javascript'>window.top.location='../php/user_signup.php?email=alreadyregistered';</script>"; exit;
		}
	}
	else{
		echo "<script type='text/javascript'>window.top.location='../php/user_signup.php?route=false';</script>"; exit;
	}
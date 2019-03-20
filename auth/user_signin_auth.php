<?php
	if (isset($_POST['account_login'])) {
		# code...
		session_start();
		require_once '../inc/db_connection.php';

		$username = $_POST['username'];
		$password = $_POST['password'];

		$login_query 		= "SELECT * FROM `users` WHERE username = '$username'"; 

      	$query_result 		= mysqli_query($con,$login_query); 
      	if (mysqli_num_rows($query_result) == 1){

      		$result_row 					= mysqli_fetch_assoc($query_result);
		    $password_verify 				= password_verify($password, $result_row['password']); 

		    if($password_verify == 1){
		    	$_SESSION['id'] 			= $result_row['id']; 
			    die(print_r($_SESSION['id']));
			    header("Location: ../user-dashboard.php");
		   	}
		   	else{
      			header("Location: ../php/user_signin.php?report=incorrectpassword");
		   	} 
      	}
    }
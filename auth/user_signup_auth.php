<?php
	if (isset($_POST['create_account'])) {
		# code...
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname  = $_POST['lastname'];
		$username  = $_POST['username'];
		$password  = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];

		echo $firstname;		
	}
	else{
		echo "<script type='text/javascript'>window.top.location='../php/user_login.php?route=false';</script>"; exit;
	}
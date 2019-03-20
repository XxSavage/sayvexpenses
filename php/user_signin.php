<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="../css/user_signin.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
	<div id="header_container">
		<div id="logo_div">
			<a href="../index.php"><img src="../svgs/logo/logo-01-01.png"></a>
		</div>
		<div id="header_links">
			<div><a href="../index.php">Home</a></div>
			<div><a href="user_signup.php">Create an Account</a></div>
		</div>
	</div>
	<section id="login_section">
		<div id="header_text">Log into your Sayvexpense account</div>
		<div id="main_create_acct_box">
			<form method="POST" action="../auth/user_signin_auth.php" onsubmit="return account_login_validation()">
				<div id="username_div">
					<input id="username" type="text" name="username">
					<label for="username">Username:</label>
				</div>		
				<div id="password_div">
					<input id="password" type="text" name="password">
					<label for="password">Input Password:</label>
				</div>			
				<div id="account_login_div">
					<button name="account_login">Log In</button>
				</div>	
				<div id="forgot_password_div">
					<a href="forgot_password.php">Forgot Password?</a>
				</div>	
			</form>
		</div>
	</section>
	<script type="text/javascript">
		// function firstname_error(){
		// 	document.getElementById("label_for_firstname").innerHTML = "Please Enter Your First Name";
		// 	document.getElementById("label_for_firstname").style.color = "red";
		// 	document.getElementById("label_for_firstname").style.fontWeight = "bolder";
		// 	document.getElementById("firstname").style.borderBottomColor = "red";
		// }

		// function middlename_error(){
		// 	document.getElementById("label_for_middlename").innerHTML = "Please Enter Your Middle Name";
		// 	document.getElementById("label_for_middlename").style.color = "red";
		// 	document.getElementById("label_for_middlename").style.fontWeight = "bolder";
		// 	document.getElementById("middlename").style.borderBottomColor = "red";
		// }

		// function lastname_error(){
		// 	document.getElementById("label_for_lastname").innerHTML = "Please Enter Your Last Name";
		// 	document.getElementById("label_for_lastname").style.color = "red";
		// 	document.getElementById("label_for_lastname").style.fontWeight = "bolder";
		// 	document.getElementById("lastname").style.borderBottomColor = "red";
		// }

		// function account_creation_validation(){
		// 	var firstname 			= document.getElementById("firstname").value;
		// 	var middlename 			= document.getElementById("middlename").value;
		// 	var lastname 			= document.getElementById("lastname").value;
		// 	var username 			= document.getElementById("username").value;
		// 	var password 			= document.getElementById("password").value;
  // 			var confirm_password 	= document.getElementById("confirm_password").value;

  // 			if ((firstname.length == 0) && (lastname.length == 0)) {
		// 		firstname_error();
		// 		lastname_error();
	 //  			return false;
  // 			}
  // 			else{
  // 				if ($password == $confirm_password) {
  // 					return true;
  // 				}
  // 				else{
  // 					return false;
  // 				}
  // 			}
		// }
	</script>
</body>
</html>
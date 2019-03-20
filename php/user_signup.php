<!DOCTYPE html>
<html>
<head>
	<title>User Signup</title>
	<link rel="stylesheet" type="text/css" href="../css/user_signup.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
	<div id="header_container">
		<div id="logo_div">
			<a href="../index.php"><img src="../svgs/logo/logo-01-01.png"></a>
		</div>
		<div id="header_links">
			<div><a href="../index.php">Home</a></div>
			<div><a href="forgot_password.php">Forgot Password</a></div>
		</div>
	</div>
	<section id="login_section">
		<div id="header_text">Create your Sayvexpense account</div>
		<div id="main_create_acct_box">
			<form method="POST" action="../auth/user_signup_auth.php" onsubmit="return account_creation_validation()">
				<div id="first_and_lastname_div">
					<div id="firstname_div">
						<input id="firstname" type="text" name="firstname">
						<label id="label_for_firstname" for="firstname">First Name:</label>
					</div>
					<div id="lastname_div">
						<input id="lastname" type="text" name="lastname">
						<label id="label_for_lastname" for="lastname">Last Name:</label>
					</div>
				</div>
				<div id="username_div">
					<input id="username" type="text" name="username">
					<label for="username">Username:</label>
				</div>	
				<div id="email_div">
					<input id="email" type="text" name="email">
					<label id="label_for_email" for="label_for_email">Email Address:</label>
				</div>	
				<div id="password_container">
					<div id="password_div">
						<input id="password" type="text" name="password">
						<label for="password">Create Password:</label>
					</div>		
					<div id="confirm_password_div">
						<input id="confirm_password" type="text" name="confirm_password">
						<label for="confirm_password">Confirm Password:</label>
					</div>
				</div>
				<div id="create_account_div">
					<button name="create_account">Create Account</button>
				</div>	
				<div id="account_login">
					<a href="user_signin.php">Log In</a>
				</div>	
			</form>
		</div>
	</section>
	<script type="text/javascript">
		function firstname_error(){
			document.getElementById("label_for_firstname").innerHTML = "Please Enter Your First Name";
			document.getElementById("label_for_firstname").style.color = "red";
			document.getElementById("label_for_firstname").style.fontWeight = "bolder";
			document.getElementById("firstname").style.borderBottomColor = "red";
		}

		// function middlename_error(){
		// 	document.getElementById("label_for_middlename").innerHTML = "Please Enter Your Middle Name";
		// 	document.getElementById("label_for_middlename").style.color = "red";
		// 	document.getElementById("label_for_middlename").style.fontWeight = "bolder";
		// 	document.getElementById("middlename").style.borderBottomColor = "red";
		// }

		function lastname_error(){
			document.getElementById("label_for_lastname").innerHTML = "Please Enter Your Last Name";
			document.getElementById("label_for_lastname").style.color = "red";
			document.getElementById("label_for_lastname").style.fontWeight = "bolder";
			document.getElementById("lastname").style.borderBottomColor = "red";
		}

		function account_creation_validation(){
			var firstname 			= document.getElementById("firstname").value;
			var middlename 			= document.getElementById("middlename").value;
			var lastname 			= document.getElementById("lastname").value;
			var username 			= document.getElementById("username").value;
			var password 			= document.getElementById("password").value;
  			var confirm_password 	= document.getElementById("confirm_password").value;

  			if ((firstname.length == 0) && (lastname.length == 0)) {
				firstname_error();
				lastname_error();
	  			return false;
  			}
  			else{
  				if ($password == $confirm_password) {
  					return true;
  				}
  				else{
  					return false;
  				}
  			}
		}
	</script>
</body>
</html>
<?php 
	if (isset($_GET['id'])) {
		# code...
		$id = $_GET['id'];
		session_start();
		$_SESSION['id'] = $id;
		require_once '../inc/db_connection.php';
	}
	else{
		echo "<script type='text/javascript'>window.top.location='../index.php';</script>"; exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Sayvexpense</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
</head>
<body>
	<section id="main_body_section">
		<?php require_once '../inc/sidebar.php'; ?>
		<div id="right_body_section">
			<div id="welcome_text" onmouseleave="effects_onleave();" onmouseover="effects_onover();"><p id="welcome_text_p">Welcome <?php echo $username; ?>, would you like to add expenses today?</p></div>	
			<div id="add_expenses_section">
				<form action="" method="post">
					<div id="">
						<input type="text" name="date_of_expense" id="date_of_expense">
						<label for="date_of_expense">The date of the expense:</label>
					</div>
					<div id="">
						<input type="text" name="value_of_expense" id="value_of_expense">
						<label for="value_of_expense">The value of the expense:</label>
					</div>
					<div id="">
						<input type="text" name="reason_of_expense" id="reason_of_expense">
						<label for="reason_of_expense">The reason of the expense:</label>
					</div>
				</form>
			</div>
		</div>
	</section>
</body>
<script type="text/javascript">
	function effects_onover(){
		document.getElementById("welcome_text").style.background 	= "black";
		document.getElementById("welcome_text_p").style.width 		= "70%";
		document.getElementById("welcome_text_p").style.float 	= "right";
	}
	function effects_onleave(){
		document.getElementById("welcome_text").style.background 	= "#660066";
		document.getElementById("welcome_text_p").style.width 		= "100%";
	}
</script>
</html>
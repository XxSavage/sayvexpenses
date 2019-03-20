<div id="main_sidebar_container">
	<div id="user_icon_container">
		<div id="colored_div">
			<p>
				<?php
					$id_query 		= "SELECT * FROM `users` WHERE id = '$id'"; 
			      	$id_query_result 		= mysqli_query($con,$id_query); 
			      	if (mysqli_num_rows($id_query_result) == 1){
			      		while ($result_row 		= mysqli_fetch_assoc($id_query_result)) {
			      			# code...
			      			$username = $result_row['username'];
							// $string = "My milkshake brings all the boys to the yard";
							 
							// //Get the first character.
							// $firstCharacter = $string[0];
							 
							//Get the first character using substr.
							$firstletter = substr($username, 0, 1);
							echo $firstletter;
			      		}
			      	}
				?>
			</p>
		</div>
		<div id="username"><?php echo $username; ?></div>
	</div>
	<div id="logo_container">
		<img src="../svgs/logo/logo-01-01.png">
	</div>
	<div id="navigation_bar_links">
		<div>Dashboard</div>
		<div><a href="../index.php">Homepage</a></div>
		<div>Add Expenses</div>
		<div>See all expenses</div>
		<div>Log Out</div>
	</div>
</div>
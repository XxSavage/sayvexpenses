<!DOCTYPE html>
<html>
<head>
	<title>Sayvexpenses</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body onload="script();">
	<script type="text/javascript">
		function script(){
		    setTimeout(function(){
		    	document.getElementById('main_header_text_container').style.left = '0%'; // new left position is 0%
		        document.getElementById('right_sided_svg_bg_container').style.top = '0%'; // new left position is 0%
		    }, 100); // 2000 = 2 seconds after page load
		}
	</script>
	<div id="main_header_container">
		<div id="right_sided_svg_bg_container">
			<img id="right_sided_svg_bg" src="svgs/header_bg.svg" />
		</div>
		<div id="header_links">
			<div id="logo_div">
				<img src="svgs/logo/logo-01-01.png"></a>
			</div>
			<div id="goto_div">
				<div>Home</div>
				<div><a href="php/user_signup.php">Create An Account</a></div>
				<div><a href="php/user_signin.php">Log In</a></div>
			</div>
		</div>
	</div>	
	<div id="main_header_text_container">
		<div id="text_in_header_container">
			<p><small>Want a good way to keep track of your</small></p>
			<p>EXPENSES</p>
<!-- 			<p>for later?</p>
 -->			<p id="try_sayvexpenses"><a href="php/user_signup.php">Try Sayvexpenses</a></p>
		</div>
	</div>
</body>
</html>
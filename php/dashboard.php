<?php 
	session_start();
	$id = $_GET['id'];
	$_SESSION['id'] = $id;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Sayvexpense</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
</head>
<body>
	<?php require_once '../inc/sidebar.php'; ?>
</body>
</html>
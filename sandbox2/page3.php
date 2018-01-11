<?php 
	session_start();
	$name = isset($_SESSION['name']) ? : 'Guest';
	$email = $_SESSION['email'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP SESSIONS</title>
</head>
<body>
	<h1> Hello <?php echo $name ?></h1>
</body>
</html>
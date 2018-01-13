<?php 
	if(isset($_POST['submit'])){
		$username = htmlentities($_POST['username']);
		// 1 Hour
		setcookie('username', $username, time()+3600);
		header('Location: page2.php');
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Cookies</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="username" placeholder="Enter Username">
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
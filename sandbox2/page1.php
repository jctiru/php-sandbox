<?php 
	if(filter_has_var(INPUT_POST, 'submit')){
		session_start();
		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['email'] = htmlentities($_POST['email']);
		header('location: page2.php');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="name" placeholder="Enter name">
		<br>
		<input type="email" name="email" placeholder="Enter email"><br>
		<input type="submit" name="submit" value="Submit"> 

	</form>
</body>
</html>
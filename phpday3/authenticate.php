<?php 
	// require 'users.php';
	$jsonString = file_get_contents('data.json');
	$users = json_decode($jsonString, true);
	$username = $_POST['username'];
	$password = $_POST['password'];
	if ($users[$users[$username]] == $password) {
		$_SESSION['username'] = $username;
		//echo "SUCCESS";
		header('location: index.php');

	} else {
		// echo "<script>alert('Error login')</script>";
		echo '<br>';
		echo $users['user']
		echo '<br>';
		echo $username;
		echo '<br>';
		echo $password;
		// echo "$password";
		// print_r($users) ;
		// echo '<pre>' . print_r($users, true) . '</pre>';
		// echo $jsonString;
		// header('location: index.php');
	}
 ?>
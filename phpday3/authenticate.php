<?php
	session_start();
 	$jsonString = file_get_contents('data.json');
 	$users = json_decode($jsonString, true);
 	$username = $_POST['username'];
 	$password = $_POST['password'];
 	$foundMatch = false;
 	$wrongPassword = false;
 	foreach ($users['users'] as $user) {
 		if ($user['username'] == $username)
 		{
 			if ($user['password'] == $password){
				$foundMatch = true;
 				break;
 			} else {
 				$wrongPassword = true;			
 				break;
 			}
 		}
 	}
 	if ($foundMatch==true) {
 		$_SESSION['username'] = $username;
 		$_SESSION['password'] = $password;
 		echo "Success";
 	} else {
 		if ($wrongPassword){
 			echo "Login Error. Wrong password";
 		} else {
 			echo "No $username username found!";
 		}	
 	}
 ?>
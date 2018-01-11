<?php
 	$jsonString = file_get_contents('data.json');
 	$users = json_decode($jsonString, true);
 	$username = $_POST['username'];
 	$password = $_POST['password'];
 	$foundMatch = false;
 	foreach ($users['users'] as $user) {
 		if ($user['username'] == $username)
 		{
 			if ($user['password'] == $password){
		 		echo "$username";
				echo "<br>";
				echo "$password";
				echo "<br>";
				echo "Success";
				$foundMatch = true;
 				break;
 			} else {
 				$foundMatch = true;
 				echo "Login Error. Wrong password";
 				break;
 			}
 		}
 	}
 	if ($foundMatch==false) {
 		echo "No $username username found!";
 	} 
 ?>
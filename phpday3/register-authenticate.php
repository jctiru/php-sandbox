<?php 
	if($_POST)
	{
		$jsonString = file_get_contents('data.json');
 		$users = json_decode($jsonString, true);
 		$username = $_POST['registerUsername'];
 		$available = true;
 		foreach ($users['users'] as $user) {
 			if ($user['username']==$username) {
 				$available = false;
 				break;
 			} 
 		}
 		if($available){
 			echo "Username available";
 		} else {
 			echo "Username already exist!";
 		}
	}
?>
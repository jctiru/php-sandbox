<?php 
	$users = '{
		"users": [
			{
				"name": "Juan Dela Cruz",
				"email": "j@j.com",
				"password": "jdc"
			},
			{
				"name": "John Cena",
				"email": "j@c.com",
				"password": "jc"	
			},
			{
				"name": "Maria magdalena",
				"email": "m@m.com",
				"password": "mm"
			}
		]
	}';
	if(isset($_POST['username']) and isset($_POST['password'])){
		$foundMatch = false;
		$usersArr = json_decode($users, true);
		foreach ($usersArr['users'] as $user ) {
			if($user['name'] == $_POST['username']){
				if($user['password'] == $_POST['password']){
					$foundMatch = true;
					echo "Found Match";
					break;
				} else{
					$foundMatch = true;
					echo "Wrong Password";
					break;
				}
			}
		}
		if($foundMatch == false){
			echo "No account found";
		}
	}

 ?>
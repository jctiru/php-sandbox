<?php 
	$user = ['name' => 'JC', 'email' => 'blabla@ya.c', 'age' => 35];
	$user = serialize($user);
	setcookie('user', $user, time() + (86400 * 30));

	$user = unserialize($_COOKIE['user']);

	print_r($user);
 ?>
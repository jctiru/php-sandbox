<?php 
	$newTask = $_POST['task'];
	$todos = file_get_contents('assets/todo.json');
	$todos = json_decode($todos,true);
	array_push($todos, array('task' => $newTask, 'done' => false));
	$file = fopen('assets/todo.json', 'w');
	fwrite($file, json_encode($todos, JSON_PRETTY_PRINT));
	fclose($file);
	// var_dump($todos);
	end($todos);
	echo key($todos);
 ?>
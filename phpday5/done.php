<?php 
	$id = $_POST['id'];
	$todos = file_get_contents('assets/todo.json');
	$todos = json_decode($todos, true);
	foreach ($todos as $key => &$todo) {
		if($key == $id){
			if ($todo['done'] == false){
				$todo['done'] = true;
			} else {
				$todo['done'] = false;
			}
		}
	}

	$file = fopen('assets/todo.json', 'w');
	fwrite($file, json_encode($todos, JSON_PRETTY_PRINT));
	fclose($file);
	$id = count($todos) -1;
	echo $id;
 ?>
<?php 
$id = $_POST['id'];
$todos = file_get_contents('assets/todo.json');
$todos = json_decode($todos, true);

array_splice($todos, $id, 1);
// echo $todos;
$file = fopen('assets/todo.json', 'w');
fwrite($file, json_encode($todos, JSON_PRETTY_PRINT));
fclose($file);
 ?>
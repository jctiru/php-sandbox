<?php 
	$index = $_POST['index'];
	$string = file_get_contents("../items.json");
	$items = json_decode($string, true);
	echo json_encode($items[$index]); 
 ?>
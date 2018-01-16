<?php 
	$index = $_POST['index'];
	$string = file_get_contents('items.json');
	$items = json_decode($string, true);

	//array_splice($objectarray, $index, 1); 
    //array_splice accepts 3 parameters (array, start, length) and removes the given 
    //array and then normalizes the index
    //OR 
    //unset($objectarray[$index]); //removes the array at given index
    //$reindex = array_values($objectarray); //normalize index
    //$objectarray = $reindex; //update variable

    array_splice($items, $index, 1);
    $file = fopen('items.json', 'w');
	fwrite($file, json_encode($items, JSON_PRETTY_PRINT));
	fclose($file);
 ?>
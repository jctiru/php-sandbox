<?php 
	session_start();
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		$index = $_POST['index'];
		
		if (isset($_SESSION['cart'][$index])) {
			$_SESSION['cart'][$index] += 1;
		} else {
			$_SESSION['cart'][$index] = 1;
		}
		echo array_sum($_SESSION['cart']);
	}

	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    	$totalCost = 0;
    	if(isset($_SESSION['cart'])){
    		$string = file_get_contents('items.json');
			$items = json_decode($string, true);
    		foreach ($_SESSION['cart'] as $key => $value) {
    			$totalCost += ($value * $items[$key]['price']);
    		}
    	}
    	echo "P ".$totalCost;
	}
 ?>
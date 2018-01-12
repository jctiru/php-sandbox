<?php 

	$names=['Adrian', 'Jeremy', 'Angelo', 'Linus', 'Xelo', 'Robert'];

	if(isset($_POST['name'])){
		$searchName = $_POST['name'];
		$found = false;
		$nameList = "";
		if(!empty($searchName))
		{
			foreach ($names as $name) {
				$name = strtolower($name);
				if (strpos($name, $searchName) !== false){ 
		    		echo $name;
				}
			}
			// if ($found == false) {
			// 	echo "");
			// }
		}
	}

 ?>
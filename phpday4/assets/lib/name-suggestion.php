<?php 
	$names=['Adrian', 'Jeremy', 'Angelo', 'Linus', 'Xelo', 'Robert', 'Jonathan'];
	if(isset($_POST['name'])){
		$searchName = $_POST['name'];
		if(!empty($searchName))
		{
			foreach ($names as $name) {
				$name = strtolower($name);
				if (strpos($name, $searchName) !== false){ 
		    		echo ucwords($name)."<br>";
				}
			}	
		}
	}

 ?>
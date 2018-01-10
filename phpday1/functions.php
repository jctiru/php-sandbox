<?php

	// Functions
	function printTable($rows, $columns){
		echo "<table>";
		for ($i=0; $i < $rows; $i++) {
			echo "<tr>"; 
			for ($j=0; $j < $columns; $j++) { 
				echo "<td>(content)</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		echo "<br>";
	}
	function factorial($num){
		$sum = 1;
		for ($i=1; $i <= $num ; $i++) { 
			$sum *= $i;
		}
		echo $sum;
		echo "<br>";
	}
	function multiplicationTable(){
		echo "<table>";
		for ($x=1; $x <= 12 ; $x++) {
			if ($x==1){
				echo "<tr>";
				for ($h=0; $h < 13; $h++) { 
					echo "<th>" . $h . "</th>";
				}
				echo "</tr>";		
			} 
			echo "<tr>";
			echo "<th>" . $x. "</th>";
			for ($y=1; $y <= 12 ; $y++) { 
				echo "<td>" . ($x * $y) . "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		echo "<br>";		
	}
	function fox(){
		$phrase ="the quick brown fox jumps over the lazy dog.";
		echo substr($phrase, stripos($phrase, "quick"));
		echo "<br>";
		$colors = ["red", "green", "orange"];
		for ($i=0; $i < count($colors) ; $i++) { 
			echo $colors[$i] . "<br>";
		}
		$num = strlen($phrase);
		for ($i=0; $i < $num ; $i++) { 
			if($i % 2 == 0)
			{
				echo strtoupper($phrase[$i]);	
			} else{
				echo strtolower($phrase[$i]);
			}
		}
		echo "<br>";
		echo "string";
		echo "<br>";
		echo "<br>";
	}

?>
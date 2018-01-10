<?php
function getLyrics(){
	$gifts = array("a partridge in a pear tree", "two turtle doves", "three french hens", "four calling birds", "five golden rings", "six geese a-laying", "seven swans a-swimming", "eight maids a-milking", "nine ladies dancing", "ten lords a-leaping", "eleven pipers piping", "twelve drummers drumming");
	$days = array("first", "second", "third", "fourth", "fifth", "sixth", "seventh", "eight", "ninth", "tenth", "eleventh", "twelveht");
	$img = array ("1.png", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png", "8.png", "9.png", "10.png", "11.png", "12.png");
	echo "<h2>12 Days of Christmas</h2>";
	for ($x=0; $x < count($gifts) ; $x++) { 
		echo "On the $days[$x] day of Christmas, my true love sent to me: <br>" ;
		for ($y=$x; $y + 1 > 0 ; $y--) {
				echo "<img src='img/$img[$y]'>"; 			
				echo $gifts[$y];
			if ($y==0){
				echo ".";
			} else {
				echo ", ";
				if($y==1){
					echo " and ";
				}
			}			
		}
		echo "<hr>";
	}
}
?>


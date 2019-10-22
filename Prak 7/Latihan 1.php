<?php

function increment(&$x, &$y){
	$temp=$x;
	$x=$y;
	$y=$temp;
	echo "".$x." ".$y; 
}

$i=50;
$j=75;
echo "".$i." ".$j;
echo "<br/>";
swap ($i, $j) 
?>



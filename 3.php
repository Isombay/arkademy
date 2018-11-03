<?php

function prima($x, $y){
	$a = 0;
	$i = 0;
	$j = 0;
	while (true) {
		$b = 0;
		for ($c=1; $c <= $a; $c++) { 
			if ($a % $c == 0){
				$b++;
			}
		}
		if ($b == 2){
			echo $a.',';
			$i++;
			if ($i % $x == 0) {
				echo PHP_EOL;
				$j++;
			}
		}
		
		if ($y == $j){
			break;
		}
		$a++;
	}
}

prima(3, 4);
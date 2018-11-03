<?php

function isBentrok($aa,$bb){
	$a = 0;

	$c = $aa * $bb;
	while(true){
		$b = 0;

		$a+=$aa;
		while ($b < $c) {
			$b+=$bb;
			if ($a == $b) {
				echo 'Akan diperoleh result: '.$a.PHP_EOL;
				break;
				exit;
			}
			// echo $a.'-'.$b.'-'.$c.PHP_EOL;
		}
		if ($a == $b) {
			break;
		}
	}
}

if (empty($argv[1])) {
    echo "How to use? etc. php 4.1.php 4 6\n";
} else {
    echo isBentrok($argv[1], $argv[2]);
}
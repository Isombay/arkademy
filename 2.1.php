<?php
// How to use? etc. php 2.1.php lkjhg_99

function validateUname($data)
{
		$pisahUnderscore = explode('_',$data);
		$str5=$pisahUnderscore[0];
		$int2=$pisahUnderscore[1];

		if ((str_word_count($str5) == 1) and (strlen((string) trim($str5)) == 5) and ((strlen((int) trim($int2)) == 2)))
		{
			echo "Terverifikasi";
		} else {
			echo "Coba lagi";
		}
}

if (empty($argv[1])){
	echo "How to use? etc. php 2.1.php lkjhg_99";
} else {
	echo validateUname($argv[1]) . PHP_EOL;
}


<?php 

function countChar($text, $word)
{
	echo "Akan diperoleh result: ".substr_count($text, $word).PHP_EOL;
}

if (empty($argv[1])) {
    echo "How to use? etc. php 5.1.php bootcamp o\n";
} else {
    echo countChar($argv[1], $argv[2]);
}
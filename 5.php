<?php 

function countChar($text, $word)
{
	echo "Akan diperoleh result: ".substr_count($text, $word).PHP_EOL;
}

countChar("bootcamp","o");
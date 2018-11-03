<?php

$data = array(
	"itemId"      => "1231822",
	"itemName"    => "desk",
	"price"       => "700000",
	"ratings"     => array(
		array("rater" => "akmal", "score"=>"4"),
  	array("rater" => "andi", "score"=>"5"),
	),
	"freeShiping" => "true",
	"color"       => array("brown", "black"),
);

function formatJson($data){
	return json_encode($data);;
}

echo formatJson($data);
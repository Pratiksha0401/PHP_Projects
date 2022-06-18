<?php

//For input

$handle = fopen("php://stdin","r");

echo "Enter String : ";
$str=fgets($handle);
$str=trim($str);
echo "Enter character to be searched : ";
$se=fgets($handle);

echo stripos($str, $se , 0);

$arr = str_split($str);
//print_r($arr);

// $sorted_chars=sort($arr);

$clength = count($arr);
//print_r($arr);
for($x = 0; $x < $clength; $x++) {
	if($arr[$x]== trim($se)){
		echo "$arr[$x] is at index $x";
		break;
	}
}
?>
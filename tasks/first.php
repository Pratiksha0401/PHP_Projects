<?php
 
// For input

$handle = fopen("php://stdin","r");

echo "Enter Number : ";
$number=fgets($handle);

echo "Enter String:";
$str=fgets($handle);

$str_len=strlen(trim($str));
$len=$str_len;

if($number < $len){
	echo "String size is more";
}elseif ($number > $len) {
	echo " String size is less";
}
else{
	echo "Jackpot";
}
 
?>
<?php
/*
//call by value
//source value not modified
function getData($a){
	$a++;
	return $a;
} 
$i=10;
echo getData($i)."<br>";
echo $i."<br>";
//call by reference
//source value modified
function getDat1(&$a)
{
	$a++;
	return $a;
}

echo getDat1($i)."<br>";
echo $i."<br>";
*/

//Default argument function
function demo($name="Ram"){
 echo "$name<br>";
}

demo("Pratiksha");
demo();
?>
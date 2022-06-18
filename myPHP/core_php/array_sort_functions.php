<?php

	/*
	$season=array("Summer","winter","spring","Autumn");   

	echo "<h3>sort(array) ascending order</h3>";
	sort($season);
	$slen= count($season);
	for ($i=0; $i < $slen ; $i++) { 
		echo $season[$i]."<br>";
	}

	echo "<h3>rsort(array) descending order</h3>";
	rsort($season);
	$slen= count($season);
	for ($i=0; $i < $slen ; $i++) { 
		echo $season[$i]."<br>";
	}
	*/


	$courses=array("c++"=>"6000","Java"=>"1000");
	$courses["js"]="3000";

	echo "<h3>asort(array) ascending order a/c to value in associative array</h3>";
	asort($courses);
	foreach ($courses as $key => $value) {
		echo "key : ".$key .", value : ".$value."<br>";
	}

	echo "<h3>asort(array) ascending order a/c to key in associative array</h3>";
	ksort($courses);
	foreach ($courses as $key => $value) {
		echo "key : ".$key .", value : ".$value."<br>";
	}

	echo "<h3>arsort(array) descending order a/c to value in associative array</h3>";
	arsort($courses);
	foreach ($courses as $key => $value) {
		echo "key : ".$key .", value : ".$value."<br>";
	}

	echo "<h3>krsort(array) descending order a/c to key in associative array</h3>";
	krsort($courses);
	foreach ($courses as $key => $value) {
		echo "key : ".$key .", value : ".$value."<br>";
	}
?>
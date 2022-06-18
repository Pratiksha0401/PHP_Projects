<?php
//array holds mutiple values of multiple type
/*
	$p=array(1,'2','Pratiksha');
	echo "<pre>";
	print_r($p);  //used for debugging or more human readable way
	var_dump($p); //info holds type and value
	*/

	//Indexed array
	/*
	$numbers= array('1','2','3');
	$numbers[3]='4';
	//echo $numbers; //array

	echo count($numbers)."<br>";

	//traversing
	foreach ($numbers as $i) {
		echo $i."<br>";
	}
	echo "<h1>For loop</h1>";
	for ($i=0; $i < count($numbers); $i++) { 
		echo $numbers[$i]."<br>";
	}
	*/

	//Associative Array key value pair
	/*
	$courses=array("c++"=>"1000","Java"=>"2000");
	$courses["js"]="3000";
	echo "<pre>";

	print_r($courses);

	foreach ($courses as $key => $value) {
		echo "key is ".$key.": value is ".$value."<br>";
	}
	*/

	//Multidimensinoal array
	$emp=array(
			array('1',"Pratiksha",80000),
			array('2',"Ram",90000),
			array("id"=>'3',"name"=>"Ram","salary"=>60000)
			);
	echo "<pre>";
	print_r($emp); 
	//echo count($emp);
	//traversing
	for ($row=0; $row < 2 ; $row++) { 
		for ($col=0; $col < 3; $col++) { 
			echo $emp[$row][$col]."<br>";
		}
	}
	
	echo "<h1>For loop for Multidimensinoal Associative array</h1>";
	foreach ($emp as $key => $value) {
    echo $key . "\n";
    foreach ($value as $sub_key => $sub_val) {
                  
        // If sub_val is an array then again
        // iterate through each element of it
        // else simply print the value of sub_key
        // and sub_val
        if (is_array($sub_val)) {
            echo $sub_key . " : \n";
            foreach ($sub_val as $k => $v) {
                echo "\t" .$k . " = " . $v . "\n";
            }
        } else {
            echo $sub_key . " = " . $sub_val . "\n";
        }
    }
}


?>
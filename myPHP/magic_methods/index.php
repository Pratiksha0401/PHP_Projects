<?php
spl_autoload_register(function($className){
	include_once 'classes/' . $className . '.php';
	//require_once 'classes/' . $className . '.php';
});

// include('classes/Home.php');
// require('classes/About.php');

echo "<br><h2>__construct()</h2>";
$home = new Home("Home");

$data=array("c++"=>"6000","Java"=>"1000");
$about= new About($data);
/*
//__call() method
$home->test(1,2,3);

//__callstatic() method
Home::Show('a','b','c');
*/
/*home about about home ==>> construct destruct order*/
/*
//__set()
echo "<br><h2>Set the private variable using __set() magic method</h2>";
$home->name="Home by __set() method";

//__get()
echo "<br><h2>Access of private variable using __get() magic method</h2>";
echo $home->name . "<br/>";
*/
/*
// construct , get and set for array
$data=array("c++"=>"6000","Java"=>"1000");
$about= new About($data);
echo "<pre>";
print_r($about);
echo "<br><h2>Set the private variable using __set() for array magic method</h2>";
echo $about->Java="Hello Java";

echo "<br><h2>Get the private variable using __get() for array magic method</h2>";
echo "<pre>";
print_r($about);
echo $about->Java;
*/
/*
//isset ==> for public variable , __isset()=>for array
$data=array("c++"=>"6000","Java"=>"1000");
$about= new About($data);
//home obj
var_dump(isset($home->test)); //private varible

var_dump(isset($about->test)); //public variable
var_dump(isset($about->Java)); //for array
*/
/*
echo "<br><h2>Get the public variable using unset() for magic method</h2>";
$demo=["a"=>'value of a','x'=>'value of x'];
print_r($demo);
unset($demo['a']);
print_r($demo);
echo "<br>";
echo "<br><h2>Get the private variable using __unset() for array magic method</h2>";
print_r($about);
echo "<br>";
unset($about->Java);
echo "<br>";
print_r($about);
echo "<br>";
*/
/*
echo "To get class name " . $about; //error
echo "To get class name " . $home; //toString
*/
/*
//_sleep & __wakeup
echo "To serialize obj => obj into array<br>";
$srl=serialize($home);
echo $srl;

$desrl=unserialize($srl);
print_r($desrl);
*/
?>
<?php
interface Show{
	function test();
}
class A implements Show{
	function test(){
		echo "A test<br>";
	}

	function demo(){
		echo "A<br>";
	}
}
class B {
	function test(){
		echo "B test<br>";
	}
	function demo(){
		echo "B<br>";
	}
}
function Test(Show $obj){
	$obj->test();
}

$obj=new A();
Test($obj);
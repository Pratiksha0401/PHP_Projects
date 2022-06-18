<?php
	
	class A {
		static $name="A";

		 function display(){
			return self::$name;
		}
		 function demo(){
			return static::$name;
		}
	
	}

	class B extends A{
		static $name="B";
	}

	$a=new A();
	echo $a->display()."<br>";

	echo $a->demo()."<br>";

	$b=new B();
	echo $b->display()."<br>";
	echo $b->demo()."<br>";
?>
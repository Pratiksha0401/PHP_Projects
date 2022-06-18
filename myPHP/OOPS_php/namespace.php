<?php
namespace a1{
	class x1{
		function __construct(){
			echo "x1 class from a1 namespace<br>";
		}
	}
	$obj=new x1();
}

namespace{
	class x1{
		function __construct(){
			echo "x1 class from global namespace<br>";
		}
	}
	$obj=new x1();
	$obj=new a1\x1();

	use a1\x1 as demo;
	$obj=new demo();
}
<?php
	class About{
		private $name;
		public $test="Test";

		public function __construct($names){
			$this->name = ($names);
		}

		function __get($arg){
			if(array_key_exists($arg, $this->name)){
				return $this->name[$arg];
			}
			else{
				return "Not found";
			}
		}

		function __set($arg,$value){
			if(array_key_exists($arg, $this->name)){
				return $this->name[$arg]=$value;
			}
			else{
				return "Not found";
			}	
		} 

		function __isset($arg){
			if(array_key_exists($arg, $this->name)){
				return $this->name[$arg];
			}
			else{
				return false;
			}	
		} 

		function __unset($arg){
			unset($this->name[$arg]);
		}

		function __toString(){
			return get_class($this);
		}

		public function __destruct(){
			echo "<br>";
			echo "<h3> Memory is dealocated...<h3>";
		}
	}
?>
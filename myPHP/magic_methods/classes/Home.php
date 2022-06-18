<?php 
	class Home{

		private $name;
		private $test="Test";
		
		public function __construct($name){
			echo $this->name=$name;
			echo "<br>";
		}

		function __toString(){
			//return get_class($this);
			return print_r($this);
		}

		//call when serialize method initialised to take only required entity in array
		function __sleep(){
			return array('test');
		}
		//mostly call on unserialised or db conn
		function __wakeup(){
			echo "This is wake up method";
		}

		function __get($arg){
			return $this->name;
		}

		function __set($arg,$value){
			$this->name=$value;	
		}

		function __call($name,$agrs){
			echo "Trying to access undefined function =>  $name";
			echo "<pre>";
			print_r($agrs);
		}

		static function __callstatic($name,$agrs){
			echo "Trying to access undefined static function =>  $name";
			echo "<pre>";
			print_r($agrs);
		}

		public function __destruct(){
			echo "<br>";
			echo "<h3> Memory is dealocated...<h3>";
		}
	}
 ?>
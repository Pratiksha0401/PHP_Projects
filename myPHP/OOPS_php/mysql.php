<?php

class User{
	private $id;
	private $firstName;
	private $mobileNO;
	private $email;

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
}

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


?>
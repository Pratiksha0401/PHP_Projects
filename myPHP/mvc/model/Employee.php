<?php 
	class Employee{
		private $id;
		private $name;
		private $salary;

		function __construct($id,$name,$salary){
			$this->id=$id;
			$this->name=$name;
			$this->salary=$salary;
		}

		function __get($item){
        switch($item){
            case "id":
                return $this->id;
                break;
            case "name":
                return $this->name;
                break;
            case "salary":
                return $this->salary;
                break;
            default:
                throw new Exception("Property $item does not exist.");
                break;
        	}
		}

		 public function __set($item, $value){
        switch($item){
            case "id":
                $this->id = $value;
                break;
            case "name":
                $this->name = $value;
                break;
            case "salar":
                $this->salary = $value;
                break;
            default:
                throw new Exception("Property $item does not exist.");
            }
        }
	}	
 ?>
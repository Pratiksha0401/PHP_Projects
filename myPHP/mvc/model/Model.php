<?php 
include 'Employee.php';
	class Model{
		function getEmplyeeDetails(){
			return array(
				"emp1"=>new Employee(1,"Pratiksha",2500.12),
				"emp2"=>new Employee(2,"Gaurav",6500.15)
			);
		}

		function getEmployee($name){
			$allEmployees=$this->getEmplyeeDetails();
			return $allEmployees[$name];
		}
	}
 ?>

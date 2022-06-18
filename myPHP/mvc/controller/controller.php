<?php 
include('model/Model.php');
	class controller{
		public $model;
		function __construct(){
			$this->model=new Model();
		}

		function invoke(){
			if(!isset($_GET['employee'])){
				$employees=$this->model->getEmplyeeDetails();
				var_dump($employees);
				include './view/employeeList.php';
			}else{
				$employee=$this->model->getEmployee($_GET['employee']);
			}
			$this->model;
		}
	}
 ?>
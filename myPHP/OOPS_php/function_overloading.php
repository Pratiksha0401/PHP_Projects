<?php 
class Employee{
	private $name;
	private $age;
	function setEmployee(...$arg){
               	echo $this->name=$arg[0];
               	echo "<br>";
               	echo $this->age=$arg[1];
               }

	 function __call($name,$arg){
         if($name == 'setEmployee')
            switch(count($arg)){
               case 0 : 
               return 0 ;
               break;
               case 1 :  
                setEmployee($arg);
               break;
               case 2 : 
               setEmployee($arg);
               break;
            }
      }
}

$emp = new Employee();
//echo $emp->setEmployee("Pratiksha");
echo $emp->setEmployee("Pratiksha",23);
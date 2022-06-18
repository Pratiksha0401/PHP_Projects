<?php

    class Employee{
        // private $id=0;
        // private $name="Pratiksha";
        // private $salary=78548;
        private $id;
        private $name;
        private $salary;

        function display(){
            // $this->id++;
            // echo $this->id."<br>";
            // echo $this->name."<br>";
            echo "<br>";
            echo $this->salary."<br>";
        }

        //default constructor
        // function __construct(){
        //     echo $this->id="2"."<br>";
        //     echo $this->name="Rani"."<br>";
        //     echo $this->salary="20000"."<br>";
        // }

        //paramerterised constructor(
        function __construct($id,$name,$salary){
                echo $this->id=$id."<br>";
                echo $this->name=$name."<br>";
                echo $this->salary=$salary."<br>";
            }
        function display1(){
            return $this->display();
        }    
         
    }

    class Organisation extends Employee{
        public $department="IT";

        // function __construct($id,$name,$salary){
        //     parent::__construct($id,$name,$salary);
        // }

        function smart(){
           return $this->name;
        }
    }

    // $emp1= new Employee;
    // echo $emp1->display();

    // $emp2= new Employee;
    // echo $emp2->name."<br>";

    // $emp3= new Employee;
    // echo $emp3->name="Gaurav";

   // $emp4=new Employee();
   // $emp5= new Employee('3',"Raju","54353");

    $emp6= new Employee('3',"Raju","54353");
    echo $emp6->display1();

    $org=new Organisation("4","Ajay",4578);
    echo $org->department."<br>";
    echo $org->smart()."<br>";
    
?>
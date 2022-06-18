<?php

class Employee{
    private $id;
    private $name;
    private $sal1;
    private $sal2;

    function total(){
        return $this->sal1 + $this->sal2;
    }

    function __construct($id,$name,$sal1,$sal2){
        $this->id=$id;
        $this->name=$name;
        $this->sal1=$sal1;
        $this->sal2=$sal2;
    }
}

class Organisation extends Employee{
    private $department="IT";

    function samrt_emp(){
        return $this->total();
    }
}

$emp=new Employee("1", "Pratiksha",1103,8145);
//var_dump($emp)."<br>";
//echo $emp->total();

$org = new Organisation("2","Ram",11,44);
echo $org->samrt_emp();
?>
<?php

class calculation
{
public $a , $b , $c;


function sum(){ 
 $this->c = $this->a + $this->b;
 return $this->c;
}

function sub(){

 $this->c = $this->a - $this->b;
 return $this->c;
}

function __construct($num1,$num2){
    $this->a=$num1;
    $this->b=$num2;
}

}

$Cc = new calculation(2,8);

$Cb = new calculation(9,5);

echo "svalue after subtraction is" . $Cc->sub() . "<br>";
echo "value after sum is " . $Cb->sum();

?>
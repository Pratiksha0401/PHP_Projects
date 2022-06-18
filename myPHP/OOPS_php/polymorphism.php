<?php

abstract class Discount {
    private $amount;
    public abstract function discount();
}

class Discount15per extends Discount {

    function __construct($x) {
        
        $this->amount = $x;
    }

    function discount() {
        
        return $this->amount * 0.15 ;
    }
}

class Discount20per extends Discount {

     function __construct($x) {
        
        $this->amount = $x;
    }

    function discount() {
        
        return $this->amount * 0.20 ;
    }
}

$Discounts = [ new Discount20per(500), new Discount15per(1200), new Discount20per(88457) ];

foreach ($Discounts as $Discount) {
    echo "<br>";
    echo $Discount->discount() . "\n";
}
<?php
trait message1 {
public function msg1() {
    echo "trait msg 1 !! ";
  }
}

trait message2 {
public function msg2() {
    echo "trait msg 2 !! ";
  }
}

trait message3 {
public function msg2() {
    echo "trait msg 3 !! ";
  }
}

trait message4 {
private function msg4() {
    echo "trait msg 4 !! ";
  }
}

class Welcome {
	//same function in msg2, msg3
  use message1, message2,message3,message4{
  	message3::msg2 insteadof message2;
  	message1::msg1 as ram;
  	message4::msg4 as public sham;
  }
}

$obj = new Welcome();
$obj->msg1();
$obj->ram();
//$obj->msg4();
$obj->sham();

<?php

$str = "Hello Pratiksha";

$arr = str_split($str);
echo "<pre>";
//print_r($arr);

$sorted_chars=sort($arr);

$clength = count($arr);
for($x = 0; $x < $clength; $x++) {
  echo $arr[$x];
  echo "<br>";
}
?>

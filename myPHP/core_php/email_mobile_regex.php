<?php

function valid_email($str) {
return (!preg_match("/^([a-zA-Z0-9+_.-]+@[a-z]+\.[a-z]{2,3}+\.[a-z]{2,3})$/", $str)) ? FALSE : TRUE;
}

if(!valid_email("test@exampl3e.com.in")){
echo "Invalid email address.";
}else{
echo "Valid email address.";
}
print_r(PDO::getAvailableDrivers());
?>
<?php 
$host = '192.168.50.166:3306';
$user = 'root';
$pass = '';

$conn = mysqli_connect($host, $user, $pass );
if(!$conn){
die('Could not connect: '.mysqli_connect_error());
}
echo 'Connected successfully<br/>';

 ?>
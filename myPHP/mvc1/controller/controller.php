<?php 
$page='home';
if(isset($_GET['page'])){
	//http://localhost/myPHP/mvc1/  ==> Home
	$page=$_GET['page'];
}

include('model/model.php');
if($page=='home'){
	//http://localhost/myPHP/mvc1/index.php?page=home
	include('view/home.php');
}elseif ($page=='about') {
	//http://localhost/myPHP/mvc1/index.php?page=about
	include('view/about.php');
}
else{
	//http://localhost/myPHP/mvc1/index.php?page=anything
	include('view/not_found.php');
}
?>
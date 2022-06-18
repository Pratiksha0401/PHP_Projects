<?php

import_csv_data("sample.csv", "contacts");

function import_csv_data($file_path,$table){
	$file = file($file_path);
	$col_header = null;
	$rows = null;
	foreach($file as $line){
		$csv = str_getcsv($line);
		if(!$col_header){
			$col_header=$csv;
		}else{
			$rows[]=$csv;
		}
	}
	//print_r($rows);
	//print_r($col_header);

	foreach ($rows as $row) {
		// foreach($row as $value){
		// 	echo "row :: $value";
		// }
		//$query = get_query($row , $col_header, $table);
		$query="insert into $table (id,firstName,lastName,age,city,salary,phoneNumber)values($row[0],$row[1],$row[2],$row[4],$row[5],$row[6])";
		//echo "sql :: $sql";
		echo "data :: $row[0]";
		insert($query);
	}
	echo "inserted!!";
}

function insert($query){
	$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'csv_import';

$conn = mysqli_connect($host, $user, $pass, $dbname);
	if(! $conn )
	{
		die('Could not connect: ' . mysqli_connect_error());
	}
	//echo 'Connected successful...';
	echo "query::$query";
	if(mysqli_query($conn, $query)){ 
	 echo "Record inserted successfully"; 
	 }else{ 
	 echo "Could not insert record: ". mysqli_error($conn); 
	 } 
	mysqli_close($conn);
}

function get_query($row, $cols,$table){
	$query="";
	$query .=get_insert_part($cols,$table);
	$query.=get_values_part($row);
	return $query;
}

function get_insert_part($cols,$table_name){
	$insert ="insert into ".$table_name."(";
	$first_done=false;
	foreach($cols as $col){
		if($first_done){
			$insert.=",";
		}else{
			$first_done=true;
		}
		$insert.=$col;
	}
	$insert.=")";
	return $insert;
}

function get_values_part($row){
	$query = "values (";
	$first_done=false;
	foreach($row as $val){
		if ($first_done) {
			$query.=",";
		}else{
			$first_done=true;
		}
		$query.=is_numeric($val)?$val:"'".$val."'";
	}
	$query.=")";
	return $query;
}


?>
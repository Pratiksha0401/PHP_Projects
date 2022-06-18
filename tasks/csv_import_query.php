<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'csv_import';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if(! $conn )
{
die('Could not connect: ' . mysqli_connect_error());
}
echo 'Connected successful...';

$file_path="sample.csv";
$table="test1";
$query="";
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
	
	$create = "create table csv_import.$table(
				$col_header[0] int(3) not null,
				$col_header[1] varchar(20) not null,
				$col_header[2] varchar(20),
				$col_header[3] int(3),
				$col_header[4] varchar(20),
				$col_header[5] double,
				$col_header[6] varchar(10) not null,
				primary key($col_header[0])
				);";
	if(mysqli_query($conn, $create)){ 
	 echo "Record inserted successfully"; 
	 }else{ 
	 echo "Could not insert record: ". mysqli_error($conn); 
	 } 

	foreach ($rows as $row) {
		$query="insert into $table(id,firstName,lastName,age,city,salary,phoneNumber)values($row[0],'$row[1]','$row[2]',$row[3],'$row[4]',$row[5],'$row[6]')";
		echo "sql :: $query";
		if(mysqli_query($conn, $query)){ 
		 echo "Record inserted successfully"; 
		 }else{ 
		 echo "Could not insert record: ". mysqli_error($conn); 
		 } 		
	}
mysqli_close($conn);
?>	
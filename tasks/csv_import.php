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
/*
$sql = 'CREATE Database csv_import';
if(mysqli_query( $conn,$sql)){
echo "Database mydb created successfully.";
}else{
echo "Sorry, database creation failed ".mysqli_error($conn);
}
*/
// Path to CSV file
$file = "C:/xampp8.1.2/htdocs/tasks/sample.csv";

// Name of table
$table = "contacts";

// Load CSV file into a table named 'test' and ignore the first line in file
$query = <<<eof
LOAD DATA INFILE '$file'
INTO TABLE $table
FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(id,firstName,lastName,age,city,salary,phoneNumber)
eof;

// Perform a query on the connected database
$conn->query($query);
?>
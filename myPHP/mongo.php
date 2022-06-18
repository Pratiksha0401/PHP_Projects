<?php
try{
		$conn = new MongoDB\Driver\Manager("mongodb://localhost:27017");
		echo "Connection Successful";
	} catch (MongoDBDriverExceptionException $e) {
		echo 'Failed to connect to MongoDB, is the service intalled and running?<br /><br />';
		echo $e->getMessage();
		exit();
	}
?>
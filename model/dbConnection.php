<?php //Author: Atanu Saha

	$host = 'localhost';
	$dbUser = 'root';
	$dbPass = '';
	$dbName = 'ebs';

	function getConnection()
	{
		global $host, $dbUser, $dbPass, $dbName; 
		$connection = mysqli_connect($host, $dbUser, $dbPass, $dbName);
		return $connection;
	}
?>
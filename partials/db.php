<?php
	$dsn = 'mysql:dbname=proyecto;host=localhost';
	$user = 'root';
	$password = '';

	try {
		$dbConn = new PDO($dsn, $user, $password);
	} catch (PDOException $ex) {
		echo 'Connection failed: ' . $ex->getMessage();
	}
?>

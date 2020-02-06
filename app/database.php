<?php

function db_connect() {
   $dbhost = 'remotemysql.com';
	$dbname = 'VHwLINMsoT';
	$dbuser = 'VHwLINMsoT';
	$dbpass = 'i8tV3BAx7x';
	
	try {
		$dbh = new PDO('mysql:host=remotemysql.com;dbname=VHwLINMsoT', $dbuser, $dbpass);
	} catch (PDOException $e) {
		echo "Error!: " . $e->getMessage() . "<br/>";
 		die();
 	}
	
	return $dbh;
}

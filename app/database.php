<?php

function db_connect() {
  $dbhost = 'salt.db.elephantsql.com';
$dbname = 'kfwvocpx';
$dbuser = 'kfwvocpx';
$dbpass = 'NLyEzy9vustoAXwrv5rxOOGpCXEJNNmN';

try {

$dbh = new PDO('pgsql:host='.$dbhost.';dbname='.$dbname, $dbuser, $dbpass);
	} catch (PDOException $e) {
		echo "Error!: " . $e->getMessage() . "<br/>";
 		die();
 	}
	
	return $dbh;
}

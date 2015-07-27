<?php

header('Content-type: application/json');

$METHOD = $_SERVER['REQUEST_METHOD'];
$APIURI = $_SERVER['REQUEST_URI'];

if ($METHOD == 'POST') {
	require('QueryManager.php');
	session_start();
	
	if (!empty($_SESSION["username"])) {

		$con = new Connect();
		$var = $con->connect_to_db();
	
		$queryManager = new QueryManager;
		$queryManager->query();
		
	} else {

		echo "Necesitás estar logueado.";
	}	
} else {
	
	header('HTTP/1.1 405 Method Not Allowed');
	header('Allow: POST');
}

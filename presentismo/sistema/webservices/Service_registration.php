<?php

header('Content-type: application/json');

$METHOD = $_SERVER['REQUEST_METHOD'];
$APIURI = $_SERVER['REQUEST_URI'];

if ($METHOD == 'POST') {

	$json = file_get_contents('php://input');
	$obj = json_decode($json, true);

	require('RegistrationManager.php');
	
	$registrationManager = new RegistrationManager();
	$registrationManager->registration($obj);

} else {

 	header('HTTP/1.1 405 Method Not Allowed');
	header('Allow: POST');
}